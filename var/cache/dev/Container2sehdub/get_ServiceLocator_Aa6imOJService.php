<?php

namespace Container2sehdub;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Aa6imOJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aa6imOJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aa6imOJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'lignepanierRepository' => ['privates', 'App\\Repository\\LignepanierRepository', 'getLignepanierRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'lignepanierRepository' => 'App\\Repository\\LignepanierRepository',
        ]);
    }
}
