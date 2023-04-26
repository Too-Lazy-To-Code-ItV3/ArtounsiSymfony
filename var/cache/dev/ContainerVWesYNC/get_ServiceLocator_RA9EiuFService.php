<?php

namespace ContainerVWesYNC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RA9EiuFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RA9EiuF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RA9EiuF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'rating' => ['privates', '.errored..service_locator.RA9EiuF.App\\Entity\\Rating', NULL, 'Cannot autowire service ".service_locator.RA9EiuF": it references class "App\\Entity\\Rating" but no such service exists.'],
            'ratingRepository' => ['privates', 'App\\Repository\\RatingRepository', 'getRatingRepositoryService', true],
        ], [
            'rating' => 'App\\Entity\\Rating',
            'ratingRepository' => 'App\\Repository\\RatingRepository',
        ]);
    }
}
