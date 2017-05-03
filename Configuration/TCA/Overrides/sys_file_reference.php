<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config'] = [
    'type' => 'imageManipulation',
    'cropVariants' => [
        'mobile' => [
            'title' => 'LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:imageManipulation.mobile',
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                    'value' => 16 / 9
                ],
                '3:2' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                    'value' => 3 / 2
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                    'value' => 1 / 1
                ],
                'NaN' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                ],
            ],
        ],
        'tablet' => [
            'title' => 'LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:imageManipulation.tablet',
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                    'value' => 16 / 9
                ],
                '3:2' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                    'value' => 3 / 2
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                    'value' => 1 / 1
                ],
                'NaN' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                ],
            ],
        ],
        'desktop' => [
            'title' => 'LLL:EXT:threeme/Resources/Private/Language/locallang_be.xlf:imageManipulation.desktop',
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                    'value' => 16 / 9
                ],
                '3:2' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                    'value' => 3 / 2
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                    'value' => 1 / 1
                ],
                'NaN' => [
                    'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                ],
            ],
        ],
    ]
];

