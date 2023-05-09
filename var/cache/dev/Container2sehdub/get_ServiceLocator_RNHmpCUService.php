<?php

namespace Container2sehdub;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RNHmpCUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rNHmpCU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rNHmpCU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'artistrepo' => ['privates', 'App\\Repository\\ArtistepostulerRepository', 'getArtistepostulerRepositoryService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
        ], [
            'Normalizer' => '?',
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'artistrepo' => 'App\\Repository\\ArtistepostulerRepository',
            'mailer' => '?',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
        ]);
    }
}
