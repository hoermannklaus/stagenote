<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('stagenote', 'Configuration/TypoScript', 'Stage Note');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_stagenote_domain_model_configuration', 'EXT:stagenote/Resources/Private/Language/locallang_csh_tx_stagenote_domain_model_configuration.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_stagenote_domain_model_configuration');
    }
);
