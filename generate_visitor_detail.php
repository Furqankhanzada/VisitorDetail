<?php

//echo $_POST['data'];

$dataArray = json_decode($_POST['data'], true);

$filename = 'visitors-detail.txt';

// store old data
$oldContent = file_get_contents($filename);
// open file for write new data
$visitors_detail = fopen($filename, "w") or die("Unable to open $filename !");
// if file has data
if($oldContent){
// first write old data
fwrite($visitors_detail, $oldContent);
// add line separator
$line = "\n----------------------------------------------------------\n";
fwrite($visitors_detail, $line);
}

foreach($dataArray as $index => $array){
    // insert new data
    fwrite($visitors_detail, "\n". strtoupper($index). ":\n\n");
    echo "\n". strtoupper($index). ":\n\n";

    foreach($array as $key => $item){
        // insert new data
        fwrite($visitors_detail, $key. ' : ' .$item. "\n");

        echo $key. ' : ' .$item. "\n";
    }
}
// close File
fclose($visitors_detail);
