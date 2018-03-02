<?php

namespace Tests\Codium\TheHouseThatJackBuilt;

use Codium\TheHouseThatJackBuilt\TheHouseThatJackBuilt;
use PHPUnit\Framework\TestCase;

class TheHouseThatJackBuiltTest extends TestCase
{
    /** @test */
    public function the_fist_verse_is_ok()
    {
        $sut = new TheHouseThatJackBuilt();

        $song = $sut->song();

        $this->assertEquals("This is the house that Jack built.", $song[0]);
    }
}