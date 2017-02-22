<?php
defined('TYPO3_MODE') or die();

// Add field 'layout' to GridElements content type
$GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem'] = str_replace(';frames,media,', ';frames,layout,media,', $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem']);
