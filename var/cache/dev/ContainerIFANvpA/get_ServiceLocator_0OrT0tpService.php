<?php

namespace ContainerIFANvpA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0OrT0tpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0OrT0tp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0OrT0tp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\AttractionCrudController::autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController::configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\AttractionCrudController::configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\AttractionCrudController::configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\AttractionCrudController::configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\AttractionCrudController::configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\AttractionCrudController::createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\AttractionCrudController::createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\AttractionCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\AttractionCrudController::createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\AttractionCrudController::createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\AttractionCrudController::delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController::deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\AttractionCrudController::detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController::edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController::index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController::new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController::persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\AttractionCrudController::renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController::updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\Admin\\ReservationCrudController::autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\ReservationCrudController::configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\ReservationCrudController::configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\ReservationCrudController::configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\ReservationCrudController::configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\ReservationCrudController::createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ReservationCrudController::createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ReservationCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\ReservationCrudController::createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ReservationCrudController::createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ReservationCrudController::delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ReservationCrudController::detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ReservationCrudController::renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController::updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController::delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController::detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\AttractionController::delete' => ['privates', '.service_locator.gS8dD9Z', 'get_ServiceLocator_GS8dD9ZService', true],
            'App\\Controller\\AttractionController::edit' => ['privates', '.service_locator.gS8dD9Z', 'get_ServiceLocator_GS8dD9ZService', true],
            'App\\Controller\\AttractionController::index' => ['privates', '.service_locator.QY79_p_', 'get_ServiceLocator_QY79PService', true],
            'App\\Controller\\AttractionController::show' => ['privates', '.service_locator.gS8dD9Z', 'get_ServiceLocator_GS8dD9ZService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.iNa3IJi', 'get_ServiceLocator_INa3IJiService', true],
            'App\\Controller\\ReservationController::delete' => ['privates', '.service_locator.KEWOaUN', 'get_ServiceLocator_KEWOaUNService', true],
            'App\\Controller\\ReservationController::edit' => ['privates', '.service_locator.KEWOaUN', 'get_ServiceLocator_KEWOaUNService', true],
            'App\\Controller\\ReservationController::index' => ['privates', '.service_locator.KI_ScyC', 'get_ServiceLocator_KIScyCService', true],
            'App\\Controller\\ReservationController::show' => ['privates', '.service_locator.KEWOaUN', 'get_ServiceLocator_KEWOaUNService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\Admin\\AttractionCrudController:autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController:configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\AttractionCrudController:configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\AttractionCrudController:configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\AttractionCrudController:configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\AttractionCrudController:configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\AttractionCrudController:createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\AttractionCrudController:createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\AttractionCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\AttractionCrudController:createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\AttractionCrudController:createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\AttractionCrudController:delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController:deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\AttractionCrudController:detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController:edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController:index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController:new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController:persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\AttractionCrudController:renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\AttractionCrudController:updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.fLx15ph', 'get_ServiceLocator_FLx15phService', true],
            'App\\Controller\\Admin\\ReservationCrudController:autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\ReservationCrudController:configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\ReservationCrudController:configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\ReservationCrudController:configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\ReservationCrudController:configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\ReservationCrudController:createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ReservationCrudController:createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ReservationCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\ReservationCrudController:createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ReservationCrudController:createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\ReservationCrudController:delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ReservationCrudController:detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\ReservationCrudController:renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\ReservationCrudController:updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:configureActions' => ['privates', '.service_locator.9oHZTib', 'get_ServiceLocator_9oHZTibService', true],
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => ['privates', '.service_locator.tcQaCCv', 'get_ServiceLocator_TcQaCCvService', true],
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => ['privates', '.service_locator.qrcjTqq', 'get_ServiceLocator_QrcjTqqService', true],
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => ['privates', '.service_locator.h8Ml21G', 'get_ServiceLocator_H8Ml21GService', true],
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => ['privates', '.service_locator.TpM2PZC', 'get_ServiceLocator_TpM2PZCService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.PFJgvwM', 'get_ServiceLocator_PFJgvwMService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => ['privates', '.service_locator.mjs_CZr', 'get_ServiceLocator_MjsCZrService', true],
            'App\\Controller\\Admin\\UserCrudController:delete' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController:detail' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:edit' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:index' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:new' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => ['privates', '.service_locator.coGsai3', 'get_ServiceLocator_CoGsai3Service', true],
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\AttractionController:delete' => ['privates', '.service_locator.gS8dD9Z', 'get_ServiceLocator_GS8dD9ZService', true],
            'App\\Controller\\AttractionController:edit' => ['privates', '.service_locator.gS8dD9Z', 'get_ServiceLocator_GS8dD9ZService', true],
            'App\\Controller\\AttractionController:index' => ['privates', '.service_locator.QY79_p_', 'get_ServiceLocator_QY79PService', true],
            'App\\Controller\\AttractionController:show' => ['privates', '.service_locator.gS8dD9Z', 'get_ServiceLocator_GS8dD9ZService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.iNa3IJi', 'get_ServiceLocator_INa3IJiService', true],
            'App\\Controller\\ReservationController:delete' => ['privates', '.service_locator.KEWOaUN', 'get_ServiceLocator_KEWOaUNService', true],
            'App\\Controller\\ReservationController:edit' => ['privates', '.service_locator.KEWOaUN', 'get_ServiceLocator_KEWOaUNService', true],
            'App\\Controller\\ReservationController:index' => ['privates', '.service_locator.KI_ScyC', 'get_ServiceLocator_KIScyCService', true],
            'App\\Controller\\ReservationController:show' => ['privates', '.service_locator.KEWOaUN', 'get_ServiceLocator_KEWOaUNService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\Admin\\AttractionCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::delete' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::detail' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::edit' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::index' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::new' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\AttractionCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::delete' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::detail' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::edit' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::index' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::new' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController::delete' => '?',
            'App\\Controller\\Admin\\UserCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::detail' => '?',
            'App\\Controller\\Admin\\UserCrudController::edit' => '?',
            'App\\Controller\\Admin\\UserCrudController::index' => '?',
            'App\\Controller\\Admin\\UserCrudController::new' => '?',
            'App\\Controller\\Admin\\UserCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController::updateEntity' => '?',
            'App\\Controller\\AttractionController::delete' => '?',
            'App\\Controller\\AttractionController::edit' => '?',
            'App\\Controller\\AttractionController::index' => '?',
            'App\\Controller\\AttractionController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ReservationController::delete' => '?',
            'App\\Controller\\ReservationController::edit' => '?',
            'App\\Controller\\ReservationController::index' => '?',
            'App\\Controller\\ReservationController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:delete' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:detail' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:edit' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:index' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:new' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\AttractionCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:delete' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:detail' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:edit' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:index' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:new' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\ReservationCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\UserCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\UserCrudController:delete' => '?',
            'App\\Controller\\Admin\\UserCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:detail' => '?',
            'App\\Controller\\Admin\\UserCrudController:edit' => '?',
            'App\\Controller\\Admin\\UserCrudController:index' => '?',
            'App\\Controller\\Admin\\UserCrudController:new' => '?',
            'App\\Controller\\Admin\\UserCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\UserCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\UserCrudController:updateEntity' => '?',
            'App\\Controller\\AttractionController:delete' => '?',
            'App\\Controller\\AttractionController:edit' => '?',
            'App\\Controller\\AttractionController:index' => '?',
            'App\\Controller\\AttractionController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ReservationController:delete' => '?',
            'App\\Controller\\ReservationController:edit' => '?',
            'App\\Controller\\ReservationController:index' => '?',
            'App\\Controller\\ReservationController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
