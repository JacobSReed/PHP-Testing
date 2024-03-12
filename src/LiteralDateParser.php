<?php
class LiteralDateParser {

    public function parseLiteralDate(string $literalDate): string {
        $literalDate = strtolower($literalDate);
        preg_match("/(first|second|third|fourth|fifth|last) (\w+) of (\w+) (\d{4})/",$literalDate,$matches);
        
        //$parsedDate = $matches[1].$matches[2].$matches[3].$matches[4];
        $parsedDate = date("Y-M-D",strtotime($literalDate));

        return $parsedDate;
    }
}
?>