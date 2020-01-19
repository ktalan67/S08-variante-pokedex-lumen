<?php include(__DIR__ . '/../layout/header.php') ?>

<?php
//dump($pokemonList);
?>
<section>
    <div class="row container-fluid d-flex justify-content-center">
        <?php foreach ($pokemonList as $pokemon):?>

            <div class="card col-3" style="width: 18rem;">
            <a href="<?=url('pokemon/'.$pokemon->numero)?>">
                <img src="<?= url('img/'.$pokemon->numero.'.png')?>" class="card-img-top" alt="...">
                    <p class="card-text"><?= "#".$pokemon->numero." ".$pokemon->nom ?></p></a>
                </div>
        <?php endforeach;?>
    </div>
</section>

<?php include(__DIR__ . '/../layout/footer.php') ?>