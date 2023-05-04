<?php

namespace ContainerOfMZqxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vvk6iQJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vvk6iQJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vvk6iQJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
            'offretravailarchive' => ['privates', '.errored..service_locator.vvk6iQJ.App\\Entity\\Offretravailarchive', NULL, 'Cannot autowire service ".service_locator.vvk6iQJ": it references class "App\\Entity\\Offretravailarchive" but no such service exists.'],
            'offretravailarchiveRepository' => ['privates', 'App\\Repository\\OffretravailarchiveRepository', 'getOffretravailarchiveRepositoryService', true],
        ], [
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
            'offretravailarchive' => 'App\\Entity\\Offretravailarchive',
            'offretravailarchiveRepository' => 'App\\Repository\\OffretravailarchiveRepository',
        ]);
    }
}
