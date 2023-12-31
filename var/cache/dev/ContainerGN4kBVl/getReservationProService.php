<?php

namespace ContainerGN4kBVl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReservationProService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ReservationPro' shared autowired service.
     *
     * @return \App\Form\ReservationPro
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ReservationPro.php';

        return $container->privates['App\\Form\\ReservationPro'] = new \App\Form\ReservationPro(($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')));
    }
}
