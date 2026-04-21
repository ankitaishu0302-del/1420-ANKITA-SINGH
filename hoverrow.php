<?php
echo '
<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}

tr:hover {
    background-color: yellow;
}
</style>
</head>
<body>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
</tr>

<tr>
    <td>1</td>
    <td>John</td>
</tr>

<tr>
    <td>2</td>
    <td>Jane</td>
</tr>

<tr>
    <td>3</td>
    <td>Mike</td>
</tr>

</table>

</body>
</html>
';
?>