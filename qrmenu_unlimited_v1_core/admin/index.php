<?php
session_start();
if(!isset($_SESSION['admin'])){header("Location:login.php");exit;}
?>
<link rel="stylesheet" href="../assets/css/style.css">
<div class="sidebar">
<h3>QR Menu</h3>
<a href="#">Dashboard</a>
<a href="#">Tables</a>
<a href="#">Categories</a>
<a href="#">Menu</a>
<a href="../menu/?table=1">Public menu</a>
</div>
<div class="main">
<h2>Admin Dashboard</h2>
<div class="card">Систем амжилттай ажиллаж байна.</div>
</div>
