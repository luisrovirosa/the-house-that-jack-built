<?php

namespace Codium\TheHouseThatJackBuilt;

use Codium\TheHouseThatJackBuilt\Formatter\EchoFormatter;
use Codium\TheHouseThatJackBuilt\Order\Order;

class EchoHouseThatJackBuilt extends TheHouseThatJackBuilt
{
    public function __construct(Order $order = null)
    {
        parent::__construct($order, new EchoFormatter());
    }
}