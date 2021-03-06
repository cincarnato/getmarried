<?php

namespace Application;

use Zend\Router\Http\Literal;

return [
    'router' => [
        'routes' => [
            'Home' => [
                'type' => 'Literal',
                'mayTerminate' => true,
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => \Application\Controller\IndexController::class,
                        'action' => 'index',
                    ],
                ],
            ],
            'TermsCondition' => [
                'type' => 'Literal',
                'mayTerminate' => true,
                'options' => [
                    'route' => '/terms-condition',
                    'defaults' => [
                        'controller' => \Application\Controller\IndexController::CLASS,
                        'action' => 'terms-condition',
                    ],
                ],
            ],
            'Lang' => [
                'type' => 'Literal',
                'mayTerminate' => true,
                'options' => [
                    'route' => '/lang',
                    'defaults' => [
                        'controller' => \Application\Controller\LangController::CLASS,
                        'action' => 'set',
                    ],
                ],
            ],
            'ContactOk' => [
                'type' => 'Literal',
                'mayTerminate' => true,
                'options' => [
                    'route' => '/contact-ok',
                    'defaults' => [
                        'controller' => \Application\Controller\IndexController::CLASS,
                        'action' => 'contact-ok',
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'layout/layout2' => __DIR__ . '/../view/layout/layout-2.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'service_manager' => [
        'factories' => [
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ]
    ]
];

