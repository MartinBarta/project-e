<?php

namespace Container6gIwRuB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomepageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HomepageController' shared autowired service.
     *
     * @return \App\Controller\HomepageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BaseController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HomepageController.php';

        $container->services['App\\Controller\\HomepageController'] = $instance = new \App\Controller\HomepageController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\HomepageController', $container));

        return $instance;
    }
}
