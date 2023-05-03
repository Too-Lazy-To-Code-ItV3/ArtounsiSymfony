<?php

namespace Container3rn07X7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GyXjEZAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GyXjEZA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GyXjEZA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'participationRepository' => ['privates', 'App\\Repository\\ParticipationRepository', 'getParticipationRepositoryService', true],
        ], [
            'participationRepository' => 'App\\Repository\\ParticipationRepository',
        ]);
    }
}
