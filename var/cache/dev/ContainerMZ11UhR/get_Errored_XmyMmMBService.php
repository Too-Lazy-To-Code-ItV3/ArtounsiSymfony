<?php

namespace ContainerMZ11UhR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_XmyMmMBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.XmyMmMB' shared service.
     *
     * @return \App\Controller\LignepanierRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\PaymentController::checkout()": the $lignepanierRepository argument is type-hinted with the non-existent class or interface: "App\\Controller\\LignepanierRepository". Did you forget to add a use statement?');
    }
}
