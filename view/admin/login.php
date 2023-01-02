<div class="container">
    <h1 class="text-center mt-3">Formulaire de connexion à l'administration</h1>
    <form method="POST" action="<?= LienHelper::getLien('AdminController', 'ValidFormLogin') ?>" >
        <div class="mb-3">
            <label for="login" class="form-label">Login :</label>
            <input type="text" name="login" class="form-control" id="login">
        </div>
        <div class="mb-3">
            <label for="mdp" class="form-label">Mot de passe :</label>
            <input type="text" name="mdp" class="form-control" id="mdp">
        </div>
        <div class="text-center mb-4">
            <input type="submit" class="btn btn-primary" name="btn_login" value="Connexion" >
        </div>
    </form>
</div>