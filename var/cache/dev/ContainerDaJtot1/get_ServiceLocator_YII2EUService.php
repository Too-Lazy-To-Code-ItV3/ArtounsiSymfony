<?php

namespace ContainerDaJtot1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YII2EUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YI_i2EU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YI_i2EU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'paginator' => '?',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
