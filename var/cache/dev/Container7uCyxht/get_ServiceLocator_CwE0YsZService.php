<?php

namespace Container7uCyxht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CwE0YsZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CwE0YsZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CwE0YsZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['privates', '.errored.XkqK92e', NULL, 'Cannot determine controller argument for "App\\Controller\\PostController::DeletePostJson()": the $Normalizer argument is type-hinted with the non-existent class or interface: "App\\Controller\\NormalizerInterface". Did you forget to add a use statement?'],
        ], [
            'Normalizer' => '?',
        ]);
    }
}
