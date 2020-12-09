<?php

namespace ContainerKIMF8Pn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_InZqgafService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.InZqgaf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.InZqgaf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'generator' => ['privates', 'App\\GreetingGenerator', 'getGreetingGeneratorService', true],
            'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', true],
        ], [
            'generator' => 'App\\GreetingGenerator',
            'logger' => '?',
        ]);
    }
}
