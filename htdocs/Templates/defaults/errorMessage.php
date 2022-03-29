<?php
    global $error;
?>
<?php if (isset($error) == true): ?>
<div class="alert alert-danger">
    <strong><?= $error['title'] ?></strong> <?= $error['message'] ?>
</div>
<?php endif; ?>
