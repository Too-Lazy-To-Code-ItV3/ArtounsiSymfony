<?php

namespace Container7uCyxht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FhwHTHCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FhwHTHC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FhwHTHC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'videoRepository' => ['privates', 'App\\Repository\\VideoRepository', 'getVideoRepositoryService', true],
            'videoentity' => ['privates', '.errored..service_locator.FhwHTHC.App\\Entity\\Video', NULL, 'Cannot autowire service ".service_locator.FhwHTHC": it references class "App\\Entity\\Video" but no such service exists.'],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'videoRepository' => 'App\\Repository\\VideoRepository',
            'videoentity' => 'App\\Entity\\Video',
        ]);
    }
}
