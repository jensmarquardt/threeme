<?php
if (!defined('TYPO3_MODE')) { die ('Access denied.'); }

$context = \TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext()->__toString();

$threemeChanges = array(
    'BE' => array(
        'explicitADmode' => 'explicitAllow',
        'maxFileSize' => '102400',
        'compressionLevel' => 7,
        'loginSecurityLevel' => 'rsa',
        'versionNumberInFilename' => 1,
    ),
    'FE' => array(
        'pageNotFound_handling' => 'REDIRECT:404.html',
        'versionNumberInFilename' => 'embed',
        'lifetime' => 0,
        'sessionDataLifetime' => 0,
        'compressionLevel' => 7,
    ),
    'EXT' => array(
        'extConf' => array(
            'rtehtmlarea' => serialize(array(
                'defaultConfiguration' => 'Typical (Most commonly used features are enabled. Select this option if you are unsure which one to use.)',
                'enableImages' => 0,
                'enableInlineElements' => 0,
                'allowStyleAttribute' => 0,
                'enableAccessibilityIcons' => 0,
            )),
            'scheduler' => serialize(array(
                'maxLifetime' => 144,
                'enableBELog' => 0,
                'showSampleTasks' => 0,
                'useAtdaemon' => 0
            )),
            'be_secure_pw' => serialize(array(
                'validUntil' => '',
                'passwordLength' => 12,
                'lowercaseChar' => 1,
                'capitalChar' => 1,
                'digit' => 1,
                'specialChar' => 1,
                'patterns' => 3,
            )),
            'powermail' => serialize(array(
                'disableIpLog' => 0,
                'disableMarketingInformation' => 0,
                'disableBackendModule' => 0,
                'disablePluginInformation' => 0,
                'disablePluginInformationMailPreview' => 0,
                'enableCaching' => 0,
                'l10n_mode_merge' => 0,
                'replaceIrreWithElementBrowser' => 0,
            )),
            'realurl' => serialize(array(
                'configFile' => 'typo3conf/ext/threeme/Resources/Private/Php/Extensions/Realurl/Configuration.php',
                'enableAutoConf' => 0,
                'autoConfFormat' => 0,
                'enableDevLog' => 0,
                'enableChashUrlDebug' => 0,
            )),
            'news' => serialize(array(
                'removeListActionFromFlexforms' => 1,
                'pageModuleFieldsNews' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_advanced=title,datetime,teaser,categories;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_complex=title,datetime,teaser,categories,archive;',
                'pageModuleFieldsCategory' => 'title,description',
                'archiveDate' => 'date',
                'prependAtCopy' => 1,
                'tagPid' => 17,
                'showMediaDescriptionField' => 0,
                'rteForTeaser' => 0,
                'contentElementRelation' => 0,
                'manualSorting' => 0,
                'categoryRestriction' => 'none',
                'categoryBeGroupTceFormsRestriction' => 0,
                'useFal' => 1,
                'dateTimeNotRequired' => 0,
                'showImporter' => 0,
                'storageUidImporter' => 1,
                'resourceFolderImporter' => '/news_import',
                'showAdministrationModule' => 1,
            )),
            'mask' => serialize(array(
                'json' => 'typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Config/mask.json',
                'content' => 'typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Content/',
                'preview' => 'typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Preview/',
                'backend' => 'typo3conf/ext/threeme/Resources/Private/Fluid/Extensions/Mask/Backend/',
            )),
        )
    ),
    'SYS' => array(
        'ddmmyy' => 'd.m.Y',
        'no_pconnect' => 1,
        'dbClientCompress' => 1,
        'serverTimeZone' => 1,
        'phpTimeZone' => 'Europe/Berlin',
    )
);

//
//if (\TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext()->isDevelopment())
//{
//    $threemeChanges = array(
//        'DB' => array(
//            'host' => '127.0.0.1',
////            'database' => 'development-db',
////            'username' => 'development-db-user',
////            'password' => 'development-db-password',
//            'port' => 3306,
//        ),
//        'GFX' => array(
////            'im_path' => 'development-path',
////            'im_path_lzw' => 'development-path-lzw',
//        ),
//        'SYS' => array(
//            'sitename' => $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] . ' ' . $context,
//            'clearCacheSystem' => 1,
//            'systemLogLevel' => 0,
//            'displayErrors' => 1,
//        )
//    );
//}

# Merge configuration
$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], (array)$threemeChanges);
