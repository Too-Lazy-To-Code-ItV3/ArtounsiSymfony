<?php

namespace ContainerTdh8F9F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XC3T22GService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xC3T22G' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xC3T22G'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'challenge' => ['privates', '.errored..service_locator.xC3T22G.App\\Entity\\Challenge', NULL, 'Cannot autowire service ".service_locator.xC3T22G": it references class "App\\Entity\\Challenge" but no such service exists.'],
            'cr' => ['privates', 'App\\Repository\\ChallengeRepository', 'getChallengeRepositoryService', true],
            'participationRepository' => ['privates', 'App\\Repository\\ParticipationRepository', 'getParticipationRepositoryService', true],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingRepository', 'getRatingRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'challenge' => 'App\\Entity\\Challenge',
            'cr' => 'App\\Repository\\ChallengeRepository',
            'participationRepository' => 'App\\Repository\\ParticipationRepository',
            'ratingRepository' => 'App\\Repository\\RatingRepository',
        ]);
    }
}
