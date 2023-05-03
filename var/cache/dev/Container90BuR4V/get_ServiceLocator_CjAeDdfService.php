<?php

namespace Container90BuR4V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CjAeDdfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cjAeDdf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cjAeDdf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'alluserscontroller' => ['privates', '.errored.fvzMiNK', NULL, 'Cannot determine controller argument for "App\\Controller\\DemandetravailController::edit()": the $alluserscontroller argument is type-hinted with the non-existent class or interface: "App\\Controller\\AllusersCotroller". Did you forget to add a use statement?'],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'demandetravail' => ['privates', '.errored..service_locator.cjAeDdf.App\\Entity\\Demandetravail', NULL, 'Cannot autowire service ".service_locator.cjAeDdf": it references class "App\\Entity\\Demandetravail" but no such service exists.'],
            'demandetravailRepository' => ['privates', 'App\\Repository\\DemandetravailRepository', 'getDemandetravailRepositoryService', true],
            'mot' => ['privates', 'App\\Repository\\GrosmotsRepository', 'getGrosmotsRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'alluserscontroller' => '?',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'demandetravail' => 'App\\Entity\\Demandetravail',
            'demandetravailRepository' => 'App\\Repository\\DemandetravailRepository',
            'mot' => 'App\\Repository\\GrosmotsRepository',
        ]);
    }
}
