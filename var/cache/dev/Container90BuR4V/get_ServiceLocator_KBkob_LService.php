<?php

namespace Container90BuR4V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KBkob_LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KBkob.L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KBkob.L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comment' => ['privates', '.errored..service_locator.KBkob.L.App\\Entity\\Comment', NULL, 'Cannot autowire service ".service_locator.KBkob.L": it references class "App\\Entity\\Comment" but no such service exists.'],
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
        ], [
            'comment' => 'App\\Entity\\Comment',
            'commentRepository' => 'App\\Repository\\CommentRepository',
        ]);
    }
}
