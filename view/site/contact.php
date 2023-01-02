        <div id="content">
            <section id="form">
                <h2 class="titre-form">Pour prendre contact avec nous veuillez remplir le formulaire ci-dessous</h2>
                <form action="<?= LienHelper::getLien('SiteController', 'ContactFormSubmit') ?>" method="POST">
                    <div class="form">
                        <div>
                            <div class="champ">
                                <label for="prenom">Prénom :</label>
                                <input type="text" id="prenom" name="prenom">
                            </div>
                            <div class="champ">
                                <label for="tel">Téléphone :</label>
                                <input type="tel" id="tel" name="tel">
                            </div>
                            <div class="champ">
                                <label for="objet">Objet :</label>
                                <input type="text" id="objet" name="objet">
                            </div>
                        </div>
                        <div>
                            <div class="champ">
                                <label for="nom">Nom :</label>
                                <input type="text" id="nom" name="nom">
                            </div>
                            <div class="champ">
                                <label for="mail">E-mail :</label>
                                <input type="email" id="mail" name="mail">
                            </div>
                        </div>
                    </div>
                    <div class="champ">
                        <label for="message">Message :</label>
                        <textarea name="message" rows="10"></textarea>
                    </div>
                    <div class="btn-contact">
                        <input type="submit" value="Envoyer" class="btn-form-contact">
                    </div>
                </form>
            </section>
        </div>

