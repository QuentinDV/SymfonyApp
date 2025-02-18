<?php

namespace ContainerQlqGfT4;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBatchActionDtoResolverService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'easycorp'.\DIRECTORY_SEPARATOR.'easyadmin-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'BatchActionDtoResolver.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\ArgumentResolver\\BatchActionDtoResolver'] = new \EasyCorp\Bundle\EasyAdminBundle\ArgumentResolver\BatchActionDtoResolver(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? self::getAdminContextProviderService($container)), (isset($container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']) ? $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\AdminUrlGenerator']($container) : self::getAdminUrlGeneratorService($container)));
    }
}
