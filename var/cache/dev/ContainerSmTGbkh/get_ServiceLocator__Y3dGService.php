<?php

namespace ContainerSmTGbkh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Y3dGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._._y3dG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._._y3dG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'demandetravail' => ['privates', '.errored..service_locator._._y3dG.App\\Entity\\Demandetravail', NULL, 'Cannot autowire service ".service_locator._._y3dG": it references class "App\\Entity\\Demandetravail" but no such service exists.'],
            'demandetravailRepository' => ['privates', 'App\\Repository\\DemandetravailRepository', 'getDemandetravailRepositoryService', true],
        ], [
            'demandetravail' => 'App\\Entity\\Demandetravail',
            'demandetravailRepository' => 'App\\Repository\\DemandetravailRepository',
        ]);
    }
}
