<?php

namespace Codium\TheHouseThatJackBuilt;

class TheHouseThatJackBuilt
{
    public function song(): array
    {
        $verses = [
            "the house that Jack built",
            "the malt that lay in",
            "the rat that ate"
        ];

        $fullSentence = [];

        for ($j = 0; $j < 1; $j++){
            $fullSentence[0] = " " . $verses[$j];
        }

        return [
            "This is{$fullSentence[0]}.",
            "This is {$verses[1]} {$verses[0]}.",
            "This is {$verses[2]} {$verses[1]} {$verses[0]}."
        ];
    }
}