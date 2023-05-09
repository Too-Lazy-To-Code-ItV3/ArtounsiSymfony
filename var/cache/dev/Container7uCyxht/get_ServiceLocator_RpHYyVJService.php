<?php

namespace Container7uCyxht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RpHYyVJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RpHYyVJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RpHYyVJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'offretravail' => ['privates', '.errored..service_locator.RpHYyVJ.App\\Entity\\Offretravail', NULL, 'Cannot autowire service ".service_locator.RpHYyVJ": it references class "App\\Entity\\Offretravail" but no such service exists.'],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'offretravail' => 'App\\Entity\\Offretravail',
        ]);
    }
}
