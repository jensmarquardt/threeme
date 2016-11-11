<?php
if (!defined('TYPO3_MODE')) { die('Access denied.'); }

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('threeme', 'Configuration/TypoScript/Frontend', 'Threeme - Enable Distribution');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('threeme', 'Configuration/TypoScript/Extensions', 'Threeme - Enable 3rd-Party Extensions');

if (TYPO3_MODE == 'BE') {
    // Override page icon
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        0 => 'LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:threeme-pagetree-sys-note',
        1 => 'threeme',
        2 => 'threeme-pagetree-sys-note'
    ];

    // Add uniqueInPid to eval to avoid duplicate page title on same treelevel
    $GLOBALS['TCA']['pages']['columns']['title']['config']['eval'] = 'trim,required,uniqueInPid';
    $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem'] = str_replace(';frames,media,', ';frames,layout,media,', $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem']);

    // Add Threeme Logo and Background
    $extConfBackend = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend']);

    if (empty(trim($backendExtConf['loginLogo']))) {
        $extConfBackend['loginLogo'] = 'EXT:threeme/Resources/Public/Images/Backend/LoginLogo.png';
    }
//    if (empty(trim($backendExtConf['loginBackgroundImage']))) {
//        $extConfBackend['loginHighlightColor'] = '#004586';
//    }
    if (empty(trim($backendExtConf['loginBackgroundImage']))) {
        $extConfBackend['loginBackgroundImage'] = 'EXT:threeme/Resources/Public/Images/Backend/LoginBackgroundImage.jpg';
    }

    $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['backend'] = serialize($extConfBackend);
}
