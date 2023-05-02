<?php

namespace ContainerOd62bUC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RouOq05Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RouOq05' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RouOq05'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'offretravail' => ['privates', '.errored..service_locator.RouOq05.App\\Entity\\Offretravail', NULL, 'Cannot autowire service ".service_locator.RouOq05": it references class "App\\Entity\\Offretravail" but no such service exists.'],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
            'offretravailarchiveRepository' => ['privates', 'App\\Repository\\OffretravailarchiveRepository', 'getOffretravailarchiveRepositoryService', true],
        ], [
            'normalizer' => '?',
            'offretravail' => 'App\\Entity\\Offretravail',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
            'offretravailarchiveRepository' => 'App\\Repository\\OffretravailarchiveRepository',
        ]);
    }
}
