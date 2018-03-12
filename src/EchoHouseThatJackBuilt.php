<?php

namespace Codium\TheHouseThatJackBuilt;

use Codium\TheHouseThatJackBuilt\Order\Order;

class EchoHouseThatJackBuilt extends TheHouseThatJackBuilt
{
    public function __construct(Order $order = null)
    {
        parent::__construct($order);
        $this->verses = array_map(function (string $verse){
            return $verse . " ". $verse;
        }, $this->verses);
    }
}