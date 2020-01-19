

<section>

    <div class="row container-fluid d-flex justify-content-center">
        <?php foreach ($typeId->pokemons as $getPokemons):?>

            <div class="card col-3" style="width: 18rem;">
            <a href="<?= url()."/pokemon/)".$getPokemon->numero?>">
                <img src="<?= url()."/img/".$getPokemon->numero.".png"?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?= "#".$getPokemon->numero." ".$getPokemon->nom?></p></a>
                </div><!---->
            </div><!---->

        <?php endforeach;?>
    </div>
</section>