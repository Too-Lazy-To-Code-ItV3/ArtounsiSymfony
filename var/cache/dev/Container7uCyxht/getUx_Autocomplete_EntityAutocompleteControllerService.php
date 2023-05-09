<?php

namespace Container7uCyxht;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_Autocomplete_EntityAutocompleteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'ux.autocomplete.entity_autocomplete_controller' shared service.
     *
     * @return \Symfony\UX\Autocomplete\Controller\EntityAutocompleteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-autocomplete'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'EntityAutocompleteController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-autocomplete'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AutocompleterRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-autocomplete'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AutocompleteResultsExecutor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-autocomplete'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'DoctrineRegistryWrapper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Security.php';

        return $container->services['ux.autocomplete.entity_autocomplete_controller'] = new \Symfony\UX\Autocomplete\Controller\EntityAutocompleteController(new \Symfony\UX\Autocomplete\AutocompleterRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [], [])), new \Symfony\UX\Autocomplete\AutocompleteResultsExecutor(new \Symfony\UX\Autocomplete\Doctrine\DoctrineRegistryWrapper(($container->services['doctrine'] ?? $container->getDoctrineService())), ($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security.authorization_checker' => ['services', '.container.private.security.authorization_checker', 'get_Container_Private_Security_AuthorizationCheckerService', false],
            'security.token_storage' => ['services', '.container.private.security.token_storage', 'get_Container_Private_Security_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ]))), ($container->services['router'] ?? $container->getRouterService()));
    }
}
