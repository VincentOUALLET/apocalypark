<?php

namespace ContainerIFANvpA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAttractionTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AttractionType' shared autowired service.
     *
     * @return \App\Form\AttractionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AttractionType.php';

        return $container->privates['App\\Form\\AttractionType'] = new \App\Form\AttractionType();
    }
}
