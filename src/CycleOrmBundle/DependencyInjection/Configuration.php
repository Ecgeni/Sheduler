<?php
declare(strict_types=1);

namespace CycleOrmBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('cycle_orm');
        $treeBuilder
            ->getRootNode()
                ->children()
                            ->scalarNode('default')->defaultValue('default')->end()
                            ->arrayNode('databases')
                                ->children()
                                    ->arrayNode('sheduledb')
                                        ->children()
                                           ->scalarNode('connection')->end()
                                        ->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->arrayNode('connections')
                            ->children()
                                ->arrayNode('postgres')
                                    ->children()
                                    ->scalarNode('driver')->end()
                                    ->scalarNode('connection')->end()
                                    ->scalarNode('username')->end()
                                    ->scalarNode('password')->end()
                                    ->end()
                                ->end()
                            ->end()
                        ->end()
        ->end();

        return $treeBuilder;
    }
}