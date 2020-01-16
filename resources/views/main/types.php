
<?php require(__DIR__ . '/../layout/header.php') ?>
<p>Cliquez sur un type pour voir tous les pokemon de ce type</p>
<div class="listType">
<?php foreach ($typeList as $type):?>
<div class="titreType" style="background-color: #<?= $type->color?>;"> <p><?php echo ($type->name) ?></p></div>
<?php endforeach?>
</div>

<?php require(__DIR__ . '/../layout/footer.php') ?>