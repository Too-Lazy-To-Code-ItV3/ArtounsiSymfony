<?php

namespace ContainerPLSgpxu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ShBJIr0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ShBJIr0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ShBJIr0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mr' => ['services', 'doctrine', 'getDoctrineService', false],
            'participationRepository' => ['privates', 'App\\Repository\\ParticipationRepository', 'getParticipationRepositoryService', true],
        ], [
            'mr' => '?',
            'participationRepository' => 'App\\Repository\\ParticipationRepository',
        ]);
    }
}
