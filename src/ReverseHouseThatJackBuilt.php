<?php

namespace Codium\TheHouseThatJackBuilt;

class ReverseHouseThatJackBuilt extends TheHouseThatJackBuilt
{
    public function __construct()
    {
        parent::__construct();
        $this->verses = array_reverse($this->verses);
    }
}