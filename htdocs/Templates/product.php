<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
global $product;
global $review;
?>

<body class="bg-gray">

<div class="container">
    <?php
    include_once('defaults/menu.php');
    ?>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            <li class="breadcrumb-item"><a href="/category/<?= $product->category_id ?>">Category</a></li>
        </ol>
    </nav>    <hr>
    <div class="row">
        <div class="col-8">
            <h1><?php echo $product->name ?></h1>
            <?php echo $product->description ?>
        </div>
        <div class="col-4">
            <img src="<?php echo $product->picture ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <h3>Reviews</h3>
            <?php foreach ($review as $reviews): ?>
                    <div class="card">
                        <div class="card-body text-center">
                            <p><?php echo $reviews['description'] ?> <br>
                                <?php echo $reviews['username'] ?>
                            </p>
                            <div class="card-title mb-3"><?php echo $reviews['rating'] ?>/5</div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
        <div class="col-8">
            <h3>Do you want to leave a review?</h3>
                <form method="post">
                    <div class="mb-3">
                        <label>Review</label><br>
                        <input type="text" name="description"><br>
                        <label for="example2" class="form-label">Rating out of 5</label><br>
                        <select name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>
                        <label>Name</label><br>
                        <input type="text" name="username"><br>
                        <button type="submit" name="review" class="btn btn-primary">Post</button>
                    </div>
                </form>
        </div>
    </div>
    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>