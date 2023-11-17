<?php

namespace ContainerGN4kBVl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Uz4yIQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uz4yI_q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uz4yI_q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'factureRepository' => ['privates', 'App\\Repository\\FactureRepository', 'getFactureRepositoryService', true],
        ], [
            'factureRepository' => 'App\\Repository\\FactureRepository',
        ]);
    }
}
