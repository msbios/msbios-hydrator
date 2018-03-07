<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Hydrator;

use MSBios\Hydrator\Initializer\HydratorManagerInitializer;
use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'controllers' => [
        'factories' => [
            Controller\IndexController::class =>
                InvokableFactory::class
        ],
        'aliases' => [
            \MSBios\Application\Controller\IndexController::class =>
                Controller\IndexController::class
        ],
        'initializers' => [
            new HydratorManagerInitializer
        ]
    ],

    \MSBios\Assetic\Module::class => [
        'paths' => [
            __DIR__ . '/../../vendor/msbios/application/themes/default/public/',
        ],
    ],

    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../../view',
        ],
    ],
];
