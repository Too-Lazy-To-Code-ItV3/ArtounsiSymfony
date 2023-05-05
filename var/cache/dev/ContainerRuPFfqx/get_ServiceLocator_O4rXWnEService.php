<?php

namespace ContainerRuPFfqx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O4rXWnEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o4rXWnE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o4rXWnE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'challenge' => ['privates', '.errored..service_locator.o4rXWnE.App\\Entity\\Challenge', NULL, 'Cannot autowire service ".service_locator.o4rXWnE": it references class "App\\Entity\\Challenge" but no such service exists.'],
            'challengeRepository' => ['privates', 'App\\Repository\\ChallengeRepository', 'getChallengeRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'challenge' => 'App\\Entity\\Challenge',
            'challengeRepository' => 'App\\Repository\\ChallengeRepository',
        ]);
    }
}
