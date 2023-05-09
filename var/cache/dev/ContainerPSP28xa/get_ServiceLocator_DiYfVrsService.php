<?php

namespace ContainerPSP28xa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DiYfVrsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DiYfVrs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DiYfVrs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tutoriel' => ['privates', '.errored..service_locator.DiYfVrs.App\\Entity\\Tutoriel', NULL, 'Cannot autowire service ".service_locator.DiYfVrs": it references class "App\\Entity\\Tutoriel" but no such service exists.'],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
        ], [
            'tutoriel' => 'App\\Entity\\Tutoriel',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
        ]);
    }
}
