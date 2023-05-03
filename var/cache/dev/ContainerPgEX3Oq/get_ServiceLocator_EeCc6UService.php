<?php

namespace ContainerPgEX3Oq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EeCc6UService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._EeCc6U' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._EeCc6U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'video' => ['privates', '.errored..service_locator._EeCc6U.App\\Entity\\Video', NULL, 'Cannot autowire service ".service_locator._EeCc6U": it references class "App\\Entity\\Video" but no such service exists.'],
            'videoRepository' => ['privates', 'App\\Repository\\VideoRepository', 'getVideoRepositoryService', true],
        ], [
            'mr' => '?',
            'video' => 'App\\Entity\\Video',
            'videoRepository' => 'App\\Repository\\VideoRepository',
        ]);
    }
}
