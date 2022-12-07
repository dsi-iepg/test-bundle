<?php

namespace Iepg\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Iepg\Bundle\DependencyInjection\TutoToolsExtension;

class TestBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $ext = new TutoToolsExtension([], $container);
    }
}
