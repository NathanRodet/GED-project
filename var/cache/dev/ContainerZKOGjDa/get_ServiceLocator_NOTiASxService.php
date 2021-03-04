<?php

namespace ContainerZKOGjDa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NOTiASxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nOTiASx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nOTiASx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AuthentificationController::connexion' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AuthentificationController::dashboard' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AuthentificationController::insertUserBdd' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AuthentificationController::listeUser' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\GenreController::deleteGenre' => ['privates', '.service_locator.2asLwmG', 'get_ServiceLocator_2asLwmGService', true],
            'App\\Controller\\GenreController::insertGenreBdd' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\GenreController::listeGenre' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AuthentificationController:connexion' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AuthentificationController:dashboard' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AuthentificationController:insertUserBdd' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\AuthentificationController:listeUser' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\GenreController:deleteGenre' => ['privates', '.service_locator.2asLwmG', 'get_ServiceLocator_2asLwmGService', true],
            'App\\Controller\\GenreController:insertGenreBdd' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'App\\Controller\\GenreController:listeGenre' => ['privates', '.service_locator.oiABibH', 'get_ServiceLocator_OiABibHService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AuthentificationController::connexion' => '?',
            'App\\Controller\\AuthentificationController::dashboard' => '?',
            'App\\Controller\\AuthentificationController::insertUserBdd' => '?',
            'App\\Controller\\AuthentificationController::listeUser' => '?',
            'App\\Controller\\GenreController::deleteGenre' => '?',
            'App\\Controller\\GenreController::insertGenreBdd' => '?',
            'App\\Controller\\GenreController::listeGenre' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AuthentificationController:connexion' => '?',
            'App\\Controller\\AuthentificationController:dashboard' => '?',
            'App\\Controller\\AuthentificationController:insertUserBdd' => '?',
            'App\\Controller\\AuthentificationController:listeUser' => '?',
            'App\\Controller\\GenreController:deleteGenre' => '?',
            'App\\Controller\\GenreController:insertGenreBdd' => '?',
            'App\\Controller\\GenreController:listeGenre' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}