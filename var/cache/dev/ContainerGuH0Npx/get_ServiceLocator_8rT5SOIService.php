<?php

namespace ContainerGuH0Npx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8rT5SOIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8rT5SOI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8rT5SOI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'produit' => ['privates', '.errored..service_locator.8rT5SOI.App\\Entity\\Produits', NULL, 'Cannot autowire service ".service_locator.8rT5SOI": it references class "App\\Entity\\Produits" but no such service exists.'],
            'produitRepository' => ['privates', 'App\\Repository\\ProduitsRepository', 'getProduitsRepositoryService', true],
        ], [
            'entityManager' => '?',
            'produit' => 'App\\Entity\\Produits',
            'produitRepository' => 'App\\Repository\\ProduitsRepository',
        ]);
    }
}
