<?php

namespace ContainerGuH0Npx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XcJaAy8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XcJaAy8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XcJaAy8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produit' => ['privates', '.errored..service_locator.XcJaAy8.App\\Entity\\Produits', NULL, 'Cannot autowire service ".service_locator.XcJaAy8": it references class "App\\Entity\\Produits" but no such service exists.'],
            'produitsRepository' => ['privates', 'App\\Repository\\ProduitsRepository', 'getProduitsRepositoryService', true],
        ], [
            'produit' => 'App\\Entity\\Produits',
            'produitsRepository' => 'App\\Repository\\ProduitsRepository',
        ]);
    }
}
