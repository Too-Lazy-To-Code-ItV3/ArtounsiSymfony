<?php

namespace Container3rn07X7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2qGZkqDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2qGZkqD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2qGZkqD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'artistrepo' => ['privates', 'App\\Repository\\ArtistepostulerRepository', 'getArtistepostulerRepositoryService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'artistrepo' => 'App\\Repository\\ArtistepostulerRepository',
            'mailer' => '?',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
        ]);
    }
}
