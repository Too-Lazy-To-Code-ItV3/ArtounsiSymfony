<?php

namespace ContainerCcpAy6l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VousgdXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VousgdX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VousgdX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'offretravailarchiveRepository' => ['privates', 'App\\Repository\\OffretravailarchiveRepository', 'getOffretravailarchiveRepositoryService', true],
        ], [
            'offretravailarchiveRepository' => 'App\\Repository\\OffretravailarchiveRepository',
        ]);
    }
}
