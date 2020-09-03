<?php

namespace Container7ErGFTJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QY79PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QY79_p_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QY79_p_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'attractionRepository' => ['privates', 'App\\Repository\\AttractionRepository', 'getAttractionRepositoryService', true],
        ], [
            'attractionRepository' => 'App\\Repository\\AttractionRepository',
        ]);
    }
}
