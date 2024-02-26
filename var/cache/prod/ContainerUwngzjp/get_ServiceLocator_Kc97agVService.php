<?php

namespace ContainerUwngzjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kc97agVService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.kc97agV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kc97agV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'beerRepository' => ['privates', 'App\\Repository\\BeerRepository', 'getBeerRepositoryService', true],
        ], [
            'beerRepository' => 'App\\Repository\\BeerRepository',
        ]);
    }
}