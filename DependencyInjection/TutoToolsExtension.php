<?php
namespace Iepg\Bundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;


class TutoToolsExtension extends Extension implements PrependExtensionInterface
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $loader =new YamlFileLoader($container,new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');

        $config = $this->processConfiguration(new Configuration(), $configs);

        $container->setParameter('tuto_tools.my_var_string', $config['my_var_string']);
        $container->setParameter('tuto_tools.my_array', $config['my_array']);
        $container->setParameter('tuto_tools.my_integer', $config['my_integer']);
        $container->setParameter('tuto_tools.my_var_string_option', $config['my_var_string_option']);
    }  

    public function prepend(ContainerBuilder $container)
    {
        $twigConfig = [];
        $twigConfig['paths'][__DIR__.'/../Resources/views'] = "tuto_tools";
        $twigConfig['paths'][__DIR__.'/../Resources/public'] = "tuto_tools.public";
        $container->prependExtensionConfig('twig', $twigConfig);
    }   
    
    public function getAlias()
    {
        return 'iepgdsi';
    }
}