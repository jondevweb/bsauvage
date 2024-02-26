<?php

namespace ContainerZRW4s8y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEngageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EngageController' shared autowired service.
     *
     * @return \App\Controller\EngageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EngageController.php';

        $container->services['App\\Controller\\EngageController'] = $instance = new \App\Controller\EngageController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\EngageController', $container));

        return $instance;
    }
}