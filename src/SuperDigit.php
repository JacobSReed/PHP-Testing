<?php
class SuperDigit {
    public function calculateSuperDigit(int $superDigit): int {

        while(true){
            if(strlen((string)$superDigit)==1){
                return $superDigit;
            }
            $superDigit = array_sum(str_split((string)$superDigit));
        }
    }
}
?>