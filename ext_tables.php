<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function() {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('system', 'Configuration/TypoScript', 'FXFlat :: Systemkonfiguration');
    }
);