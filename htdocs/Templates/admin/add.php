<!DOCTYPE html>
<html>
<?php
include_once('../Templates/defaults/head.php');
?>
<body class="bg-gray">
<div class="container">
    <?php
    include_once ('../Templates/defaults/menu.php');
    ?>
    <form method="post">
            <label>name</label><br>
            <input type="text" name="name"><br>
            <label>Category</label><br>
            <select name="category">
                <option value="1">Roeitrainer</option>
                <option value="2">Crosstrainer</option>
                <option value="3">Hometrainer</option>
                <option value="4">Loopband</option>
            </select><br>
            <label>Description</label><br>
        <textarea name="description"cols="30" rows="10"></textarea><br>
            <button type="submit" name="add" class="btn btn-primary">Add</button>
    </form>
    <?php
    include_once ('../Templates/defaults/footer.php');
    ?>
</div>
</body>
</html>