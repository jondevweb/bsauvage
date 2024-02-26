<?php

namespace ContainerKjvkWjE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TMwE9dgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tMwE9dg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tMwE9dg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'br' => ['privates', 'App\\Repository\\BeerRepository', 'getBeerRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'sbr' => ['privates', 'App\\Repository\\ShopBeerRepository', 'getShopBeerRepositoryService', true],
            'sr' => ['privates', 'App\\Repository\\ShopRepository', 'getShopRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.tMwE9dg.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.tMwE9dg": it references class "App\\Entity\\User" but no such service exists.'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'br' => 'App\\Repository\\BeerRepository',
            'em' => '?',
            'sbr' => 'App\\Repository\\ShopBeerRepository',
            'sr' => 'App\\Repository\\ShopRepository',
            'user' => 'App\\Entity\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}