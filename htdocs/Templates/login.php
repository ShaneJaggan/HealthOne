<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body class="bg-gray">

<div class="container">
    <?php
    include_once('defaults/menu.php');
    ?>
    <?php if (isset($_SESSION['login']) == true): ?>
        <form method="post">
            <div class="mb-3">
                <label for="example2" class="form-label">Are you sure you want to logout?</label><br>
                <button type="submit" name="logout" class="btn btn-primary">Logout</button>
            </div>
        </form>
    <?php else: ?>
        <form method="post">
            <div class="mb-3">
                <label for="example1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="example2" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </form>
    <?php endif; ?>
    <?php
    include_once('defaults/errorMessage.php');
    ?>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>
