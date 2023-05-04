<?php

namespace Container3ugAsUT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Nkpe401Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nkpe401' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nkpe401'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'demandetravail' => ['privates', '.errored..service_locator.nkpe401.App\\Entity\\Demandetravail', NULL, 'Cannot autowire service ".service_locator.nkpe401": it references class "App\\Entity\\Demandetravail" but no such service exists.'],
            'demandetravailRepository' => ['privates', 'App\\Repository\\DemandetravailRepository', 'getDemandetravailRepositoryService', true],
            'mot' => ['privates', 'App\\Repository\\GrosmotsRepository', 'getGrosmotsRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'demandetravail' => 'App\\Entity\\Demandetravail',
            'demandetravailRepository' => 'App\\Repository\\DemandetravailRepository',
            'mot' => 'App\\Repository\\GrosmotsRepository',
        ]);
    }
}
