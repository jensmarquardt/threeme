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
 * @author  LarsNieuwenhuizen
 */
class ReplaceStringViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

    /**
     * Replace the $searchFor string with $replaceString in $string
     *
     * @param $string string
     * @param $searchFor string
     * @param $replaceWith string
     * @return string
     */
    public function render($string, $searchFor, $replaceWith) {
        return str_replace($searchFor, $replaceWith, $string);
    }
}
