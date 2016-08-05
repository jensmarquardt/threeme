<?php
namespace THREEME\Threeme\ViewHelpers;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * @author André Steiling <andre.steiling@threeme.de>
 */
class DecodeJsonViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * Initialize ViewHelper arguments
     *
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('json', 'string', 'The JSON string which should be decoded to a array', true);
        $this->registerArgument('assoc', 'boolean', 'When true, returned objects will be converted into associative arrays', false);
    }

    /**
     * Render the view helper
     *
     * @return string
     */
    public function render() {
        $cleanedJson = str_replace(array(',{', ',}', '[,{', '},]'), array('{', '}', '[{', '}]'), $json);
        return json_decode($cleanedJson, $assoc);
    }
}
