<?php

namespace ContainerGuH0Npx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZxXXR6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZxXXR_6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZxXXR_6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
        ], [
            'urlGenerator' => '?',
        ]);
    }
}
