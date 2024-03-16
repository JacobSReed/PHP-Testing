<?php
class LiteralDateParser {
    public function parseLiteralDate(string $literalDate): string {

        $months=
        [
            "january"=>1,
            "february"=>2,
            "march"=>3,
            "april"=>4,
            "may"=>5,
            "june"=>6,
            "july"=>7,
            "august"=>8,
            "september"=>9,
            "october"=>10,
            "november"=>11,
            "december"=>12
        ];
        
        //The first Monday of October 2019
        $literalDate = strtolower($literalDate);
        preg_match("/(first|second|third|fourth|fifth|last) (\w+) of (\w+) (\d{4})/",$literalDate,$matches);
        $parsedDate = $matches[4]."-".$months[$matches[3]];
        return $parsedDate;
    }
}
?>