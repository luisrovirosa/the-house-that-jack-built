<?php

namespace Codium\TheHouseThatJackBuilt\Order;

class ReverseOrder implements Order
{
    public function sort(array $verses): array
    {
        return array_reverse($verses);
    }
}