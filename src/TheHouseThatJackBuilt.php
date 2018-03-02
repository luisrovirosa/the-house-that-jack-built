<?php

namespace Codium\TheHouseThatJackBuilt;

class TheHouseThatJackBuilt
{
    public function song(): array
    {
        $first = "the house that Jack built";
        $second = "the malt that lay in";
        return [
            "This is $first.",
            "This is $second $first.",
            "This is the rat that ate $second $first."
        ];
    }
}