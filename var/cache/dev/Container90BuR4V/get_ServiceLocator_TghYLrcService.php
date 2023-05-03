<?php

namespace Container90BuR4V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TghYLrcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tghYLrc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tghYLrc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'postLike' => ['privates', '.errored..service_locator.tghYLrc.App\\Entity\\PostLike', NULL, 'Cannot autowire service ".service_locator.tghYLrc": it references class "App\\Entity\\PostLike" but no such service exists.'],
            'postLikeRepository' => ['privates', 'App\\Repository\\PostLikeRepository', 'getPostLikeRepositoryService', true],
        ], [
            'postLike' => 'App\\Entity\\PostLike',
            'postLikeRepository' => 'App\\Repository\\PostLikeRepository',
        ]);
    }
}
