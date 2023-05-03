<?php

namespace ContainerWkHsdiq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PaymentController' shared autowired service.
     *
     * @return \App\Controller\PaymentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PaymentController.php';

        $container->services['App\\Controller\\PaymentController'] = $instance = new \App\Controller\PaymentController(($container->services['App\\Controller\\PanierController'] ?? $container->load('getPanierControllerService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\PaymentController', $container));

        return $instance;
    }
}
