<?php

namespace ContainerHtz8qR0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CNncWvfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CNncWvf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CNncWvf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'view' => ['privates', '.errored..service_locator.CNncWvf.App\\Entity\\View', NULL, 'Cannot autowire service ".service_locator.CNncWvf": it references class "App\\Entity\\View" but no such service exists.'],
            'viewRepository' => ['privates', 'App\\Repository\\ViewRepository', 'getViewRepositoryService', true],
        ], [
            'view' => 'App\\Entity\\View',
            'viewRepository' => 'App\\Repository\\ViewRepository',
        ]);
    }
}
