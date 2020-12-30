<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Store Inventory',
    'description' => 'An extension to manage a stock.',
    'category' => 'plugin',
    'author' => 'John Doe',
    'author_company' => 'John Doe Inc.',
    'author_email' => 'john.doe@example.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '0.5.23-9.5.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'T3docs\\StoreInventory\\' => 'Classes'
        ]
    ],
];
