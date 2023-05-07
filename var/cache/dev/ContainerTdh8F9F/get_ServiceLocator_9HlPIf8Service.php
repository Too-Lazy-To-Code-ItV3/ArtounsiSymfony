<?php

namespace ContainerTdh8F9F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9HlPIf8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9HlPIf8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9HlPIf8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'usr' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
        ], [
            'Normalizer' => '?',
            'entityManager' => '?',
            'usr' => 'App\\Repository\\AllusersRepository',
        ]);
    }
}
