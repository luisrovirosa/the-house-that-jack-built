<?php

namespace Codium\TheHouseThatJackBuilt;

class TheHouseThatJackBuilt
{
    public function song(): array
    {
        $first = "the house that Jack built";
        return [
            "This is $first.",
            "This is the malt that lay in $first.",
            "This is the rat that ate the malt that lay in $first."
        ];
    }
}