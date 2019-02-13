<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        if (TYPO3_MODE === 'BE') {

            \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
                'MyVendor.MyExtkey',
                'web', // Make module a submodule of 'web'
                'mybemodule', // Submodule key
                '', // Position
                [
                    'MyParentClass' => 'list, show',
                ],
                [
                    'access' => 'user,group',
                    'icon'   => 'EXT:my_extkey/Resources/Public/Icons/user_mod_mybemodule.svg',
                    'labels' => 'LLL:EXT:my_extkey/Resources/Private/Language/locallang_mybemodule.xlf',
                ]
            );

        }

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('my_extkey', 'Configuration/TypoScript', 'MyExtension');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_myextkey_domain_model_myparentclass', 'EXT:my_extkey/Resources/Private/Language/locallang_csh_tx_myextkey_domain_model_myparentclass.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_myextkey_domain_model_myparentclass');

    }
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('my_extkey', 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:my_extkey/Configuration/TypoScript/setup.typoscript">');