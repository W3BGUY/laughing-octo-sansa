<?php
/*
  Charles Bastian
  charles@charlesbastian.com
  2014.11.15
  Created for CodeEval.com challenge 04 - Reverse Words
*/
$fileContents=fopen($argv[1],"r");
$returnVal='';
while(!feof($fileContents)){
  $returnVal.=$fileLineArray=implode(" ",array_reverse(array_map('trim',explode(" ",fgets($fileContents)))))."\r\n";
}
fwrite(STDOUT,trim($returnVal));
fclose($fileContents);
exit;
?>