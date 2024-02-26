<?php

namespace ContainerZRW4s8y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BiCy21PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BiCy21P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BiCy21P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'beerRepository' => ['privates', 'App\\Repository\\BeerRepository', 'getBeerRepositoryService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'beerRepository' => 'App\\Repository\\BeerRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'em' => '?',
        ]);
    }
}
