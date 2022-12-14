<?php
namespace Iepg\Bundle\DependencyInjection;

use BadMethodCallException;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;


class TutoToolsExtension extends Extension implements PrependExtensionInterface
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader =new YamlFileLoader($container,new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');

        $config = $this->processConfiguration(new Configuration(), $configs);

        $container->setParameter('iepgdsi.my_var_string', $config['my_var_string']);
        $container->setParameter('iepgdsi.my_array', $config['my_array']);
        $container->setParameter('iepgdsi.my_integer', $config['my_integer']);
        $container->setParameter('iepgdsi.my_var_string_option', $config['my_var_string_option']);
    }  

    public function prepend(ContainerBuilder $container)
    {
        $twigConfig = [];
        $twigConfig['paths'][__DIR__.'/../Resources/views'] = "tuto_tools";
        $twigConfig['paths'][__DIR__.'/../Resources/public'] = "tuto_tools.public";
        $container->prependExtensionConfig('twig', $twigConfig);
    }   
    
    /**
     * @return string
     *
     * @throws BadMethodCallException When the extension name does not follow conventions
     */
    public function getAlias(): string
    {
        return 'iepgdsi';
    }
}