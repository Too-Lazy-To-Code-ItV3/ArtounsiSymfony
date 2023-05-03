<?php

namespace Container90BuR4V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HBIzKqeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hBIzKqe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hBIzKqe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'alluserscontroller' => ['privates', '.errored.71k1nCg', NULL, 'Cannot determine controller argument for "App\\Controller\\DemandetravailController::new()": the $alluserscontroller argument is type-hinted with the non-existent class or interface: "App\\Controller\\AllusersCotroller". Did you forget to add a use statement?'],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'demandetravailRepository' => ['privates', 'App\\Repository\\DemandetravailRepository', 'getDemandetravailRepositoryService', true],
            'mot' => ['privates', 'App\\Repository\\GrosmotsRepository', 'getGrosmotsRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'alluserscontroller' => '?',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'demandetravailRepository' => 'App\\Repository\\DemandetravailRepository',
            'mot' => 'App\\Repository\\GrosmotsRepository',
        ]);
    }
}
