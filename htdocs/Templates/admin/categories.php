<!DOCTYPE html>
<html>
<?php
include_once('../Templates/defaults/head.php');
global $products
?>

<body class="bg-gray">

<div class="container">
    <?php
    include_once('../Templates/defaults/menu.php');
    ?>
    <table class="table table-striped">
        <a href="/admin/add"><button class="btn btn-success">+add product</button></a>
        <thead>
        <tr>
            <td>Name</td>
            <td>Image</td>
            <td>Description</td>
            <td>Category</td>
            <td>Edit</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product->name?></td>
                <td><img src="<?= $product->picture?>" class="product-img img-responsive center-block" alt="product img"></td>
                <td><?= $product->description?></td>
                <td><?php
                    switch ($product->category_id) {
                        case 1:
                            echo "roeitrainer";
                            break;
                        case 2:
                            echo "crosstrainer";
                            break;
                        case 3:
                            echo "hometrainer";
                            break;
                        case 4:
                            echo "loopband";
                            break;
                        default:
                            echo "?";
                            break;
                    }?></td>
                <td><a href="/admin/editProduct/<?= $product->id?>"><button class="btn btn-warning">Edit product</button></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php
    include_once('../Templates/defaults/footer.php');

    ?>
</div>

</body>
</html>

