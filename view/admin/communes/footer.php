<!--début footer-->
        <footer>
            <div class="footer d-flex-column mt-3">
                <div class="footer-menu d-flex justify-content-around gap-2">
                    <a class="footer-menu-item" href="<?= LienHelper::getLien('SiteController', 'mentionlegale') ?>">Mentions légales</a>
                    <a class="footer-menu-item" href="<?= LienHelper::getLien('SiteController', 'conditionvente') ?>">Conditions générales de ventes</a>
                    <a class="footer-menu-item" href="<?= LienHelper::getLien('SiteController', 'confidentialite') ?>">Confidentialité</a>
                    <a class="footer-menu-item" href="<?= LienHelper::getLien('SiteController', 'contact') ?>">Contact</a>
                </div>
                <div class="copyright d-flex justify-content-center mb-1">
                    <p>Tous droits réservés</p>
                    <img class="logo-copyright" src="img/illustrations/copyright-28781.png" alt="copyright" width="18" height="18">
                    <p>2022 Txiki Films</p>
                </div>
                <div>
                    <a class="to-top" href="#page" style="bottom: 25px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                            <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
        <!--fin footer-->