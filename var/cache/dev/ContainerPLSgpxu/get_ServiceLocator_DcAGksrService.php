<?php

namespace ContainerPLSgpxu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DcAGksrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dcAGksr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dcAGksr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ac' => ['services', 'App\\Controller\\AllusersController', 'getAllusersControllerService', true],
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'ban' => ['privates', '.errored..service_locator.dcAGksr.App\\Entity\\Ban', NULL, 'Cannot autowire service ".service_locator.dcAGksr": it references class "App\\Entity\\Ban" but no such service exists.'],
            'banRepository' => ['privates', 'App\\Repository\\BanRepository', 'getBanRepositoryService', true],
        ], [
            'ac' => 'App\\Controller\\AllusersController',
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'ban' => 'App\\Entity\\Ban',
            'banRepository' => 'App\\Repository\\BanRepository',
        ]);
    }
}
