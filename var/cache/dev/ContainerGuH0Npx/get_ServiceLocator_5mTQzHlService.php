<?php

namespace ContainerGuH0Npx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5mTQzHlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5mTQzHl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5mTQzHl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'ban' => ['privates', '.errored..service_locator.5mTQzHl.App\\Entity\\Ban', NULL, 'Cannot autowire service ".service_locator.5mTQzHl": it references class "App\\Entity\\Ban" but no such service exists.'],
            'banRepository' => ['privates', 'App\\Repository\\BanRepository', 'getBanRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'ban' => 'App\\Entity\\Ban',
            'banRepository' => 'App\\Repository\\BanRepository',
            'serializer' => '?',
        ]);
    }
}
