<!--début main-->
        <main class="content d-flex-column">
            <!--début menuSidebar-->
            <div class="content-menu-sidebar d-flex justify-content-between ms-2">
                <nav id="site-navigation" class="navigation-menu-sidebar toggled-on">
                    <button class="menu-toggle active" aria-controls="primary-menu" aria-expanded="false">
                        <svg id="icon-bars" class="icon icon-bars" aria-hidden="true" role="img" viewBox="0 0 27 32">
                            <path class="path1" d="M27.429 24v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804zM27.429 14.857v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804zM27.429 5.714v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804z"></path>
                        </svg>
                        <svg id="icon-close" class="icon icon-close" aria-hidden="true" role="img" viewBox="0 0 25 32">
                                <path class="path1" d="M23.179 23.607q0 0.714-0.5 1.214l-2.429 2.429q-0.5 0.5-1.214 0.5t-1.214-0.5l-5.25-5.25-5.25 5.25q-0.5 0.5-1.214 0.5t-1.214-0.5l-2.429-2.429q-0.5-0.5-0.5-1.214t0.5-1.214l5.25-5.25-5.25-5.25q-0.5-0.5-0.5-1.214t0.5-1.214l2.429-2.429q0.5-0.5 1.214-0.5t1.214 0.5l5.25 5.25 5.25-5.25q0.5-0.5 1.214-0.5t1.214 0.5l2.429 2.429q0.5 0.5 0.5 1.214t-0.5 1.214l-5.25 5.25 5.25 5.25q0.5 0.5 0.5 1.214z"></path>
                        </svg>
                    </button>
                    <ul class="sidebar-menu">
                        <li class="menu-item"><a class="menu-item" href="<?= LienHelper::getLien('SiteController', 'index') ?>">Accueil</a></li>
                        <li class="menu-item"><a class="menu-item" href="<?= LienHelper::getLien('SiteController', 'fiction') ?>">Fictions</a></li>
                        <li class="menu-item"><a class="menu-item" href="<?= LienHelper::getLien('SiteController', 'documentaire') ?>">Documentaires</a></li>
                        <li class="menu-item"><a class="menu-item" href="<?= LienHelper::getLien('SiteController', 'animation') ?>">Animations</a></li>
                    </ul>
                </nav>
                <nav id="site-navigation" class="navigation-menu-sidebar toggled-on">
                    <button class="menu-toggle active" aria-controls="primary-menu" aria-expanded="false">
                        <svg id="icon-bars" class="icon icon-bars" aria-hidden="true" role="img" viewBox="0 0 27 32">
                            <path class="path1" d="M27.429 24v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804zM27.429 14.857v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804zM27.429 5.714v2.286q0 0.464-0.339 0.804t-0.804 0.339h-25.143q-0.464 0-0.804-0.339t-0.339-0.804v-2.286q0-0.464 0.339-0.804t0.804-0.339h25.143q0.464 0 0.804 0.339t0.339 0.804z"></path>
                        </svg>
                        <svg id="icon-close" class="icon icon-close" aria-hidden="true" role="img" viewBox="0 0 25 32">
                            <path class="path1" d="M23.179 23.607q0 0.714-0.5 1.214l-2.429 2.429q-0.5 0.5-1.214 0.5t-1.214-0.5l-5.25-5.25-5.25 5.25q-0.5 0.5-1.214 0.5t-1.214-0.5l-2.429-2.429q-0.5-0.5-0.5-1.214t0.5-1.214l5.25-5.25-5.25-5.25q-0.5-0.5-0.5-1.214t0.5-1.214l2.429-2.429q0.5-0.5 1.214-0.5t1.214 0.5l5.25 5.25 5.25-5.25q0.5-0.5 1.214-0.5t1.214 0.5l2.429 2.429q0.5 0.5 0.5 1.214t-0.5 1.214l-5.25 5.25 5.25 5.25q0.5 0.5 0.5 1.214z"></path>
                        </svg>
                    </button>
                    <ul class="sidebar-menu mx-1">
                        <li class="menu-item"><a class="menu-item" href="<?= LienHelper::getLien('SiteController', 'autre') ?>">Autres</a></li>
                        <li class="menu-item"><a class="menu-item" href="<?= LienHelper::getLien('SiteController', 'actualite') ?>">Actualités</a></li>
                        <li class="menu-item"><a class="menu-item" href="<?= LienHelper::getLien('SiteController', 'apropos') ?>">A propos</a></li>
                        <li class="menu-item"><a class="menu-item" href="<?= LienHelper::getLien('AdminController', 'index') ?>">Connexion</a></li>
                    </ul>
                </nav>
            </div>
            <!--fin menuSidebar-->