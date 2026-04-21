<?php
echo '
<!DOCTYPE html>
<html>
<head>
<style>
.loader {
  border: 6px solid #f3f3f3;
  border-top: 6px solid blue;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 1s linear infinite;
  margin: 50px auto;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.text {
  text-align: center;
  font-family: Arial;
}
</style>
</head>
<body>

<div class="loader"></div>
<div class="text">Loading...</div>

</body>
</html>
';
?>