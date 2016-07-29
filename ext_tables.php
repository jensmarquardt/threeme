<?php
if (!defined('TYPO3_MODE')) { die('Access denied.'); }

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Frontend', 'Threeme Frontend');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Extensions', 'Threeme Extensions');

if (TYPO3_MODE == 'BE') {
    // Override page icon
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        0 => 'LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:threeme-pagetree-sys-note',
        1 => $_EXTKEY,
        2 => 'threeme-pagetree-sys-note'
    ];

    // Add uniqueInPid to eval to avoid duplicate page title on same treelevel
    $GLOBALS['TCA']['pages']['columns']['title']['config']['eval'] = 'trim,required,uniqueInPid';
    $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem'] = str_replace(';frames,media,', ';frames,layout,media,', $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem']);

    // Add Threeme Logo and Background to the Backend
    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend'])) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend'] = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend']);
    }

    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend']['loginLogo']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend']['loginLogo']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend']['loginLogo'] = 'EXT:threeme/Resources/Public/Images/Backend/LoginLogo.png';
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend']['loginBackgroundImage']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend']['loginBackgroundImage']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend']['loginBackgroundImage'] = 'EXT:threeme/Resources/Public/Images/Backend/LoginBackgroundImage.jpg';
    }

    if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend'])) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend'] = serialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend']);
    }
}
