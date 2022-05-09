<?php include __DIR__ . '/menu.php';?>
<div class="container mt">

    <?php foreach($path as $key => $value): ?>
        <h3><a class="mr"  href="<?=$value?>" style="text-decoration:none"> <?=$key?> </a></h3>
    <?php endforeach; ?>

</div>
