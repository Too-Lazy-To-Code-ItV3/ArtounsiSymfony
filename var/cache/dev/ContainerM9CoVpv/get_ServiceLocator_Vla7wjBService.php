<?php

namespace ContainerM9CoVpv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vla7wjBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Vla7wjB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Vla7wjB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'lignepanierRepository' => ['privates', '.errored.XmyMmMB', NULL, 'Cannot determine controller argument for "App\\Controller\\PaymentController::checkout()": the $lignepanierRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\LignepanierRepository". Did you forget to add a use statement?'],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
        ], [
            'lignepanierRepository' => '?',
            'urlGenerator' => '?',
        ]);
    }
}
