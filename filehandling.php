<?php

$filename = "sample.txt";

// Write to file
file_put_contents($filename, "Hello, PHP File Handling!");

// Read from file
$content = file_get_contents($filename);
echo $content;

?>