<?php

namespace Codium\TheHouseThatJackBuilt\Formatter;

class NormalFormatter implements Formatter
{
    public function format(array $verses): array
    {
        return $verses;
    }
}