<?php

namespace Container3ugAsUT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2Ximz65Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2Ximz65' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2Ximz65'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
            'videoRepository' => ['privates', 'App\\Repository\\VideoRepository', 'getVideoRepositoryService', true],
        ], [
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
            'videoRepository' => 'App\\Repository\\VideoRepository',
        ]);
    }
}
