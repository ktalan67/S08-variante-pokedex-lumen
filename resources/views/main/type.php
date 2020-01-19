<?php include(__DIR__ . '/../layouts/header.php') ?>

<section>
<div class="row container-fluid d-flex justify-content-center">
    <?php foreach($type->pokemons as $types):?>
    <div class="card col-3" style="width: 18rem;">
    <a href="<?=url('pokemon/'.$types->numero)?>">
    <img src="<?= url('img/'.$types->numero.'.png')?>" class="card-img-top" alt="...">
    
    <p class="card-text"><?= "#".$types->numero." ".$types->nom ?></p></a>
    </div>
    <?php endforeach; ?>
</div>
</section>

<?php include(__DIR__ . '/../layouts/footer.php') ?>