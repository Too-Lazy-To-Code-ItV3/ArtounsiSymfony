<?php

namespace ContainerPLSgpxu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_94VUTvhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.94VUTvh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.94VUTvh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'challengeRepository' => ['privates', 'App\\Repository\\ChallengeRepository', 'getChallengeRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'challengeRepository' => 'App\\Repository\\ChallengeRepository',
        ]);
    }
}
