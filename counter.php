<?php
$file = "counter.txt";
$handle = fopen($file, "r");
if(!$handle) {
    echo "Could not open the file!";
}
else {
    $counter = (int) fread($handle,20);
    fclose($handle);
    $counter++;
    $handle = fopen($file, "w");
    fwrite($handle, $counter);
    fclose($handle);
    echo "You are visitor number " . $counter . ".";
}
?>
