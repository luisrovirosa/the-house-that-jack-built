<?php

namespace Codium\TheHouseThatJackBuilt;

use Codium\TheHouseThatJackBuilt\Order\ReverseOrder;

class ReverseHouseThatJackBuilt extends TheHouseThatJackBuilt
{
    public function __construct()
    {
        parent::__construct(new ReverseOrder());
    }
}