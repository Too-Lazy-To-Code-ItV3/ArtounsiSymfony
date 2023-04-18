<?php

namespace ContainerMZ11UhR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ALjzYuIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ALjzYuI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ALjzYuI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produitsRepository' => ['privates', 'App\\Repository\\ProduitsRepository', 'getProduitsRepositoryService', true],
        ], [
            'produitsRepository' => 'App\\Repository\\ProduitsRepository',
        ]);
    }
}
