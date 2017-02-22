<?php
defined('TYPO3_MODE') or die();

// Register pageTS
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'threeme',
    'Configuration/TypoScript/Frontend',
    'Threeme - Enable Distribution'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'threeme',
    'Configuration/TypoScript/Extensions',
    'Threeme - Enable 3rd-Party Extensions'
);
