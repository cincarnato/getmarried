<?php

return [
    'router' => [
        'routes' => [
            'GetMarried' => [
                'type' => 'Literal',
                'mayTerminate' => false,
                'options' => [
                    'route' => '/get-married',
                    'defaults' => [
                        'controller' => \GetMarried\Controller\MainController::CLASS,
                        'action' => 'home',
                    ],
                ],
                'child_routes' => [
                    'Main' => [
                        'type' => 'Literal',
                        'mayTerminate' => false,
                        'options' => [
                            'route' => '/main',
                            'defaults' => [
                                'controller' => \GetMarried\Controller\MainController::CLASS,
                                'action' => 'home',
                            ],
                        ],
                        'child_routes' => [
                            'Home' => [
                                'type' => 'Segment',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/home',
                                    'defaults' => [
                                        'controller' => \GetMarried\Controller\MainController::CLASS,
                                        'action' => 'home',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];