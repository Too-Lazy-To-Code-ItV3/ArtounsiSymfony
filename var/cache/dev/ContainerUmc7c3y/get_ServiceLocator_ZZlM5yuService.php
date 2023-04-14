<?php

namespace ContainerUmc7c3y;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZZlM5yuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zZlM5yu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zZlM5yu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
        ], [
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
        ]);
    }
}
