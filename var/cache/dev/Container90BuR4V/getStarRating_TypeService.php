<?php

namespace Container90BuR4V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStarRating_TypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'star_rating.type' shared service.
     *
     * @return \Sbyaute\StarRatingBundle\Form\RatingType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'sbyaute'.\DIRECTORY_SEPARATOR.'star-rating-bundle'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'RatingType.php';

        return $container->privates['star_rating.type'] = new \Sbyaute\StarRatingBundle\Form\RatingType();
    }
}
