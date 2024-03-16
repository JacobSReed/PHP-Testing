<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/WordMerger.php';

class WordMergerTest extends TestCase {
    public function testMergeWords(): void {
        $checker = new WordMerger();
        
        // Test merging two equal length words
        $this->assertEquals('adbecf', $checker->mergeWords('abc', 'def'));

        // Test merging two different length words where the first word is longer
        $this->assertEquals('aebcd', $checker->mergeWords('abcd', 'e'));

        // Test merging two different length words where the second word is longer
        $this->assertEquals('adbefg', $checker->mergeWords('ab', 'defg'));

        // Test merging two empty strings
        $this->assertEquals('', $checker->mergeWords('', ''));

        // Test merging an empty string with a non-empty string
        $this->assertEquals('hello', $checker->mergeWords('', 'hello'));

        // Test merging a non-empty string with an empty string
        $this->assertEquals('hello', $checker->mergeWords('hello', ''));

        // Test merging two long words
        $this->assertEquals('AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz1234567890', 
            $checker->mergeWords('ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz1234567890'));

        // Test merging two long words with one being a repetition of characters
        $this->assertEquals('aabbccdd', $checker->mergeWords('abcd', 'abcd'));
    }
}
?>
