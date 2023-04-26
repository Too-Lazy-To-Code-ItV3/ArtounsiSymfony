<?php

namespace ContainerSXyzPYC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IwGPwHFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IwGPwHF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IwGPwHF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'demandetravailRepository' => ['privates', 'App\\Repository\\DemandetravailRepository', 'getDemandetravailRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'demandetravailRepository' => 'App\\Repository\\DemandetravailRepository',
            'paginator' => '?',
        ]);
    }
}
