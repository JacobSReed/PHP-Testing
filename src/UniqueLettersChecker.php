<?php
class UniqueLettersChecker {

    public function hasUniqueLetters(string $word): bool {
        $letters = str_split($word);
        $uniqueLetters = array_unique($letters);

        if(count($letters) === count($uniqueLetters)) return true;
        return false;
    }
}
?>