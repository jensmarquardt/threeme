<?php
if (!defined('TYPO3_MODE')) { die('Access denied.'); }

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Frontend', 'Threeme - Enable Distribution');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Extensions', 'Threeme - Enable 3rd-Party Extensions');

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

    // Add Threeme Logo and Background
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

    // Add Threeme RealUrl Config
    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl'])) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl'] = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl']);
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl']['configFile']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl']['configFile']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl']['configFile'] = 'typo3conf/ext/threeme/Resources/Private/Php/Extensions/Realurl/Configuration.php';
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl']['enableAutoConf']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl']['enableAutoConf']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl']['enableAutoConf'] = 0;
    }
    if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl'])) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl'] = serialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['realurl']);
    }

    // Add Threeme SecurePasswords Config
    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw'])) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw'] = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']);
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['validUntil']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['validUntil']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['validUntil'] = '';
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['passwordLength']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['passwordLength']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['passwordLength'] = 12;
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['lowercaseChar']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['lowercaseChar']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['lowercaseChar'] = 1;
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['capitalChar']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['capitalChar']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['capitalChar'] = 1;
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['digit']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['digit']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['digit'] = 1;
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['specialChar']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['specialChar']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['specialChar'] = 1;
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['patterns']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['patterns']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']['patterns'] = 3;
    }
    if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw'])) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw'] = serialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['be_secure_pw']);
    }

    // Add Threeme Mask Config
    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask'])) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask'] = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']);
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['json']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['json']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['json'] = 'typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Config/mask.json';
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['content']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['content']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['content'] = 'typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Content/';
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['preview']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['preview']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['preview'] = 'typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Preview/';
    }
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['backend']) || empty(trim($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['backend']))) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']['backend'] = 'typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Backend/';
    }
    if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask'])) {
        $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask'] = serialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['mask']);
    }

    // Merge TYPO3 configuration
    $threemeConfig = array(
        'BE' => array(
            'explicitADmode' => 'explicitAllow',
        ),
        'FE' => array(
            'pageNotFound_handling' => 'REDIRECT:404.html',
        )
    );
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], (array)$threemeConfig);
}
