<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'T3docs.StoreInventory',
            'Pi1',
            [
                'StoreInventory' => 'list',
            ],
            // non-cacheable actions
            [
                'StoreInventory' => '',
            ]
        );
    }
);
