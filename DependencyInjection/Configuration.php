<?php
namespace Iepg\Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class Configuration implements ConfigurationInterface
{
    function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('iepg_test');

        $rootNode = $builder->getRootNode();
        $rootNode->children()
            ->scalarNode('my_var_string')
            ->isRequired()
            ->end()
            ->scalarNode('my_var_string_option')
            ->defaultValue('je suis optionnel')
            ->end()
            ->arrayNode('my_array')
            ->isRequired()
            ->scalarPrototype()
            ->end()
            ->end()
            ->integerNode('my_integer')
            ->isRequired()
            ->defaultValue(2)
            ->min(1)
            ->end()

            ->end();

        return $builder;
    }
}