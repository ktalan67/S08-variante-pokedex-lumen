<?php include(__DIR__ . '/../layouts/header.php') ?>
<main> 
<h1 class="titreDetail">Détail de <?=$pokemon->nom?></h1>
    <div class="row">
        <div class="fiche col-10">
            <div class="img">
                <img src="<?= url('img/'.$pokemon->numero.'.png')?>" alt="" class="imgpokemon">
            </div>

            <div class="txtFiche">
                <h3>#<?=$pokemon->numero.' '.$pokemon->nom?></h3>





                <h4>Statistiques</h4>
                <div class="row blockStat">

                    <p class=" col-3 stat"> PV</p>
                    <p class=" col-3 stat"><?= $pokemon->pv?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?=$pokemon->pv*100/255?>%;"
                            aria-valuenow="<?=$pokemon->pv*100/255?>" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Attaque</p>
                    <p class=" col-3 stat"><?= $pokemon->attaque?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon->attaque*100/255?>%;"
                            aria-valuenow="<?=$pokemon->attaque*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Défense</p>
                    <p class=" col-3 stat"><?= $pokemon->attaque?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon->defense*100/255?>%;"
                            aria-valuenow="<?=$pokemon->defense*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Attaque Spé</p>
                    <p class=" col-3 stat"><?= $pokemon->attaque_spe?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon->attaque_spe*100/255?>%;"
                            aria-valuenow="<?=$pokemon->attaque_spe*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Défense Spé</p>
                    <p class=" col-3 stat"><?= $pokemon->defense_spe?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon->defense_spe*100/255?>%;"
                            aria-valuenow="<?=$pokemon->defense_spe*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Vitesse</p>
                    <p class=" col-3 stat"><?= $pokemon->vitesse?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon->vitesse*100/255?>%;"
                            aria-valuenow="<?=$pokemon->vitesse*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="FightList">
 <form method="post" action="<?= route("combat", ['id1' => $pokemon->numero, 'id2' => $pokemon->numero ])?>">
 <select name="pokemon" id="pokemonfight">
    <option selected="selected">Pokemon</option>
      <option><?= $pokemon->nom ?></option>
</select>
<input type="submit" value="Combat !">
</form>
</main>
<?php include(__DIR__ . '/../layouts/footer.php') ?>