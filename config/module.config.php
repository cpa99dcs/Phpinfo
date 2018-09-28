<?php

namespace Phpinfo;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'phpinfo' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/phpinfo',
                    'defaults' => [
                        'controller' => Controller\PhpinfoController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\PhpinfoController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'phpinfo' => __DIR__ . '/../view',
        ],
    ],
];
