<?php

namespace Codium\TheHouseThatJackBuilt\Order;

class ReverseOrder
{
    public function sort(array $verses): array
    {
        return array_reverse($verses);
    }
}