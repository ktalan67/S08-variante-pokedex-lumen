<?php
$pokemonList = $viewVars['pokemonList'];

?>

<section>

    <div class="row container-fluid d-flex justify-content-center">
        <?php foreach ($pokemonList as $pokemon):?>

            <div class="card col-3" style="width: 18rem;">
            <a href="<?=$absoluteURL."/pokemon/".$pokemon->getNumero()?>">
                <img src="<?= $absoluteURL."/img/".$pokemon->getNumero().".png"?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?= "#".$pokemon->getNumero()." ".$pokemon->getNom()?></p></a>
                </div><!---->
            </div><!---->

        <?php endforeach;?>
    </div>
</section>