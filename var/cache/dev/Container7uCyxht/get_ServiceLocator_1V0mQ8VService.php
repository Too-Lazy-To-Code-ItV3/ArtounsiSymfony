<?php

namespace Container7uCyxht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1V0mQ8VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1V0mQ8V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1V0mQ8V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ban' => ['privates', '.errored..service_locator.1V0mQ8V.App\\Entity\\Ban', NULL, 'Cannot autowire service ".service_locator.1V0mQ8V": it references class "App\\Entity\\Ban" but no such service exists.'],
        ], [
            'ban' => 'App\\Entity\\Ban',
        ]);
    }
}
