<?php

namespace ContainerXTpDvjm;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GHIRBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GHI_RB_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GHI_RB_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'challenge' => ['privates', '.errored..service_locator.GHI_RB_.App\\Entity\\Challenge', NULL, 'Cannot autowire service ".service_locator.GHI_RB_": it references class "App\\Entity\\Challenge" but no such service exists.'],
        ], [
            'challenge' => 'App\\Entity\\Challenge',
        ]);
    }
}
