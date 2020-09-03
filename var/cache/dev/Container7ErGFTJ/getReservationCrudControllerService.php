<?php

namespace Container7ErGFTJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservationCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\ReservationCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\ReservationCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/ReservationCrudController.php';

        $container->services['App\\Controller\\Admin\\ReservationCrudController'] = $instance = new \App\Controller\Admin\ReservationCrudController();

        $instance->setContainer(($container->privates['.service_locator.laElj3_'] ?? $container->load('get_ServiceLocator_LaElj3Service'))->withContext('App\\Controller\\Admin\\ReservationCrudController', $container));

        return $instance;
    }
}