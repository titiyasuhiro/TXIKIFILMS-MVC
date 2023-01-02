            <!--début contenu-->
            <div class="film-carousel d-flex-row justify-content-center">
                <div class="carousel-layout text-center">
                    <img id="film-carousel-layout" src="img/illustrations/oeil-fond-transparent-txikifilms.png" alt="oeil" width="800" height="500">
                </div>
                <?php foreach ($films as $film) : ?>
                <div class="grid-ligne1-img1 flex text-center lg:justify-center md:ml-40 lg:ml-0 md:mt-4">
                    <div class="rounded-lg shadow-lg bg-transparent max-w-xs">
                        <video controls width="400" height="250">
                            <source src="<?= $film->teaser ?>" type="film/mp4">
                        </video>
                    </div>
                </div>
                <div class="d-grid justify-content-center gap-2">
                    <button class="btn btn-secondary shadow" href="" width="100" height="50" type="button">Télécharger le film complet pour 2€</button>
                </div>
                <h3 class="titre text-center mt-2"><?= $film->titre ?></h3>
                <div class="single-info d-flex ms-2">
                    <div class="liste-technique">
                        <p>Directrice de la photographie : </p>
                        <p>1ère assistant opérateur : </p>
                        <p>2ème assistant opérateur : </p>
                        <br>
                        <p>1er assistant mise en scène : </p>
                        <p>2ème assistant mise en scène : </p>
                        <p>Chargé de figuration : </p>
                        <p>Scripte : </p>
                        <br>
                        <p>Casting : </p>
                        <br>
                        <p>Ingénieur du son : </p>
                        <p>Perchman : </p>
                        <br>
                        <p>Chef décorateur : </p>
                        <p>1er assistant décorateur : </p>
                        <p>2ème assistant décorateur : </p>
                        <br>
                        <p>Chef costumier : </p>
                        <br>
                        <p>Cheffe maquilleuse : </p>
                        <br>
                        <p>Régisseur général : </p>
                        <p>Régisseur adjoint : </p>
                        <br>
                        <p>Chef machiniste : </p>
                        <p>Chef électricien : </p>
                        <br>
                        <p>Cantine : </p>
                        <br>
                        <p>Monteuse image : </p>
                        <p>Monteur son : </p>
                        <p>Mixeur : </p>
                        <p>Etalonneuse : </p>
                        <br>
                        <p>Musique originale : </p>
                    </div>
                    <div class="presentation d-flex-row justify-content-between">
                        <div>
                            <p><?= $film->date_sortie ?> | <?= $film->format ?> | <?= $film->support ?>| <?= $film->duree ?></p>
                            <br>
                            <p>Synopsis : <?= $film->resume ?></p>
                        </div>
                        <div>
                            <p>Scénario : <?= $film->auteur ?></p>
                            <p>Réalisateur : <?= $film->realisateur ?></p>
                            <p>Directrice de production :</p>
                        </div>
                        <div>
                            <p>avec le soutien du CNC - aide au programme</p>
                            <p>avec le soutien de la Région Nouvelle Aquitaine</p>
                            <p>avec la participation de France 2</p>
                            <p>avec le soutien de la PROCIREP-ANGOA</p>
                        </div>
                    </div>
                    <div>
                        <div class="affiche rounded-lg shadow-lg max-w-xs text-center">
                            <img class="rounded-t-lg" src="<?= $film->affiche ?>" alt="" width="200" height="250">
                        </div>
                        <h6 class="mt-4">Palmarès</h6>
                        <p><?= $film->palmares ?></p>
                        <h6>Diffusion</h6>
                        <p><?= $film->diffusion ?></p>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <!--fin contenu-->
            </main>
            <!--fin main-->