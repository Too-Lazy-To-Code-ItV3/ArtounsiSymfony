<?php

namespace ContainerPgEX3Oq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MgjTE4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MgjTE_4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MgjTE_4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'CategoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'challengeRepository' => ['privates', 'App\\Repository\\ChallengeRepository', 'getChallengeRepositoryService', true],
        ], [
            'CategoryRepository' => 'App\\Repository\\CategoryRepository',
            'challengeRepository' => 'App\\Repository\\ChallengeRepository',
        ]);
    }
}
