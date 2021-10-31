<?php 
require 'inc/head.php';
require 'inc/data/products.php';

session_start();

if(empty($_SESSION['loginname'])) 
{
  header('Location: login.php');
  exit();
}
$cookies = array_count_values($_SESSION['add_to_cart']);
?>

<section class="cookies container-fluid">
    <div class="row">
        <ul>

        <?php foreach($cookies as $cookie => $value): ?>
            <li><?= $catalog[$cookie]['name']?> : <?= $value ?></li>
        <?php endforeach; ?> 

        </ul>
   </div>
</section>
<?php require 'inc/foot.php'; ?>
