<?php
if(file_exists('../includes/config.php')){ echo "Already installed"; exit;}
if($_SERVER['REQUEST_METHOD']=='POST'){
$host=$_POST['host'];$db=$_POST['db'];$user=$_POST['user'];$pass=$_POST['pass'];
file_put_contents('../includes/config.php',"<?php
define('DB_HOST','$host');
define('DB_NAME','$db');
define('DB_USER','$user');
define('DB_PASS','$pass');
?>");
$pdo=new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4",$user,$pass);
$sql=file_get_contents('schema.sql');
$pdo->exec($sql);
echo "Install success <a href='../admin/'>Admin</a>"; exit;
}
?>
<h2>Install QR Menu</h2>
<form method="post">
DB Host <input name="host" value="localhost">
DB Name <input name="db">
DB User <input name="user" value="root">
DB Pass <input name="pass">
<button>Install</button>
</form>
