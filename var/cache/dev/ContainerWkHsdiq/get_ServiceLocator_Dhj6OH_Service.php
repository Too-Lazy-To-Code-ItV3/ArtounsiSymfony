<?php

namespace ContainerWkHsdiq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dhj6OH_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Dhj6OH.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Dhj6OH.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offretravail' => ['privates', '.errored..service_locator.Dhj6OH..App\\Entity\\Offretravail', NULL, 'Cannot autowire service ".service_locator.Dhj6OH.": it references class "App\\Entity\\Offretravail" but no such service exists.'],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
            'offretravailarchiveRepository' => ['privates', 'App\\Repository\\OffretravailarchiveRepository', 'getOffretravailarchiveRepositoryService', true],
        ], [
            'offretravail' => 'App\\Entity\\Offretravail',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
            'offretravailarchiveRepository' => 'App\\Repository\\OffretravailarchiveRepository',
        ]);
    }
}
