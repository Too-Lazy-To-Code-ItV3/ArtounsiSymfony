<?php

namespace Container7uCyxht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Yoajz3_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yoajz3.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yoajz3.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'mailer' => '?',
            'serializer' => '?',
        ]);
    }
}
