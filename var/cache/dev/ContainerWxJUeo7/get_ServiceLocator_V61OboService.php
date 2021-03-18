<?php

namespace ContainerWxJUeo7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V61OboService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.V61_Obo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.V61_Obo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'id' => ['privates', '.errored..service_locator.V61_Obo.App\\Entity\\Document', NULL, 'Cannot autowire service ".service_locator.V61_Obo": it references class "App\\Entity\\Document" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'id' => 'App\\Entity\\Document',
            'manager' => '?',
        ]);
    }
}
