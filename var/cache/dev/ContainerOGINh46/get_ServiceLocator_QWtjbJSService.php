<?php

namespace ContainerOGINh46;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QWtjbJSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qWtjbJS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qWtjbJS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offretravail' => ['privates', '.errored..service_locator.qWtjbJS.App\\Entity\\Offretravail', NULL, 'Cannot autowire service ".service_locator.qWtjbJS": it references class "App\\Entity\\Offretravail" but no such service exists.'],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
        ], [
            'offretravail' => 'App\\Entity\\Offretravail',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
        ]);
    }
}
