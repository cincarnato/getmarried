<?php

namespace Application;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => array(
        'factories' => [
            \Application\Controller\IndexController::class => \Zend\ServiceManager\Factory\InvokableFactory::class,
            \Application\Controller\LangController::class => \Zend\ServiceManager\Factory\InvokableFactory::class,
        ],
    )
];

