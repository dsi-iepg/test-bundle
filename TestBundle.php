<?php

namespace Iepg\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Iepg\Bundle\DependencyInjection\TutoToolsExtension;

class TestBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new TutoToolsExtension();
        }
        return $this->extension;
    }
    
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $ext = new TutoToolsExtension([], $container);
    }
}
