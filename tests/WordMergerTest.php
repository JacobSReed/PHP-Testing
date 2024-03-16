<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/WordMerger.php';

class WordMergerTest extends TestCase {
    public function testMergeWords(): void {
        $checker = new WordMerger();
        $this->assertEquals('adbecf',$checker->mergeWords('abc','def'));
    }
}
