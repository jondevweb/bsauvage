<?php

namespace ContainerUwngzjp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBeerRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\BeerRepository' shared autowired service.
     *
     * @return \App\Repository\BeerRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\BeerRepository'] = new \App\Repository\BeerRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
