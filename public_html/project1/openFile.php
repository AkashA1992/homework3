<?php
echo "The file has been uploaded.";
$linecount = 0;
$myfile = fopen($_GET['filename'], "r") or die("Unable to open file!");

$html='';
$html='<table border="1">';

while(!feof($myfile)){
  $html.='<tr>';
  $line = fgets($myfile);
  $string_length=strlen($line);
  //print_r($line);
  $array1= explode ( ',', $line);
  foreach($array1 as $value)
  {  
  //echo "$value <br>";
  if($linecount==0)
  $html.='<th>'.$value.'</th>';
  else
  $html.='<td>'.$value.'</td>';
  //print_r($html);
  } 
    $linecount++;
    $html.='</tr>';
  }
//print_r($html);
$html.='</table>';
print_r($html);
fclose($myfile);
//print_r(str_split ( $line, ));

?>