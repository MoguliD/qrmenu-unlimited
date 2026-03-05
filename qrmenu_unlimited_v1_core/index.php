<?php
if(!file_exists(__DIR__.'/includes/config.php')){
header("Location: install/"); exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="assets/css/style.css">
<title>QR Menu Unlimited</title>
</head>
<body>
<div class="main">
<h2>QR Menu Unlimited</h2>
<a href="admin/">Admin panel</a><br>
<a href="menu/?table=1">Жишээ меню</a>
</div>
</body>
</html>
