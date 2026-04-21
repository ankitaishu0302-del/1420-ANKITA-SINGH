<?php

$filename = "example.txt";
$content = "Hello, this file was created using PHP!";

// Create and write to file
$file = fopen($filename, "w");

if ($file) {
    fwrite($file, $content);
    fclose($file);
    echo "File created successfully.";
} else {
    echo "Error creating file.";
}

?>
