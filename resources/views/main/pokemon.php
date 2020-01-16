<?php 
  $pokemon = $viewVars['pokemon'];
  $typeList = $viewVars['typeList'];
  
  ?>
<main>
    <h1 class="titreDetail">Détail de <?=$pokemon[0]->getNom()?></h1>
    <div class="row">
        <div class="fiche col-10">
            <div class="img">
                <img src="<?=$absoluteURL.'/img/'.$pokemon[0]->getNumero().'.png'?>" alt="" class="imgpokemon">
            </div>

            <div class="txtFiche">
                <h3>#<?=$pokemon[0]->getNumero().' '.$pokemon[0]->getNom()?></h3>
                <?php foreach ($typeList as $type) :?>
                    <a href=""><div class="type" style="background-color:#<?=$type->getColor()?>;">
                    <?= $type->getName() ?>
                </div></a>
                <?php endforeach;?>
                <h4>Statistiques</h4>
                <div class="row blockStat">

                    <p class=" col-3 stat"> PV</p>
                    <p class=" col-3 stat"><?= $pokemon[0]->getPv()?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?=$pokemon[0]->getPv()*100/255?>%;"
                            aria-valuenow="<?=$pokemon[0]->getPv()*100/255?>" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>

                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Attaque</p>
                    <p class=" col-3 stat"><?= $pokemon[0]->getAttaque()?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon[0]->getAttaque()*100/255?>%;"
                            aria-valuenow="<?=$pokemon[0]->getAttaque()*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Défense</p>
                    <p class=" col-3 stat"><?= $pokemon[0]->getDefense()?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon[0]->getDefense()*100/255?>%;"
                            aria-valuenow="<?=$pokemon[0]->getDefense()*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Attaque Spé</p>
                    <p class=" col-3 stat"><?= $pokemon[0]->getAttaque_spe()?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon[0]->getAttaque_spe()*100/255?>%;"
                            aria-valuenow="<?=$pokemon[0]->getAttaque_spe()*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Défense Spé</p>
                    <p class=" col-3 stat"><?= $pokemon[0]->getDefense_spe()?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon[0]->getDefense_spe()*100/255?>%;"
                            aria-valuenow="<?=$pokemon[0]->getDefense_spe()*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>

                <div class="row blockStat">
                    <p class=" col-3 stat"> Vitesse</p>
                    <p class=" col-3 stat"><?= $pokemon[0]->getVitesse()?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon[0]->getVitesse()*100/255?>%;"
                            aria-valuenow="<?=$pokemon[0]->getVitesse()*100/255?>" aria-valuemin="0"
                            aria-valuemax="100"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="fiche d-flex">
        <img class= "col-4" src="<?=$absoluteURL.'/img/'.$pokemon[0]->getNumero().'.png'?>" alt="" class="imgpokemon">
        <div class="detail">
            <h3>#<?=$pokemon[0]->getNumero().' '.$pokemon[0]->getNom()?></h2>
                <h4>Statistiques</h4>

                <div class="stat">
                   <div><p> PV</p></div>
                    <div><p><?= $pokemon[0]->getPv()?></p></div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon[0]->getPv()*100/255?>%"
                            aria-valuenow="<?=$pokemon[0]->getPv()*100/255?>" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>

                <div class="stat">
                    <p> Attaque</p>
                    <p><?= $pokemon[0]->getAttaque()?></p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar"
                            style="width: <?=$pokemon[0]->getAttaque()*100/255?>%"
                            aria-valuenow="<?=$pokemon[0]->getAttaque()*100/255?>" aria-valuemin="0"
                            aria-valuemax="100">
                        </div>
                    </div>

                    <div class="stat">
                        <p> Défense</p>
                        <p><?= $pokemon[0]->getDefense()?></p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar"
                                style="width: <?=$pokemon[0]->getDefense()*100/255?>%"
                                aria-valuenow="<?=$pokemon[0]->getDefense()*100/255?>" aria-valuemin="0"
                                aria-valuemax="100">
                            </div>
                        </div>
                        <div class="stat">
                            <p> Attaque Spé.</p>
                            <p><?= $pokemon[0]->getAttaque_spe()?></p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                    style="width: <?=$pokemon[0]->getAttaque_spe()*100/255?>%"
                                    aria-valuenow="<?=$pokemon[0]->getAttaque_spe()*100/255?>" aria-valuemin="0"
                                    aria-valuemax="100">
                                </div>
                            </div>
                            <div class="stat">
                                <p> Défense Spé</p>
                                <p><?= $pokemon[0]->getDefense_spe()?></p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar"
                                        style="width: <?=$pokemon[0]->getDefense_spe()*100/255?>%"
                                        aria-valuenow="<?=$pokemon[0]->getDefense_spe()*100/255?>" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                                <div class="stat">
                                    <p> Vitesse</p>
                                    <p><?= $pokemon[0]->getVitesse()?></p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: <?=$pokemon[0]->getVitesse()*100/255?>%"
                                            aria-valuenow="<?=$pokemon[0]->getVitesse()*100/255?>" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                                <p>Revenir à la liste</p>
                                </div> -->

</main>