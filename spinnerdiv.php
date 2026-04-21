<?php
echo '
<!DOCTYPE html>
<html>
<head>
<style>
.spinner {
  width: 40px;
  height: 40px;
  border: 5px solid #ddd;
  border-top: 5px solid green;
  border-radius: 50%;
  animation: spin 1s linear infinite;
  margin: 50px auto;
}

@keyframes spin {
  100% { transform: rotate(360deg); }
}

p {
  text-align: center;
  font-family: Arial;
}
</style>
</head>
<body>

<div class="spinner"></div>
<p>Loading...</p>

</body>
</html>
';
?>