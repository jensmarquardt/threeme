<?php
$TYPO3_CONF_VARS['EXTCONF']['realurl'] = array (
    '_DEFAULT' => array (
        'init' => array (
            'enableCHashCache' => true,
            'appendMissingSlash' => 'ifNotFile,redirect',
            'adminJumpToBackend' => true,
            'enableUrlDecodeCache' => true,
            'enableUrlEncodeCache' => true,

            // 404 Error Handling mit TYPO3 Seite:
            // Be sure that you have not set postVarSet_failureMode OR set it to postVarSet_failureMode=''
//            'postVarSet_failureMode' => '',
        ),
        'pagePath' => array (
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'rootpage_id' => 2,
            'dontResolveShortcuts' => 1,
        ),
        'fileName' => array(
            'defaultToHTMLsuffixOnPrev' => true,
            'index' => array(
//                    'feed.xml' => array(
//                        'keyValues' => array(
//                            'type' => 100,
//                        ),
//                    ),
            ),
        ),

        // 404 Error Handling mit TYPO3 Seite:
        // Also be sure you have defined 'noMatch'=>'bypass' for every single preVars section!
    /*
        'preVars' => array (
            // Bei RealURL >>MUSS<< der L-Parameter auch fuer die default-Sprache definiert werden
            // und am besten durch Setzen von >>valueDefault<< erzwungen werden, da es sonst zu cHash-Fehler kommt,
            // was das Caching deaktiviert und bsp. der Crawler nicht mehr die default-Sprache durchsuchen kann!!!
            array (
                'GETvar' => 'L',
                'valueMap' => array (
                    'de' => 0,
                    'en' => 1,
                ),
                'valueDefault' => 'de',
            ),
        ),
    */

        'postVarSets' => array(
            '_DEFAULT' => array(
                // EXT:news
                'artikel' => array(
                    array(
                        'GETvar' => 'tx_news_pi1[day]',
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[month]',
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[year]',
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[news]',
                        'lookUpTable' => array(
                            'table' => 'tx_news_domain_model_news',
                            'id_field' => 'uid',
                            'alias_field' => 'title',
                            'addWhereClause' => ' AND NOT deleted',
                            'useUniqueCache' => 1,
                            'useUniqueCache_conf' => array(
                                    'strtolower' => 1,
                                    'spaceCharacter' => '-',
                            ),
                            'languageGetVar' => 'L',
                            'languageExceptionUids' => '',
                            'languageField' => 'sys_language_uid',
                            'transOrigPointerField' => 'l10n_parent',
                            'autoUpdate' => 1,
                            'expireDays' => 180,
                        ),
                    ),
                ),
                // EXT:news archive
                'archiv' => array(
                    array(
                        'GETvar' => 'tx_news_pi1[overwriteDemand][day]',
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[overwriteDemand][month]' ,
                            'valueMap' => array(
                            'january' => '01',
                            'february' => '02',
                            'march' => '03',
                            'april' => '04',
                            'may' => '05',
                            'june' => '06',
                            'july' => '07',
                            'august' => '08',
                            'september' => '09',
                            'october' => '10',
                            'november' => '11',
                            'december' => '12',
                        )
                    ),
                    array(
                        'GETvar' => 'tx_news_pi1[overwriteDemand][year]',
                    ),
                ),
            ),
        ), // postVarSets
    ),
);

// Alternative domains
//$TYPO3_CONF_VARS['EXTCONF']['realurl']['www.domain.tld'] = $TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'];
//$TYPO3_CONF_VARS['EXTCONF']['realurl']['www.domain.tld']['pagePath']['rootpage_id'] = 2;
?>
