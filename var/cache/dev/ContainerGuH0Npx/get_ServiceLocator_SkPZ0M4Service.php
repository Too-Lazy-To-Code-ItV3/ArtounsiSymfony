<?php

namespace ContainerGuH0Npx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SkPZ0M4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SkPZ0M4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SkPZ0M4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'favorisTuroialRepository' => ['privates', 'App\\Repository\\FavorisTuroialRepository', 'getFavorisTuroialRepositoryService', true],
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'ratingTutorielRepositoty' => ['privates', 'App\\Repository\\RatingTutorielRepository', 'getRatingTutorielRepositoryService', true],
            'tutoriel' => ['privates', '.errored..service_locator.SkPZ0M4.App\\Entity\\Tutoriel', NULL, 'Cannot autowire service ".service_locator.SkPZ0M4": it references class "App\\Entity\\Tutoriel" but no such service exists.'],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'favorisTuroialRepository' => 'App\\Repository\\FavorisTuroialRepository',
            'mr' => '?',
            'ratingTutorielRepositoty' => 'App\\Repository\\RatingTutorielRepository',
            'tutoriel' => 'App\\Entity\\Tutoriel',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
