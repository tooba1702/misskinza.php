<?php
//str length
$data = "Hello this is Ali";
echo strlen($data);

echo "<br>";
// word count
echo str_word_count($data);
echo "<br>";


//explode
$data  = explode(" ",$data);
print_r($data);

echo "<br>";

//to find file extension
$file = "index.php";
$file = explode(".",$file);
echo $file[count($file)-1];

echo "<br>";

//implode

$data2 = ["this", "is","ali","here"];
echo implode(" ",  $data2);

echo "<br>";

// //reverse
// $record="hello world"
// echo strrev($record);
// echo ucwords($record);
echo strrev($data);
?>