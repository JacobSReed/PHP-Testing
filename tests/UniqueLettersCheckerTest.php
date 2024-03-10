<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/UniqueLettersChecker.php';

class UniqueLettersCheckerTest extends TestCase {
    public function testHasUniqueLetters(): void {
        $checker = new UniqueLettersChecker();
        $this->assertTrue($checker->hasUniqueLetters('abcdefg')); // Normal case
        $this->assertFalse($checker->hasUniqueLetters('hello')); // Normal case
        $this->assertTrue($checker->hasUniqueLetters('')); // Empty string
        $this->assertTrue($checker->hasUniqueLetters('a')); // Single character
        $this->assertTrue($checker->hasUniqueLetters('aBcDeFg')); // Uppercase and lowercase mix
        $this->assertFalse($checker->hasUniqueLetters('aaaaaabbbbb')); // Long word with repeated letters
        $this->assertTrue($checker->hasUniqueLetters('abcABC')); // Case-sensitive
    }
}
