<?php

namespace Container90BuR4V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YkIsf6uService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YkIsf6u' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YkIsf6u'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'grosmot' => ['privates', '.errored..service_locator.YkIsf6u.App\\Entity\\Grosmots', NULL, 'Cannot autowire service ".service_locator.YkIsf6u": it references class "App\\Entity\\Grosmots" but no such service exists.'],
        ], [
            'grosmot' => 'App\\Entity\\Grosmots',
        ]);
    }
}
