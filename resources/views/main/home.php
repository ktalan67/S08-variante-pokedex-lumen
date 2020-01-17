<?php include(__DIR__ . '/../layout/header.php') ?>

<?php
//dump($pokemonList);
?>
<!-- double liste déroulante pour préparer le combat pokémons -->
<div class="FightList-1">
 <form method="post" action="#">
 <select name="Pokemon-1">
    <option selected="selected">Pokemon 1</option>
    <?php foreach ($pokemonList as $pokemonCombat):?>
      <option value="<? $pokemonCombat->id ?>"><?= $pokemonCombat->nom ?></option>
    <?php endforeach;?>
</select>
</form>
<div class="FightList-2">
<form method="post" action="#">
 <select name="Pokemon2">
    <option selected="selected">Pokemon 2</option>
    <?php foreach ($pokemonList as $pokemonCombat):?>
      <option><?= $pokemonCombat->nom ?></option>
    <?php endforeach;?>
    <input type="submit" value="Combattre!"/>
</select>
</form>
</div>

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