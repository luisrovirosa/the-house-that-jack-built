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

        for ($i = 0; $i < count($verses); $i++) {
            $fullSentence[$i] = '';
            for ($j = 0; $j <= $i; $j++) {
                $fullSentence[$i] = " " . $verses[$j]  . $fullSentence[$i];
            }
            $fullSentence[$i] = "This is{$fullSentence[$i]}.";
        }

        return $fullSentence;
    }
}