<?php

namespace ContainerPgEX3Oq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0sKbf5BService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0sKbf5B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0sKbf5B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'panierRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.0sKbf5B.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.0sKbf5B": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'panierRepository' => 'App\\Repository\\PanierRepository',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}
