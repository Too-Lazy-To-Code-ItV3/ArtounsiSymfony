<?php

namespace ContainerSPpsh7p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4WM7mxrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4WM7mxr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4WM7mxr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ban' => ['privates', '.errored..service_locator.4WM7mxr.App\\Entity\\Ban', NULL, 'Cannot autowire service ".service_locator.4WM7mxr": it references class "App\\Entity\\Ban" but no such service exists.'],
            'banRepository' => ['privates', 'App\\Repository\\BanRepository', 'getBanRepositoryService', true],
        ], [
            'ban' => 'App\\Entity\\Ban',
            'banRepository' => 'App\\Repository\\BanRepository',
        ]);
    }
}
