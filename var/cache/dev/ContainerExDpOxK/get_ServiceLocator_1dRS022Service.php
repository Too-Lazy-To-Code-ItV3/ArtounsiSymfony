<?php

namespace ContainerExDpOxK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1dRS022Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1dRS022' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1dRS022'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'view' => ['privates', '.errored..service_locator.1dRS022.App\\Entity\\View', NULL, 'Cannot autowire service ".service_locator.1dRS022": it references class "App\\Entity\\View" but no such service exists.'],
        ], [
            'view' => 'App\\Entity\\View',
        ]);
    }
}
