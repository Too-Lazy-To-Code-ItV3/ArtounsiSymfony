<?php

namespace ContainerWkHsdiq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O2Q4jADService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o2Q4jAD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o2Q4jAD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'artistepostulerRepository' => ['privates', 'App\\Repository\\ArtistepostulerRepository', 'getArtistepostulerRepositoryService', true],
            'demandetravailRepository' => ['privates', 'App\\Repository\\DemandetravailRepository', 'getDemandetravailRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'artistepostulerRepository' => 'App\\Repository\\ArtistepostulerRepository',
            'demandetravailRepository' => 'App\\Repository\\DemandetravailRepository',
        ]);
    }
}
