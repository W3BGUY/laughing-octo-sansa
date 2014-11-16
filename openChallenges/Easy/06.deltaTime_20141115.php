<?php
/*
  Charles Bastian
  charles@charlesbastian.com
  2014.11.15
  Created for CodeEval.com Easy Challenge 06 - Delta Time
*/
$fileContents=fopen($argv[1],"r");
$returnVal='';
while(!feof($fileContents)){
  $fileLine=explode(" ",trim(fgets($fileContents)));
  if(empty($fileLine)){break;}
  $startTime=new DateTime($fileLine[0]);
  $returnVal.=$startTime->diff((new DateTime($fileLine[1])))->format('%H:%I:%S')."\r\n";
}
fwrite(STDOUT,trim($returnVal));
fclose($fileContents);
exit;
?>