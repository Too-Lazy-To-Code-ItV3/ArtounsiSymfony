<?php

namespace Container7uCyxht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwilio_ClientService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twilio.client' shared autowired service.
     *
     * @return \Twilio\Rest\Client
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twilio'.\DIRECTORY_SEPARATOR.'sdk'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twilio'.\DIRECTORY_SEPARATOR.'Base'.\DIRECTORY_SEPARATOR.'BaseClient.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twilio'.\DIRECTORY_SEPARATOR.'sdk'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Twilio'.\DIRECTORY_SEPARATOR.'Rest'.\DIRECTORY_SEPARATOR.'Client.php';

        return $container->privates['twilio.client'] = new \Twilio\Rest\Client($container->getEnv('TWILIO_ACCOUNT_SID'), $container->getEnv('TWILIO_AUTH_TOKEN'));
    }
}
