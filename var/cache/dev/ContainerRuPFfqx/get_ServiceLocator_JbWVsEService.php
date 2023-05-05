<?php

namespace ContainerRuPFfqx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JbWVsEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jb_WVsE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jb_WVsE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'view' => ['privates', '.errored..service_locator.Jb_WVsE.App\\Entity\\View', NULL, 'Cannot autowire service ".service_locator.Jb_WVsE": it references class "App\\Entity\\View" but no such service exists.'],
            'viewRepository' => ['privates', 'App\\Repository\\ViewRepository', 'getViewRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'view' => 'App\\Entity\\View',
            'viewRepository' => 'App\\Repository\\ViewRepository',
        ]);
    }
}
