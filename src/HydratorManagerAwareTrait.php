<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Hydrator;

use Zend\Hydrator\HydratorPluginManager;

/**
 * Trait HydratorManagerAwareTrait
 * @package MSBios\Hydrator
 */
trait HydratorManagerAwareTrait
{
    /** @var  HydratorPluginManager */
    protected $hydratorManager;

    /**
     * @return HydratorPluginManager
     */
    public function getHydratorManager(): HydratorPluginManager
    {
        return $this->hydratorManager;
    }

    /**
     * @param HydratorPluginManager $hydratorManager
     * @return $this
     */
    public function setHydratorManager(HydratorPluginManager $hydratorManager)
    {
        $this->hydratorManager = $hydratorManager;
        return $this;
    }
}
