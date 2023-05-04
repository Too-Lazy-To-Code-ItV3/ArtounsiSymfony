<?php

namespace Container3ugAsUT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_Autocomplete_ChoiceTypeExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.autocomplete.choice_type_extension' shared service.
     *
     * @return \Symfony\UX\Autocomplete\Form\AutocompleteChoiceTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-autocomplete'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'AutocompleteChoiceTypeExtension.php';

        return $container->privates['ux.autocomplete.choice_type_extension'] = new \Symfony\UX\Autocomplete\Form\AutocompleteChoiceTypeExtension(($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
