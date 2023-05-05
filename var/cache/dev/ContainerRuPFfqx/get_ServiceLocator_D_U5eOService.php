<?php

namespace ContainerRuPFfqx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D_U5eOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d.U5eO_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d.U5eO_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'grosmotsRepository' => ['privates', 'App\\Repository\\GrosmotsRepository', 'getGrosmotsRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'grosmotsRepository' => 'App\\Repository\\GrosmotsRepository',
        ]);
    }
}
