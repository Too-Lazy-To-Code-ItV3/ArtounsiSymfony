<?php

namespace ContainerPgEX3Oq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TGOvGF5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TGOvGF5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TGOvGF5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lignepanier' => ['privates', '.errored..service_locator.TGOvGF5.App\\Entity\\Lignepanier', NULL, 'Cannot autowire service ".service_locator.TGOvGF5": it references class "App\\Entity\\Lignepanier" but no such service exists.'],
        ], [
            'lignepanier' => 'App\\Entity\\Lignepanier',
        ]);
    }
}
