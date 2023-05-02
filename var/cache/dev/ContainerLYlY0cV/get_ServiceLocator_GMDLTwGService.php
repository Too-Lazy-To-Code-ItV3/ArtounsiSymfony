<?php

namespace ContainerLYlY0cV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GMDLTwGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GMDLTwG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GMDLTwG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'lignepanierRepository' => ['privates', 'App\\Repository\\LignepanierRepository', 'getLignepanierRepositoryService', true],
        ], [
            'doctrine' => '?',
            'lignepanierRepository' => 'App\\Repository\\LignepanierRepository',
        ]);
    }
}
