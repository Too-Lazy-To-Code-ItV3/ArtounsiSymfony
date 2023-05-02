<?php

namespace ContainerPaytx9t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RXk8ooyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rXk8ooy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rXk8ooy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'postLike' => ['privates', '.errored..service_locator.rXk8ooy.App\\Entity\\PostLike', NULL, 'Cannot autowire service ".service_locator.rXk8ooy": it references class "App\\Entity\\PostLike" but no such service exists.'],
        ], [
            'postLike' => 'App\\Entity\\PostLike',
        ]);
    }
}
