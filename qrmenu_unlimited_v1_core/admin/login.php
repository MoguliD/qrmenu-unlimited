<?php
session_start();
require_once '../includes/db.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$u=$_POST['u'];$p=md5($_POST['p']);
$q=$pdo->prepare("SELECT * FROM users WHERE username=? AND password=?");
$q->execute([$u,$p]);
if($q->rowCount()){$_SESSION['admin']=1;header("Location:index.php");exit;}
$err="Login алдаа";
}
?>
<link rel="stylesheet" href="../assets/css/style.css">
<div class="main">
<h2>Admin Login</h2>
<form method="post">
<input name="u" placeholder="Username">
<input type="password" name="p" placeholder="Password">
<button>Login</button>
</form>
<?php if(isset($err)) echo $err; ?>
</div>
