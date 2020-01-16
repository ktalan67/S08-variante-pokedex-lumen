
<!-- 
    Formulaire liste déroulante avec choix des deux Pokémons à combattre (inclut la view home)


    <section class="tags-list">
                <form method="post">
                <select name="Sujets" id="tags-select" onchange="goToPage()" selected="First">    
                <option value="First">Les Sujets</option> 
                <?php foreach($allTags as $allTag): ?>
                <option value="<?= route("tag", ['id' => $allTag->id]) ?>"> <?= $allTag->name ?></option> 
                <?php endforeach ?>
                </select>
                </form>
            </section>


Script à travailler pour rediriger via les valeurs inputs avant d'envoyer le form

@TODO 1) Récupérer les valeurs du form via UserController (idealement on récupère les id...)
      2) Créér la route pour tout ça. 
        -> Nouvelle route ? Pokedex/combat/id/id/  -> Avec la view combat.tpl
        ex: Bulbizare id:1 , Herbizarre id:2 alors route = Pokedex/combat/1/2
            J'affiche ma page combat.tpl avec ces données.
      3) Intégration sur la view





