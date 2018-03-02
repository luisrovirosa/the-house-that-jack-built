<?php

namespace Codium\TheHouseThatJackBuilt;

class EchoHouseThatJackBuilt extends TheHouseThatJackBuilt
{
    public function __construct()
    {
        parent::__construct();
        $this->verses = array_map(function (string $verse){
            return $verse . " ". $verse;
        }, $this->verses);
    }
}