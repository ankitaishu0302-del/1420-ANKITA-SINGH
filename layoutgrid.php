<?php
echo '
<!DOCTYPE html>
<html>
<head>
<style>
.container {
    display: grid;
    grid-template-columns: auto auto auto;
    gap: 10px;
    padding: 10px;
}

.box {
    background: lightgreen;
    padding: 20px;
    text-align: center;
    font-size: 20px;
}
</style>
</head>
<body>

<div class="container">
    <div class="box">1</div>
    <div class="box">2</div>
    <div class="box">3</div>
    <div class="box">4</div>
    <div class="box">5</div>
    <div class="box">6</div>
</div>

</body>
</html>
';
?>