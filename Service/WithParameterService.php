<?php
namespace Iepg\Bundle\Service;

class WithParameterService
{
    private string $str;
    private string $opt;

    public function __construct(string $str, string $opt = null){

        $this->str = $str;
        $this->opt = $opt;
    }

    public function sayHello():string
    {
        return $this->str .' + '. $this->opt;
    }
}