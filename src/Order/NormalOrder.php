<?php

namespace Codium\TheHouseThatJackBuilt\Order;

class NormalOrder implements Order
{
    public function sort(array $verses): array
    {
        return $verses;
    }
}