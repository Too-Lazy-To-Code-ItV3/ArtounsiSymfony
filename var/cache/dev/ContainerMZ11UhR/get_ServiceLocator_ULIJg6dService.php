<?php

namespace ContainerMZ11UhR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ULIJg6dService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uLIJg6d' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uLIJg6d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tutoriel' => ['privates', '.errored..service_locator.uLIJg6d.App\\Entity\\Tutoriel', NULL, 'Cannot autowire service ".service_locator.uLIJg6d": it references class "App\\Entity\\Tutoriel" but no such service exists.'],
        ], [
            'tutoriel' => 'App\\Entity\\Tutoriel',
        ]);
    }
}
