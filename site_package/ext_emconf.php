<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Template Package',
    'description' => 'Template Package',
    'category' => 'templates',
    'author' => 'brz',
    'author_email' => 'info@brz',
    'author_company' => 'none',
    'version' => '0.5.0',
    'state' => 'beta',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1
];