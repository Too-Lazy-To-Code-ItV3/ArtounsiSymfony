<?php

namespace ContainerWkHsdiq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SLehxUcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SLehxUc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SLehxUc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'demandetravailRepository' => ['privates', 'App\\Repository\\DemandetravailRepository', 'getDemandetravailRepositoryService', true],
            'mot' => ['privates', 'App\\Repository\\GrosmotsRepository', 'getGrosmotsRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'demandetravailRepository' => 'App\\Repository\\DemandetravailRepository',
            'mot' => 'App\\Repository\\GrosmotsRepository',
        ]);
    }
}
