<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'whiteroom extended news data',
    'description' => 'Extend news by artwork data',
    'category' => 'fe',
    'author' => 'Daniel Schoeneck',
    'author_email' => '',
    'shy' => '',
    'dependencies' => '',
    'conflicts' => '',
    'priority' => '',
    'module' => '',
    'state' => 'beta',
    'internal' => '',
    'modify_tables' => 'tx_news_domain_model_news',
    'clearCacheOnLoad' => true,
    'lockType' => '',
    'author_company' => 'whiteroom.ch',
    'version' => '4.4.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '9.5.00-9.5.99',
            'news' => '7.3.0-7.3.99',
            'fluid_styled_content' => '9.5.00-9.5.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    'suggests' => array(),
);