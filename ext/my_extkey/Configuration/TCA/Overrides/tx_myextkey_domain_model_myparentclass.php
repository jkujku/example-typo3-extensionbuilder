<?php
defined('TYPO3_MODE') || die();

if (!isset($GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['ctrl']['type'])) {
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_myextkey_tx_myextkey_domain_model_myparentclass = [];
    $tempColumnstx_myextkey_tx_myextkey_domain_model_myparentclass[$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['ctrl']['type']] = [
        'exclude' => true,
        'label'   => 'LLL:EXT:my_extkey/Resources/Private/Language/locallang_db.xlf:tx_myextkey.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['',''],
                ['MyParentClass','Tx_MyExtkey_MyParentClass']
            ],
            'default' => 'Tx_MyExtkey_MyParentClass',
            'size' => 1,
            'maxitems' => 1,
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_myextkey_domain_model_myparentclass', $tempColumnstx_myextkey_tx_myextkey_domain_model_myparentclass);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_myextkey_domain_model_myparentclass',
    $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['ctrl']['label']
);

$tmp_my_extkey_columns = [

    'sub_title' => [
        'exclude' => false,
        'label' => 'LLL:EXT:my_extkey/Resources/Private/Language/locallang_db.xlf:tx_myextkey_domain_model_mychildclass.sub_title',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],

];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_myextkey_domain_model_myparentclass',$tmp_my_extkey_columns);

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyParentClass']['showitem'])) {
    $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildClass']['showitem'] = $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyParentClass']['showitem'];
} elseif(is_array($GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types'])) {
    // use first entry in types array
    $tx_myextkey_domain_model_myparentclass_type_definition = reset($GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']);
    $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildClass']['showitem'] = $tx_myextkey_domain_model_myparentclass_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildClass']['showitem'] = '';
}
$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildClass']['showitem'] .= ',--div--;LLL:EXT:my_extkey/Resources/Private/Language/locallang_db.xlf:tx_myextkey_domain_model_mychildclass,';
$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildClass']['showitem'] .= 'sub_title';

$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['columns'][$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:my_extkey/Resources/Private/Language/locallang_db.xlf:tx_myextkey_domain_model_myparentclass.tx_extbase_type.Tx_MyExtkey_MyChildClass','Tx_MyExtkey_MyChildClass'];

$tmp_my_extkey_columns = [

    'sub_sub_title' => [
        'exclude' => false,
        'label' => 'LLL:EXT:my_extkey/Resources/Private/Language/locallang_db.xlf:tx_myextkey_domain_model_mychildschildclass.sub_sub_title',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],

];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_myextkey_domain_model_myparentclass',$tmp_my_extkey_columns);

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildClass']['showitem'])) {
    $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildsChildClass']['showitem'] = $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildClass']['showitem'];
} elseif(is_array($GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types'])) {
    // use first entry in types array
    $tx_myextkey_domain_model_myparentclass_type_definition = reset($GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']);
    $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildsChildClass']['showitem'] = $tx_myextkey_domain_model_myparentclass_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildsChildClass']['showitem'] = '';
}
$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildsChildClass']['showitem'] .= ',--div--;LLL:EXT:my_extkey/Resources/Private/Language/locallang_db.xlf:tx_myextkey_domain_model_mychildschildclass,';
$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyChildsChildClass']['showitem'] .= 'sub_sub_title';

$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['columns'][$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:my_extkey/Resources/Private/Language/locallang_db.xlf:tx_myextkey_domain_model_myparentclass.tx_extbase_type.Tx_MyExtkey_MyChildsChildClass','Tx_MyExtkey_MyChildsChildClass'];

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

unset($GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['columns'][$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['ctrl']['type']]['config']['items'][0]);
unset($GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['columns'][$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['ctrl']['type']]['config']['items'][1]);
unset($GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['columns'][$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['ctrl']['type']]['config']['default']);
$GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['0']['showitem'] = $GLOBALS['TCA']['tx_myextkey_domain_model_myparentclass']['types']['Tx_MyExtkey_MyParentClass']['showitem'];

