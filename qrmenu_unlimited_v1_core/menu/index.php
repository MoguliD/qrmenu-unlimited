<?php
require_once '../includes/db.php';
$table=$_GET['table']??1;
$cats=$pdo->query("SELECT * FROM categories")->fetchAll();
?>
<link rel="stylesheet" href="../assets/css/style.css">
<div class="main">
<h2>Table <?php echo $table;?></h2>
<?php foreach($cats as $c){ ?>
<h3><?php echo $c['name']; ?></h3>
<?php
$foods=$pdo->prepare("SELECT * FROM foods WHERE category_id=?");
$foods->execute([$c['id']]);
foreach($foods as $f){
?>
<div class="card">
<b><?php echo $f['name']; ?></b> — <?php echo $f['price'];?>₮
<button>Захиалах</button>
</div>
<?php }} ?>
</div>
