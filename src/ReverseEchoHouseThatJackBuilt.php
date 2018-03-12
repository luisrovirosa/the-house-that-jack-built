<?php

namespace Codium\TheHouseThatJackBuilt;

use Codium\TheHouseThatJackBuilt\Order\ReverseOrder;

class ReverseEchoHouseThatJackBuilt extends EchoHouseThatJackBuilt
{
    public function __construct()
    {
        parent::__construct();
        $order = new ReverseOrder();
        $this->verses = $order->sort($this->verses);
    }
}