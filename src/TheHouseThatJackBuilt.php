<?php

namespace Codium\TheHouseThatJackBuilt;

use Codium\TheHouseThatJackBuilt\Formatter\Formatter;
use Codium\TheHouseThatJackBuilt\Order\Order;

class TheHouseThatJackBuilt
{
    private const VERSES = [
        "the house that Jack built",
        "the malt that lay in",
        "the rat that ate",
        "the cat that killed",
        "the dog that worried"
    ];
    /** @var string[] */
    protected $verses;

    public function __construct(Order $order, Formatter $formatter)
    {
        $this->verses = $formatter->format(
            $order->sort(self::VERSES)
        );
    }

    public function song(): array
    {
        $fullSentence = [];

        for ($i = 0; $i < count($this->verses); $i++) {
            $fullSentence[] = $this->verse($i);
        }

        return $fullSentence;
    }

    protected function verse(int $numberOfVerse): string
    {
        $verse = '';
        for ($i = 0; $i <= $numberOfVerse; $i++) {
            $verse = " " . $this->verses[$i] . $verse;
        }
        return "This is{$verse}.";
    }
}