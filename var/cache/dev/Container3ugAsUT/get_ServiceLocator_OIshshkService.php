<?php

namespace Container3ugAsUT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OIshshkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OIshshk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OIshshk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'twilioClient' => ['privates', 'twilio.client', 'getTwilio_ClientService', true],
        ], [
            'twilioClient' => '?',
        ]);
    }
}
