<?php

namespace ContainerTdh8F9F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W79q8nzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.w79q8nz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.w79q8nz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'produit' => ['privates', '.errored..service_locator.w79q8nz.App\\Entity\\Produits', NULL, 'Cannot autowire service ".service_locator.w79q8nz": it references class "App\\Entity\\Produits" but no such service exists.'],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'produit' => 'App\\Entity\\Produits',
        ]);
    }
}
