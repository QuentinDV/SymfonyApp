<?php

namespace ContainerJuE3kxe;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeezerServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\DeezerService' shared autowired service.
     *
     * @return \App\Service\DeezerService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'DeezerService.php';

        return $container->privates['App\\Service\\DeezerService'] = new \App\Service\DeezerService(($container->privates['http_client.uri_template'] ?? $container->load('getHttpClient_UriTemplateService')));
    }
}
