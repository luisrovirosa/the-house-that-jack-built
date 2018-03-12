<?php

namespace Codium\TheHouseThatJackBuilt;

use Codium\TheHouseThatJackBuilt\Formatter\EchoFormatter;
use Codium\TheHouseThatJackBuilt\Formatter\NormalFormatter;
use Codium\TheHouseThatJackBuilt\Order\NormalOrder;
use Codium\TheHouseThatJackBuilt\Order\ReverseOrder;

class HouseFactory
{
    public function normalHouse(): TheHouseThatJackBuilt
    {
        return new TheHouseThatJackBuilt(new NormalOrder(), new NormalFormatter());
    }

    public function reverseHouse(): TheHouseThatJackBuilt
    {
        return new TheHouseThatJackBuilt(new ReverseOrder(), new NormalFormatter());
    }

    public function echoHouse(): TheHouseThatJackBuilt
    {
        return new TheHouseThatJackBuilt(new NormalOrder(), new EchoFormatter());
    }

    public function reverseEchoHouse(): TheHouseThatJackBuilt
    {
        return new TheHouseThatJackBuilt(new ReverseOrder(), new EchoFormatter());
    }
}