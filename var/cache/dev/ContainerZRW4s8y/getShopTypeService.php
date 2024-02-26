<?php

namespace ContainerZRW4s8y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShopTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ShopType' shared autowired service.
     *
     * @return \App\Form\ShopType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ShopType.php';

        return $container->privates['App\\Form\\ShopType'] = new \App\Form\ShopType();
    }
}
