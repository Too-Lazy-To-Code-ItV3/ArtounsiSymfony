<?php

namespace ContainerXTpDvjm;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8Mtl9xtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8Mtl9xt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8Mtl9xt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'demandetravailRepository' => ['privates', 'App\\Repository\\DemandetravailRepository', 'getDemandetravailRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'demandetravailRepository' => 'App\\Repository\\DemandetravailRepository',
        ]);
    }
}
