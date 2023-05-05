<?php

namespace ContainerDaJtot1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TfcsIk9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tfcsIk9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tfcsIk9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'tutoriel' => ['privates', '.errored..service_locator.tfcsIk9.App\\Entity\\Tutoriel', NULL, 'Cannot autowire service ".service_locator.tfcsIk9": it references class "App\\Entity\\Tutoriel" but no such service exists.'],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'tutoriel' => 'App\\Entity\\Tutoriel',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
