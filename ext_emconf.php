<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "pageconfig"
 *
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'FXFlat :: System',
    'description' => 'Stellt Systemkonfiguration, Templates, CSS & JS bereit',
    'category' => 'templates',
    'author' => 'Dominik Potjans',
    'author_email' => 'dominik.potjans@fxflat.com',
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
