<?php require(__DIR__ . '/../layout/header.php') ?>
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
<!-- script pour récupérer les selects et pouvoir utiliser le routing (voir view combat.tpl.php)-->


<section>
    <div class="row container-fluid d-flex justify-content-center">
        <?php foreach ($pokemonList as $pokemon):?>

            <div class="card col-3" style="width: 18rem;">

                    <p class="card-text"><?= "#".$pokemon->numero." ".$pokemon->nom?></p></a>
                </div><!---->
            </div><!---->
        <?php endforeach;?>
    </div>
</section>

<?php require(__DIR__ . '/../layout/footer.php') ?>