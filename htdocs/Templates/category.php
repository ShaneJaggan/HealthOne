<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
global $products
?>

<body class="bg-gray">
<div class="container">
    <?php
    include_once('defaults/menu.php');
    ?>
    <hr>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>    <hr>
    <div class="row gy-3 ">
        <?php foreach ($products as $product): ?>
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="/product/<?= $product->id ?>">
                            <img class="product-img img-responsive center-block" src="<?= $product->picture ?>" alt="image">
                        </a>
                        <div class="card-title mb-3"><?= $product->name ?></div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>

</body>
</html>

