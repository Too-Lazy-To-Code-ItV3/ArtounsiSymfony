<?php

namespace ContainerEYgW7gV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QvHyl36Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qvHyl36' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qvHyl36'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'postLikeRepository' => ['privates', 'App\\Repository\\PostLikeRepository', 'getPostLikeRepositoryService', true],
        ], [
            'postLikeRepository' => 'App\\Repository\\PostLikeRepository',
        ]);
    }
}
