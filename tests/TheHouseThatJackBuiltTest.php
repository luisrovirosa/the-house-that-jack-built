<?php

namespace Tests\Codium\TheHouseThatJackBuilt;

use Codium\TheHouseThatJackBuilt\TheHouseThatJackBuilt;
use PHPUnit\Framework\TestCase;

class TheHouseThatJackBuiltTest extends TestCase
{
    /** @test */
    public function verses_are_ok()
    {
        $this->assertVerseNumberEquals("This is the house that Jack built.", 1);
        $this->assertVerseNumberEquals("This is the malt that lay in the house that Jack built.", 2);
        $this->assertVerseNumberEquals("This is the rat that ate the malt that lay in the house that Jack built.", 3);
    }

    protected function assertVerseNumberEquals(string $expectedVerse, int $numberOfVerse): void
    {
        $sut = new TheHouseThatJackBuilt();

        $song = $sut->song();

        $this->assertEquals($expectedVerse, $song[$numberOfVerse - 1]);
    }
}