<?php

namespace ContainerZRW4s8y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBeerController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BeerController' shared autowired service.
     *
     * @return \App\Controller\BeerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BeerController.php';

        $container->services['App\\Controller\\BeerController'] = $instance = new \App\Controller\BeerController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\BeerController', $container));

        return $instance;
    }
}
