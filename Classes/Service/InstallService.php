<?php
namespace THREEME\Threeme\Service;

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

use TYPO3\CMS\Core\Messaging\FlashMessage;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * @author André Steiling <andre.steiling@threeme.de>
 *
 * Original from EXT:bootstrap_package - Benjamin Kott, http://www.bk2k.info
 * https://github.com/benjaminkott/bootstrap_package
 */
class InstallService
{

    /**
     * @var string
     */
    protected $extKey = 'threeme';

    /**
     * @var string
     */
    protected $messageQueueByIdentifier = '';

    /**
     * Initializes the install service
     */
    public function __construct()
    {
        $this->messageQueueByIdentifier = 'extbase.flashmessages.tx_extensionmanager_tools_extensionmanagerextensionmanager';
    }

    /**
     * @param string $extension
     */
    public function initApacheHtaccess($extension = null)
    {
        if ($extension == $this->extKey)
        {
            if (substr($_SERVER['SERVER_SOFTWARE'], 0, 6) === 'Apache')
            {
                $this->createDefaultHtaccessFile();
            } else {
                /**
                 * Add Flashmessage that the system is not running on an apache webserver and the url rewritings must be handled manually
                 */
                $flashMessage = GeneralUtility::makeInstance(
                    'TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
                    'The Threeme Distribution uses RealUrl to generate SEO friendly URLs by default, please take care of the URLs rewriting settings for your environment yourself.'
                    . 'You can also deactivate RealUrl by changing your TypoScript setup to "config.tx_realurl_enable = 0".',
                    'TYPO3 is not running on an Apache-Webserver',
                    FlashMessage::WARNING,
                    true
                );
                $this->addFlashMessage($flashMessage);
                return;
            }
        }
    }

    /**
     * Creates .htaccess file inside the root directory
     *
     * @return void
     */
    public function createDefaultHtaccessFile()
    {
        $htaccessFile = GeneralUtility::getFileAbsFileName('.htaccess');
        if (file_exists($htaccessFile))
        {
            /**
             * Add Flashmessage that there is already an .htaccess file and we are not going to override this.
             */
            $flashMessage = GeneralUtility::makeInstance(
                'TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
                'There is already an Apache .htaccess file in the root directory, please make sure that the url rewritings are set properly.'
                . ' An example configuration is located at: "typo3conf/ext/threeme/Initialisation/Extra/.htaccess"',
                'Apache .htaccess file already exists',
                FlashMessage::NOTICE,
                true
            );
            $this->addFlashMessage($flashMessage);
            return;
        }

        $htaccessContent = GeneralUtility::getUrl(ExtensionManagementUtility::extPath($this->extKey) . '/Initialisation/Extra/.htaccess');
        GeneralUtility::writeFile($htaccessFile, $htaccessContent, true);

        /**
         * Add Flashmessage that the example htaccess file was placed in the root directory
         */
        $flashMessage = GeneralUtility::makeInstance(
            'TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
            'For RealURL and optimization purposes an example .htaccess file was placed in your root directory.'
            . ' Please check if the RewriteBase correctly set for your environment. ',
            'Apache example .htaccess was placed in the root directory.',
            FlashMessage::OK,
            true
        );
        $this->addFlashMessage($flashMessage);
    }

    /**
     * @param string $extension
     */
    public function initRealUrlConfiguration($extension = null)
    {
        if ($extension == $this->extKey)
        {
            $this->createRealUrlConfigurationFile();
        }
    }

    /**
     * Creates RealURL configuration file inside the typo3conf directory
     *
     * @return void
     */
    public function createRealUrlConfigurationFile()
    {
        $configFile = GeneralUtility::getFileAbsFileName('typo3conf/realurl_conf.php');
        if (file_exists($configFile))
        {
            /**
             * Add Flashmessage that there is already an file and we are not going to override this.
             */
            $flashMessage = GeneralUtility::makeInstance(
                'TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
                'There is already a RealURL configuration file in the typo3conf directory, so you might have added an configuration before.'
                . ' An example configuration is located at: "typo3conf/ext/threeme/Initialisation/Extra/realurl_conf.php"',
                'RealURL configuration file already exists',
                FlashMessage::NOTICE,
                true
            );
            $this->addFlashMessage($flashMessage);
            return;
        }

        $configContent = GeneralUtility::getUrl(ExtensionManagementUtility::extPath($this->extKey) . '/Initialisation/Extra/realurl_conf.php');
        GeneralUtility::writeFile($configFile, $configContent, true);

        /**
         * Add Flashmessage that the example htaccess file was placed in the root directory
         */
        $flashMessage = GeneralUtility::makeInstance(
            'TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
            'For RealURL purposes a configuration file was placed in your typo3conf directory.'
            . ' Please check if theese settings fit to your environment. ',
            'RealURL configuration file was placed in the typo3conf directory.',
            FlashMessage::OK,
            true
        );
        $this->addFlashMessage($flashMessage);
    }

    /**
     * @param string $extension
     */
    public function initAdditionalConfiguration($extension = null)
    {
        if ($extension == $this->extKey)
        {
            $this->createAdditionalConfigurationFile();
        }
    }

    /**
     * Creates AdditionalConfiguration file inside the typo3conf directory
     *
     * @return void
     */
    public function createAdditionalConfigurationFile()
    {
        $configFile = GeneralUtility::getFileAbsFileName('typo3conf/AdditionalConfiguration.php');
        if (file_exists($configFile))
        {
            /**
             * Add Flashmessage that there is already an file and we are not going to override this.
             */
            $flashMessage = GeneralUtility::makeInstance(
                'TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
                'There is already a TYPO3 AdditionalConfiguration file in the typo3conf directory, so you might have added an configuration before.'
                . 'An example configuration is located at: "typo3conf/ext/threeme/Initialisation/Extra/AdditionalConfiguration.php"',
                'AdditionalConfiguration file already exists',
                FlashMessage::NOTICE,
                true
            );
            $this->addFlashMessage($flashMessage);
            return;
        }

        $configContent = GeneralUtility::getUrl(ExtensionManagementUtility::extPath($this->extKey) . '/Initialisation/Extra/AdditionalConfiguration.php');
        GeneralUtility::writeFile($configFile, $configContent, true);

        /**
         * Add Flashmessage that the example htaccess file was placed in the root directory
         */
        $flashMessage = GeneralUtility::makeInstance(
            'TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
            'For TYPO3 optimization purposes an AdditionalConfiguration file was placed in your typo3conf directory.'
            . ' Please check if theese settings fit to your environment. ',
            'AdditionalConfiguration was placed in the typo3conf directory.',
            FlashMessage::OK,
            true
        );
        $this->addFlashMessage($flashMessage);
    }

    /**
     * @param string $extension
     */
    public function initExtensionConfiguration($extension = null)
    {
        if ($extension == $this->extKey)
        {
            $this->updateExtensionConfiguration();
        }
    }

    /**
     * Updates configuration and/or database depending on installed extensions
     *
     * @return void
     */
    public function updateExtensionConfiguration()
    {
        $arrExt = array();


        if (ExtensionManagementUtility::isLoaded('mask'))
        {
            $arrExt[] = 'mask';
            $this->updateDatabase('tx_mask.sql');
        }

        if (ExtensionManagementUtility::isLoaded('powermail'))
        {
            $arrExt[] = 'powermail';
            $this->updateDatabase('tx_powermail.sql');
        }

        if (ExtensionManagementUtility::isLoaded('news'))
        {
            $arrExt[] = 'news';
            $this->updateDatabase('tx_news.sql');
        }

        /**
         * Add Flashmessage that the example htaccess file was placed in the root directory
         */
        $flashMessage = GeneralUtility::makeInstance(
            'TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
            'The following extensions are detected and updated:' . implode(',', $arrExt),
            'Extension configuration was updated.',
            FlashMessage::OK,
            true
        );
        $this->addFlashMessage($flashMessage);
    }


    /**
     * Updates Database
     *
     * @param string $fileName Filename of the dump
     * @return void
     */
    public function updateDatabase($fileName)
    {
        $sqlDump = GeneralUtility::getUrl(ExtensionManagementUtility::extPath($this->extKey) . '/Initialisation/Extra/' . $fileName);

        $message = shell_exec('mysql -h' . TYPO3_db_host . ' -u' . TYPO3_db_username . ' -p' . escapeshellarg(TYPO3_db_password) . ' ' . TYPO3_db . ' < ' . $sqlDump .' 2>&1');

        /**
         * Add Flashmessage that the example htaccess file was placed in the root directory
         */
        $flashMessage = GeneralUtility::makeInstance(
            'TYPO3\\CMS\\Core\\Messaging\\FlashMessage',
            $message,
            'Database was updated with ' .$sqlDump. '.',
            FlashMessage::INFO,
            true
        );
        $this->addFlashMessage($flashMessage);
    }

    /**
     * Adds a Flash Message to the Flash Message Queue
     *
     * @param FlashMessage $flashMessage
     */
    public function addFlashMessage(FlashMessage $flashMessage)
    {
        if ($flashMessage)
        {
            /** @var $flashMessageService \TYPO3\CMS\Core\Messaging\FlashMessageService */
            $flashMessageService = GeneralUtility::makeInstance('TYPO3\\CMS\\Core\\Messaging\\FlashMessageService');
            /** @var $flashMessageQueue \TYPO3\CMS\Core\Messaging\FlashMessageQueue */
            $flashMessageQueue = $flashMessageService->getMessageQueueByIdentifier($this->messageQueueByIdentifier);
            $flashMessageQueue->enqueue($flashMessage);
        }
    }
}
