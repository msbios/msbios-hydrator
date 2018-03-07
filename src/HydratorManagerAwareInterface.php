<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Hydrator;

use Zend\Hydrator\HydratorPluginManager;

/**
 * Interface HydratorManagerAwareInterface
 * @package MSBios\Hydrator
 */
interface HydratorManagerAwareInterface
{
    /**
     * @return HydratorPluginManager
     */
    public function getHydratorManager(): HydratorPluginManager;

    /**
     * @param HydratorPluginManager $hydratorManager
     * @return $this
     */
    public function setHydratorManager(HydratorPluginManager $hydratorManager);
}
