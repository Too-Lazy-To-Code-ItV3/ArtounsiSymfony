<?php

namespace ContainerTdh8F9F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_86MuaejService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.86Muaej' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.86Muaej'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CategoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'CategoryRepository' => 'App\\Repository\\CategoryRepository',
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'mr' => '?',
            'paginator' => '?',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
