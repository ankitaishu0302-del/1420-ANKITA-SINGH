<?php
$total_pages = 10; // total pages
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $current_page) {
        echo "<strong>$i</strong> ";
    } else {
        echo "<a href='?page=$i'>$i</a> ";
    }
}
?>