<?php

namespace ContainerZKOGjDa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2asLwmGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2asLwmG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2asLwmG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'id' => ['privates', '.errored..service_locator.2asLwmG.App\\Entity\\Genre', NULL, 'Cannot autowire service ".service_locator.2asLwmG": it references class "App\\Entity\\Genre" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'id' => 'App\\Entity\\Genre',
            'manager' => '?',
        ]);
    }
}
