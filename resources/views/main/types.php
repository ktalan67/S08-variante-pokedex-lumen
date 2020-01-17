
<p>Cliquez sur un type pour voir tous les pokemon de ce type</p>
<div class="listType">
<?php foreach ($typeList as $type):?>
<div class="titreType" style="background-color: #<?= $type->color?>"><a href="        <?=url('/type/'.$type->id )?>        " class="link"><?=$type->name?></a></div>
<?php endforeach?>
</div>

<div><?php dump($type->color) ?></div>

