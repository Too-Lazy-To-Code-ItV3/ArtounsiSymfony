<?php

namespace ContainerPLSgpxu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CCZxlMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cC_zxlM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cC_zxlM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
            'videoRepository' => ['privates', 'App\\Repository\\VideoRepository', 'getVideoRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
            'videoRepository' => 'App\\Repository\\VideoRepository',
        ]);
    }
}
