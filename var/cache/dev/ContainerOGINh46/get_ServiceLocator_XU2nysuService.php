<?php

namespace ContainerOGINh46;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XU2nysuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XU2nysu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XU2nysu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offretravail' => ['privates', '.errored..service_locator.XU2nysu.App\\Entity\\Offretravail', NULL, 'Cannot autowire service ".service_locator.XU2nysu": it references class "App\\Entity\\Offretravail" but no such service exists.'],
        ], [
            'offretravail' => 'App\\Entity\\Offretravail',
        ]);
    }
}
