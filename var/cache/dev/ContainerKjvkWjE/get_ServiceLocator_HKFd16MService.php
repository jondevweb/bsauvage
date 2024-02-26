<?php

namespace ContainerKjvkWjE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HKFd16MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hKFd16M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hKFd16M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'sr' => ['privates', 'App\\Repository\\ShopRepository', 'getShopRepositoryService', true],
        ], [
            'sr' => 'App\\Repository\\ShopRepository',
        ]);
    }
}
