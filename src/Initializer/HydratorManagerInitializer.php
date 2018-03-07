<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Hydrator\Initializer;

use Interop\Container\ContainerInterface;
use MSBios\Hydrator\HydratorManagerAwareInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class HydratorManagerInitializer
 * @package MSBios\Hydrator\Initializer
 */
class HydratorManagerInitializer implements InitializerInterface
{
    /**
     * Initialize the given instance
     *
     * @param  ContainerInterface $container
     * @param  object $instance
     * @return void
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof HydratorManagerAwareInterface) {
            $instance->setHydratorManager(
                $container->get('HydratorManager')
            );
        }
    }

    /**
     * @param $an_array
     * @return HydratorManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
