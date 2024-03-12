<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/LiteralDateParser.php';

class LiteralDateParserTest extends TestCase {
    public function testLiteralDateParser(): void {
        $checker = new LiteralDateParser();
        $this->assertEquals('2019-10-07',$checker->parseLiteralDate("The first Monday of October 2019"));
        $this->assertEquals('2019-10-15',$checker->parseLiteralDate("The third Tuesday of October 2019"));
        $this->assertEquals('2019-10-30',$checker->parseLiteralDate("The last Wednesday of October 2019"));
    }
}
