<!DOCTYPE html>
<html>
<?php
include_once('../Templates/defaults/head.php');
global $product;
?>
<body class="bg-gray">
<div class="container">
    <?php
    include_once ('../Templates/defaults/menu.php');
    ?>
    <div class="row">
        <div class="col-8">
            <h1><?php echo $product->name ?></h1>
            <?php echo $product->description ?>
        </div>
        <div class="col-4">
            <img src="<?php echo $product->picture ?>">
        </div>
    </div>
    <?php
    include_once ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>
