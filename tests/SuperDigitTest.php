<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/SuperDigit.php';

class SuperDigitTest extends TestCase {
    public function testSuperDigit(): void {
        $checker = new SuperDigit();

        // Test single-digit positive integer
        $this->assertEquals(5, $checker->calculateSuperDigit(5));

        // Test multi-digit positive integer
        $this->assertEquals(6, $checker->calculateSuperDigit(12345));

        // Test zero
        $this->assertEquals(0, $checker->calculateSuperDigit(0));

        // Test large positive integer
        $this->assertEquals(9, $checker->calculateSuperDigit(999999999999999));
    }
}
?>
