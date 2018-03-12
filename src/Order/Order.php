<?php

namespace Codium\TheHouseThatJackBuilt\Order;

interface Order
{
    public function sort(array $verses): array;
}