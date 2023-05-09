<?php

namespace Container7uCyxht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__YSAhD8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..ySAhD8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..ySAhD8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'view' => ['privates', '.errored..service_locator..ySAhD8.App\\Entity\\View', NULL, 'Cannot autowire service ".service_locator..ySAhD8": it references class "App\\Entity\\View" but no such service exists.'],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'view' => 'App\\Entity\\View',
        ]);
    }
}
