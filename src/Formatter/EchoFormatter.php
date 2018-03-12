<?php

namespace Codium\TheHouseThatJackBuilt\Formatter;

class EchoFormatter implements Formatter
{
    public function format(array $verses): array
    {
        return array_map(function (string $verse) {
            return $verse . " " . $verse;
        }, $verses);
    }
}