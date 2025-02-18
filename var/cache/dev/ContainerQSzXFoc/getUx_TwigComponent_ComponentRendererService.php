<?php

namespace ContainerQSzXFoc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUx_TwigComponent_ComponentRendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ux.twig_component.component_renderer' shared service.
     *
     * @return \Symfony\UX\TwigComponent\ComponentRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentRendererInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentRenderer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-twig-component'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ComponentStack.php';

        $a = ($container->privates['twig'] ?? $container->load('getTwigService'));

        if (isset($container->privates['ux.twig_component.component_renderer'])) {
            return $container->privates['ux.twig_component.component_renderer'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['ux.twig_component.component_renderer'])) {
            return $container->privates['ux.twig_component.component_renderer'];
        }
        $c = ($container->privates['ux.twig_component.component_factory'] ?? $container->load('getUx_TwigComponent_ComponentFactoryService'));

        if (isset($container->privates['ux.twig_component.component_renderer'])) {
            return $container->privates['ux.twig_component.component_renderer'];
        }

        return $container->privates['ux.twig_component.component_renderer'] = new \Symfony\UX\TwigComponent\ComponentRenderer($a, $b, $c, ($container->privates['ux.twig_component.component_properties'] ?? $container->load('getUx_TwigComponent_ComponentPropertiesService')), new \Symfony\UX\TwigComponent\ComponentStack());
    }
}
