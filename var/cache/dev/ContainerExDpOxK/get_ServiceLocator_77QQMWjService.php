<?php

namespace ContainerExDpOxK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_77QQMWjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.77QQMWj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.77QQMWj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'demandetravailRepository' => ['privates', 'App\\Repository\\DemandetravailRepository', 'getDemandetravailRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'demandetravailRepository' => 'App\\Repository\\DemandetravailRepository',
        ]);
    }
}
