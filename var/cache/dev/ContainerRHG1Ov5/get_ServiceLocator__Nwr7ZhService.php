<?php

namespace ContainerRHG1Ov5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__Nwr7ZhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..Nwr7Zh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..Nwr7Zh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::delete' => ['privates', '.service_locator.nU8rkKw', 'get_ServiceLocator_NU8rkKwService', true],
            'App\\Controller\\AdminController::edit' => ['privates', '.service_locator.nU8rkKw', 'get_ServiceLocator_NU8rkKwService', true],
            'App\\Controller\\AdminController::index' => ['privates', '.service_locator.6TL8PjF', 'get_ServiceLocator_6TL8PjFService', true],
            'App\\Controller\\AdminController::new' => ['privates', '.service_locator.6TL8PjF', 'get_ServiceLocator_6TL8PjFService', true],
            'App\\Controller\\FactureController::index' => ['privates', '.service_locator.uz4yI_q', 'get_ServiceLocator_Uz4yIQService', true],
            'App\\Controller\\FactureController::show' => ['privates', '.service_locator.XVjfyza', 'get_ServiceLocator_XVjfyzaService', true],
            'App\\Controller\\HomeController::bienById' => ['privates', '.service_locator.yVIVVW.', 'get_ServiceLocator_YVIVVW_Service', true],
            'App\\Controller\\HomeController::generatePdf' => ['privates', '.service_locator.HBFpwsR', 'get_ServiceLocator_HBFpwsRService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.6TL8PjF', 'get_ServiceLocator_6TL8PjFService', true],
            'App\\Controller\\HomeController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\ReservationController::delete' => ['privates', '.service_locator.CT.Cplt', 'get_ServiceLocator_CT_CpltService', true],
            'App\\Controller\\ReservationController::edit' => ['privates', '.service_locator.CT.Cplt', 'get_ServiceLocator_CT_CpltService', true],
            'App\\Controller\\ReservationController::index' => ['privates', '.service_locator.VddRp04', 'get_ServiceLocator_VddRp04Service', true],
            'App\\Controller\\ReservationController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReservationController::show' => ['privates', '.service_locator.jtI7Unb', 'get_ServiceLocator_JtI7UnbService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AdminController:delete' => ['privates', '.service_locator.nU8rkKw', 'get_ServiceLocator_NU8rkKwService', true],
            'App\\Controller\\AdminController:edit' => ['privates', '.service_locator.nU8rkKw', 'get_ServiceLocator_NU8rkKwService', true],
            'App\\Controller\\AdminController:index' => ['privates', '.service_locator.6TL8PjF', 'get_ServiceLocator_6TL8PjFService', true],
            'App\\Controller\\AdminController:new' => ['privates', '.service_locator.6TL8PjF', 'get_ServiceLocator_6TL8PjFService', true],
            'App\\Controller\\FactureController:index' => ['privates', '.service_locator.uz4yI_q', 'get_ServiceLocator_Uz4yIQService', true],
            'App\\Controller\\FactureController:show' => ['privates', '.service_locator.XVjfyza', 'get_ServiceLocator_XVjfyzaService', true],
            'App\\Controller\\HomeController:bienById' => ['privates', '.service_locator.yVIVVW.', 'get_ServiceLocator_YVIVVW_Service', true],
            'App\\Controller\\HomeController:generatePdf' => ['privates', '.service_locator.HBFpwsR', 'get_ServiceLocator_HBFpwsRService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.6TL8PjF', 'get_ServiceLocator_6TL8PjFService', true],
            'App\\Controller\\HomeController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\ReservationController:delete' => ['privates', '.service_locator.CT.Cplt', 'get_ServiceLocator_CT_CpltService', true],
            'App\\Controller\\ReservationController:edit' => ['privates', '.service_locator.CT.Cplt', 'get_ServiceLocator_CT_CpltService', true],
            'App\\Controller\\ReservationController:index' => ['privates', '.service_locator.VddRp04', 'get_ServiceLocator_VddRp04Service', true],
            'App\\Controller\\ReservationController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ReservationController:show' => ['privates', '.service_locator.jtI7Unb', 'get_ServiceLocator_JtI7UnbService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AdminController::delete' => '?',
            'App\\Controller\\AdminController::edit' => '?',
            'App\\Controller\\AdminController::index' => '?',
            'App\\Controller\\AdminController::new' => '?',
            'App\\Controller\\FactureController::index' => '?',
            'App\\Controller\\FactureController::show' => '?',
            'App\\Controller\\HomeController::bienById' => '?',
            'App\\Controller\\HomeController::generatePdf' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::new' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ReservationController::delete' => '?',
            'App\\Controller\\ReservationController::edit' => '?',
            'App\\Controller\\ReservationController::index' => '?',
            'App\\Controller\\ReservationController::new' => '?',
            'App\\Controller\\ReservationController::show' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:delete' => '?',
            'App\\Controller\\AdminController:edit' => '?',
            'App\\Controller\\AdminController:index' => '?',
            'App\\Controller\\AdminController:new' => '?',
            'App\\Controller\\FactureController:index' => '?',
            'App\\Controller\\FactureController:show' => '?',
            'App\\Controller\\HomeController:bienById' => '?',
            'App\\Controller\\HomeController:generatePdf' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\HomeController:new' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ReservationController:delete' => '?',
            'App\\Controller\\ReservationController:edit' => '?',
            'App\\Controller\\ReservationController:index' => '?',
            'App\\Controller\\ReservationController:new' => '?',
            'App\\Controller\\ReservationController:show' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
