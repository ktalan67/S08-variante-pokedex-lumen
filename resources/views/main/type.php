

<section>

<div class="row container-fluid d-flex justify-content-center">
    <p><?= $typeId->name ?></p>
    <?php foreach ($typeId->getPokemonsByType as $pokemonId):?>

        <div class="card col-3" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text"><?= "#".$pokemonId->numero." ".$pokemonId->nom?></p></a>
            </div><!---->
        </div><!---->

    <?php endforeach;?>
</div>
</section>