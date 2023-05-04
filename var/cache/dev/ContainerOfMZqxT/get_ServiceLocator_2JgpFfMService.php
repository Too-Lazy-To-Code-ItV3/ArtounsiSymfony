<?php

namespace ContainerOfMZqxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2JgpFfMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2JgpFfM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2JgpFfM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'challenge' => ['privates', '.errored..service_locator.2JgpFfM.App\\Entity\\Challenge', NULL, 'Cannot autowire service ".service_locator.2JgpFfM": it references class "App\\Entity\\Challenge" but no such service exists.'],
            'participationRepository' => ['privates', 'App\\Repository\\ParticipationRepository', 'getParticipationRepositoryService', true],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingRepository', 'getRatingRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'challenge' => 'App\\Entity\\Challenge',
            'participationRepository' => 'App\\Repository\\ParticipationRepository',
            'ratingRepository' => 'App\\Repository\\RatingRepository',
        ]);
    }
}
