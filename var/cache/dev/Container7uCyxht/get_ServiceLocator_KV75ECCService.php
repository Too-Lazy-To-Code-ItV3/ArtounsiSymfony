<?php

namespace Container7uCyxht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KV75ECCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kV75ECC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kV75ECC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CategoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'postRepository' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'CategoryRepository' => 'App\\Repository\\CategoryRepository',
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'mr' => '?',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
            'paginator' => '?',
            'postRepository' => 'App\\Repository\\PostRepository',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
