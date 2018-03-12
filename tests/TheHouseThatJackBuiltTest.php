<?php

namespace Tests\Codium\TheHouseThatJackBuilt;

use Codium\TheHouseThatJackBuilt\EchoHouseThatJackBuilt;
use Codium\TheHouseThatJackBuilt\ReverseEchoHouseThatJackBuilt;
use Codium\TheHouseThatJackBuilt\ReverseHouseThatJackBuilt;
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

    /** @test */
    public function songs_the_regular_version_of_the_house_that_jack_built()
    {
        $theHouseThatJackBuilt = $this->theHouseThatJackBuilt();

        $this->assertEquals([
            'This is the house that Jack built.',
            'This is the malt that lay in the house that Jack built.',
            'This is the rat that ate the malt that lay in the house that Jack built.',
            'This is the cat that killed the rat that ate the malt that lay in the house that Jack built.',
            'This is the dog that worried the cat that killed the rat that ate the malt that lay in the house that Jack built.',
        ], $theHouseThatJackBuilt->song());
    }

    /** @test */
    public function songs_the_reverse_house_version_of_the_house_that_jack_built()
    {
        $theHouseThatJackBuilt = $this->reverseHouseThatJackBuilt();

        $this->assertEquals([
            'This is the dog that worried.',
            'This is the cat that killed the dog that worried.',
            'This is the rat that ate the cat that killed the dog that worried.',
            'This is the malt that lay in the rat that ate the cat that killed the dog that worried.',
            'This is the house that Jack built the malt that lay in the rat that ate the cat that killed the dog that worried.'
        ], $theHouseThatJackBuilt->song());
    }

    /** @test */
    public function songs_the_echo_house_version_of_the_house_that_jack_built()
    {
        $theHouseThatJackBuilt = $this->echoHouseThatJackBuilt();

        $this->assertEquals([
            'This is the house that Jack built the house that Jack built.',
            'This is the malt that lay in the malt that lay in the house that Jack built the house that Jack built.',
            'This is the rat that ate the rat that ate the malt that lay in the malt that lay in the house that Jack built the house that Jack built.',
            'This is the cat that killed the cat that killed the rat that ate the rat that ate the malt that lay in the malt that lay in the house that Jack built the house that Jack built.',
            'This is the dog that worried the dog that worried the cat that killed the cat that killed the rat that ate the rat that ate the malt that lay in the malt that lay in the house that Jack built the house that Jack built.',
        ], $theHouseThatJackBuilt->song());
    }


    /** @test */
    public function songs_the_reverse_echo_house_version_of_the_house_that_jack_built()
    {
        $theHouseThatJackBuilt = $this->reverseEchoHouseThatJackBuilt();

        $this->assertEquals([
            'This is the dog that worried the dog that worried.',
            'This is the cat that killed the cat that killed the dog that worried the dog that worried.',
            'This is the rat that ate the rat that ate the cat that killed the cat that killed the dog that worried the dog that worried.',
            'This is the malt that lay in the malt that lay in the rat that ate the rat that ate the cat that killed the cat that killed the dog that worried the dog that worried.',
            'This is the house that Jack built the house that Jack built the malt that lay in the malt that lay in the rat that ate the rat that ate the cat that killed the cat that killed the dog that worried the dog that worried.'
        ], $theHouseThatJackBuilt->song());
    }

    protected function assertVerseNumberEquals(string $expectedVerse, int $numberOfVerse): void
    {
        $sut = $this->theHouseThatJackBuilt();

        $song = $sut->song();

        $this->assertEquals($expectedVerse, $song[$numberOfVerse - 1]);
    }

    protected function theHouseThatJackBuilt(): TheHouseThatJackBuilt
    {
        return new TheHouseThatJackBuilt();
    }

    protected function reverseHouseThatJackBuilt(): TheHouseThatJackBuilt
    {
        return new ReverseHouseThatJackBuilt();
    }

    protected function echoHouseThatJackBuilt(): TheHouseThatJackBuilt
    {
        return new EchoHouseThatJackBuilt();
    }

    protected function reverseEchoHouseThatJackBuilt(): TheHouseThatJackBuilt
    {
        return new ReverseEchoHouseThatJackBuilt();
    }
}