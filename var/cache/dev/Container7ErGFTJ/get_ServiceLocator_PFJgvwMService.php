<?php

namespace Container7ErGFTJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PFJgvwMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PFJgvwM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PFJgvwM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityDto' => ['privates', '.errored..service_locator.PFJgvwM.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto', NULL, 'Cannot autowire service ".service_locator.PFJgvwM": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto" but no such service exists.'],
            'fields' => ['privates', '.errored..service_locator.PFJgvwM.EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection', NULL, 'Cannot autowire service ".service_locator.PFJgvwM": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection" but no such service exists.'],
            'filters' => ['privates', '.errored..service_locator.PFJgvwM.EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection', NULL, 'Cannot autowire service ".service_locator.PFJgvwM": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection" but no such service exists.'],
            'searchDto' => ['privates', '.errored..service_locator.PFJgvwM.EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto', NULL, 'Cannot autowire service ".service_locator.PFJgvwM": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto" but no such service exists.'],
        ], [
            'entityDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto',
            'fields' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FieldCollection',
            'filters' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Collection\\FilterCollection',
            'searchDto' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\SearchDto',
        ]);
    }
}
