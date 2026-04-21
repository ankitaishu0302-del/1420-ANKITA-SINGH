<?php

$file = "sample.txt";

if (file_exists($file)) {
    echo "File size: " . filesize($file) . " bytes";
} else {
    echo "File not found.";
}

?>