<main>
<?php dump($pokemon)   ?>  
<h1 class="titreDetail">Détail de <?=$pokemonList[0]->name?></h1>
    <div class="row">
        <div class="fiche col-10">
            <div class="img">
                <img src="<?= url('img/'.$pokemonList[0]->numero.'.png')?>" alt="" class="imgpokemon">
            </div>

            <div class="txtFiche">
                <h3>#<?=$pokemonList[0]->numero.' '.$pokemonList[0]->nom?></h3>





                <h4>Statistiques</h4>
                <div class="row blockStat">

                    <p class=" col-3 stat"> PV</p>
                    <p class=" col-3 stat"><?= $pokemonList[0]->pv?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?=$pokemonList[0]->pv*100/255?>%;"
                            aria-valuenow="<?=$pokemonList[0]->pv*100/255?>" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Attaque</p>
                    <p class=" col-3 stat"><?= $pokemonList[0]->attaque?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemonList[0]->attaque*100/255?>%;"
                            aria-valuenow="<?=$pokemonList[0]->attaque*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Défense</p>
                    <p class=" col-3 stat"><?= $pokemonList[0]->attaque?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemonList[0]->defense*100/255?>%;"
                            aria-valuenow="<?=$pokemonList[0]->defense*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Attaque Spé</p>
                    <p class=" col-3 stat"><?= $pokemonList[0]->attaque_spe?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemonList[0]->attaque_spe*100/255?>%;"
                            aria-valuenow="<?=$pokemonList[0]->attaque_spe*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Défense Spé</p>
                    <p class=" col-3 stat"><?= $pokemonList[0]->defense_spe?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemonList[0]->defense_spe*100/255?>%;"
                            aria-valuenow="<?=$pokemonList[0]->defense_spe*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Vitesse</p>
                    <p class=" col-3 stat"><?= $pokemonList[0]->vitesse?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemonList[0]->vitesse*100/255?>%;"
                            aria-valuenow="<?=$pokemonList[0]->vitesse*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>