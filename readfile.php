<?php

$file = "sample.txt";

if (file_exists($file)) {
    echo readfile($file);
} else {
    echo "File not found.";
}

?>