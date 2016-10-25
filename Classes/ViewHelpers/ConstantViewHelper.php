<?php
namespace THREEME\Threeme\ViewHelpers;

/*
 *  The MIT License (MIT)
 *
 *  Copyright (c) 2016 André Steiling, http://www.threeme.de
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in
 *  all copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 */

use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * @author André Steiling <andre.steiling@threeme.de>
 *
 * Original from EXT:themes - Thomas Deuling <typo3@coding.ms>
 * https://github.com/typo3-themes/themes
 */
class ConstantViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * Gets a constant
     *
     * @param string $constant The name of the constant
     * @return string Constant-Value
     *
     * = Examples =
     *
     * <code title="Example">
     * <threeme:constant constant="threeme.frontend.pidHome" />
     * </code>
     * <output>
     * 50
     * (depending on your constant)
     * </output>
     */
    public function render($constant = '')
    {

        $pageWithTheme   = \THREEME\Threeme\Utilities\FindParentPageWithThemeUtility::find($this->getFrontendController()->id);
        $pageLanguage    = (int)GeneralUtility::_GP('L');

        // instantiate the cache
        /** @var \TYPO3\CMS\Core\Cache\Frontend\FrontendInterface $cache */
        $cache           = GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Cache\\CacheManager')->getCache('threeme_cache');
        $cacheLifeTime = 60 * 60 * 24 * 7 * 365 * 20;
        $cacheIdentifierString = 'threeme-of-page-' . $pageWithTheme . '-of-language-' . $pageLanguage;
        $cacheIdentifier = sha1($cacheIdentifierString);

        // If flatSetup is available, cache it
        $flatSetup = $this->getFrontendController()->tmpl->flatSetup;
        if ((isset($flatSetup) && (is_array($flatSetup)) && (count($flatSetup) > 0)))
        {
            $cache->set(
                $cacheIdentifier,
                $flatSetup,
                array(
                        'page-' . $this->getFrontendController()->id
                ),
                $cacheLifeTime
            );
        } else {
            $flatSetup = $cache->get($cacheIdentifier);
        }

        // If flatSetup not available and not cached, generate it!
        if (!isset($flatSetup) || !is_array($flatSetup))
        {
            $this->getFrontendController()->tmpl->generateConfig();
            $flatSetup = $this->getFrontendController()->tmpl->flatSetup;
            $cache->set(
                $cacheIdentifier,
                $flatSetup,
                array(
                    'page-' . $this->getFrontendController()->id
                ),
                $cacheLifeTime
            );
        }

        // check if there is a value and return it
        if ((is_array($flatSetup)) && (array_key_exists($constant, $flatSetup)))
        {
            return $this->getFrontendController()->tmpl->substituteConstants($flatSetup[$constant]);
        }
        return NULL;
    }

    /**
     * @return \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController
     */
    public function getFrontendController()
    {
        return $GLOBALS['TSFE'];
    }
}
