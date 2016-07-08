<?php
namespace THREEME\Threeme\Utilities;

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

/**
 * @author André Steiling <andre.steiling@threeme.de>
 *
 * Original from EXT:themes - Thomas Deuling <typo3@coding.ms>
 * https://github.com/typo3-themes/themes
 */
class CheckPageUtility
{

    /**
     * @param $pid
     * @return bool
     */
    public static function hasThemeableSysTemplateRecord($pid)
    {
        $templateCount = $GLOBALS['TYPO3_DB']->exec_SELECTcountRows(
            '*',
            'sys_template',
            'pid = ' . (integer) $pid . ' AND deleted=0 AND hidden=0 AND root=1'
        );

        if ($templateCount > 0)
        {
            return TRUE;
        }
        return FALSE;
    }

}
