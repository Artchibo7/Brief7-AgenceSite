<?php

namespace ContainerYS2qMxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6cTfj6hService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.6cTfj6h' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6cTfj6h'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'destination' => ['privates', '.errored..service_locator.6cTfj6h.App\\Entity\\Destination', NULL, 'Cannot autowire service ".service_locator.6cTfj6h": it needs an instance of "App\\Entity\\Destination" but this type has been excluded in "config/services.yaml".'],
        ], [
            'destination' => 'App\\Entity\\Destination',
        ]);
    }
}
