<?php

namespace ContainerLYlY0cV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EbvCHHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EbvCHH_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EbvCHH_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'challengeRepository' => ['privates', 'App\\Repository\\ChallengeRepository', 'getChallengeRepositoryService', true],
        ], [
            'challengeRepository' => 'App\\Repository\\ChallengeRepository',
        ]);
    }
}
