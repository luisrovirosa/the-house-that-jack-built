<?php

namespace Codium\TheHouseThatJackBuilt;

class ReverseEchoHouseThatJackBuilt extends EchoHouseThatJackBuilt
{
    public function __construct()
    {
        parent::__construct();
        $this->verses = array_reverse($this->verses);
    }
}