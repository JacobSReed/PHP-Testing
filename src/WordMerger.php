<?php
class WordMerger {

    public function mergeWords(string $word1, string $word2): string {
        $mergedWord = "";
        $i = 0;

        // add matching char pairs
        while ($i < min(strlen($word1), strlen($word2))) {
            $mergedWord .= $word1[$i] . $word2[$i];
            $i++;
        }

        // return early if all letters are used
        if ($i == strlen($word1) && $i == strlen($word2)) {
            return $mergedWord;
        }

        // add excess letters to the end if one is longer than the other
        if ($i == strlen($word1)) {
            $mergedWord .= substr($word2, $i);
        } else if ($i == strlen($word2)) {
            $mergedWord .= substr($word1, $i);
        }
        return $mergedWord;
    }
}
?>
