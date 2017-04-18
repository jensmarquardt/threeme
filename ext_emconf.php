<?php
$EM_CONF['threeme'] = array(
    'title' => 'Threeme Distribution',
    'description' => 'Kickstart your TYPO3 project with Threeme. Visit https://www.threeme.de for detailed information. The distribution focus on rapid Frontend development and preconfigurated Backend with low entrylevel for editors.',
    'category' => 'distribution',
    'version' => '3.1.2',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Andre Steiling',
    'author_email' => 'andre@threeme.de',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-7.6.99',
            'fluid_styled_content' => '7.6'
        ),
        'conflicts' => array(),
        'suggests' => array(
            'ws_scss' => '1.1.0-0.0.0',
            'mask' => '2.1.1-0.0.0',
            'news' => '5.3.3-0.0.0',
            'powermail' => '3.15.0-0.0.0',
            'be_secure_pw' => '7.1.0-0.0.0',
            'realurl' => '2.1.0-0.0.0',
            'dd_googlesitemap' => '2.0.0-0.0.0',
            'min' => '1.3.0-0.0.0'
        ),
    ),
);
