<?php

class NameToColumn {

    public function GetColumnName($columnNumber) {
        $columnName = '';
        while ($columnNumber > 0) {
            $modulo = ($columnNumber - 1) % 26;
            $columnName = chr(65 + $modulo) . $columnName;
            $columnNumber = (int) (($columnNumber - $modulo) / 26);
        }
        return $columnName;
    }
    public function GetColumnNumber($columnName) {
        $columnNumber = 0 ;
        $columnName = strtolower($columnName);
        $aAsciiValue = ord('a') - 1;
        foreach (str_split($columnName) as $character) {
            $characterNumberValue = ord($character) - $aAsciiValue;
            $columnNumber = $columnNumber * 26 + $characterNumberValue;
        }
        return $columnNumber;
    }
}
?>