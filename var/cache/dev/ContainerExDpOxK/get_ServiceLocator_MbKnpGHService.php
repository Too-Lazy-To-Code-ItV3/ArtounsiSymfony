<?php

namespace ContainerExDpOxK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MbKnpGHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MbKnpGH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MbKnpGH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'postRepository' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'postRepository' => 'App\\Repository\\PostRepository',
        ]);
    }
}
