<?php include(__DIR__ . '/../layouts/header.php') ?>
<p>Cliquez sur un type pour voir tous les pokemon de ce type</p>
<div class="listType">
<?php foreach ($typeList as $type):?>
<div class="titreType" style="background-color: #<?= $type->color?>"><a href="<?= route("type", ['id' => $type->id])?>" class="link"><?=$type->name?></a></div>
<?php endforeach?>
</div>

<?php include(__DIR__ . '/../layouts/footer.php') ?>