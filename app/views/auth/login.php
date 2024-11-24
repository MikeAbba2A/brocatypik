<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../app/views/partials/header.php'; ?>



<main class="login-page">
    <section class="login-container">
        <h1>Connexion</h1>
        <?php if (isset($error)): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <form action="/process_login" method="POST" class="login-form">
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" id="email" name="email" placeholder="Votre email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
            </div>
            <button type="submit" class="btn-submit">Se connecter</button>
        </form>
        <p class="register-link">
            Pas encore de compte ? <a href="/register">Créez-en un maintenant</a>
        </p>
    </section>
</main>

<?php include '../app/views/partials/footer.php'; ?>
