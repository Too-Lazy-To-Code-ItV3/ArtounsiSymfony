<?php

namespace ContainerPaytx9t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yz_RiJMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Yz.riJM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yz.riJM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'favorisTuroial' => ['privates', '.errored..service_locator.Yz.riJM.App\\Entity\\FavorisTuroial', NULL, 'Cannot autowire service ".service_locator.Yz.riJM": it references class "App\\Entity\\FavorisTuroial" but no such service exists.'],
            'favorisTuroialRepository' => ['privates', 'App\\Repository\\FavorisTuroialRepository', 'getFavorisTuroialRepositoryService', true],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'favorisTuroial' => 'App\\Entity\\FavorisTuroial',
            'favorisTuroialRepository' => 'App\\Repository\\FavorisTuroialRepository',
            'mr' => '?',
        ]);
    }
}
