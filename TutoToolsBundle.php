<?php

namespace Tuto\ToolsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Tuto\ToolsBundle\DependencyInjection\TutoToolsExtension;

class TutoToolsBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $ext = new TutoToolsExtension([], $container);
    }
}
