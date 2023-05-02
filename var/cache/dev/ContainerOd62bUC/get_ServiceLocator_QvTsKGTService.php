<?php

namespace ContainerOd62bUC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QvTsKGTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QvTsKGT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QvTsKGT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'alluser' => ['privates', '.errored..service_locator.QvTsKGT.App\\Entity\\Allusers', NULL, 'Cannot autowire service ".service_locator.QvTsKGT": it references class "App\\Entity\\Allusers" but no such service exists.'],
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'alluser' => 'App\\Entity\\Allusers',
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'serializer' => '?',
        ]);
    }
}
