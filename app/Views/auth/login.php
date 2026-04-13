<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion - Gestion de tâches</title>
    <link rel="stylesheet" href="/taskmanager_ci/public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Connexion</h1>
        
        <?php if (session()->getFlashdata('success')): ?>
            <div class="success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>
        
        <?php if (isset($error)): ?>
            <div class="error"><?= esc($error) ?></div>
        <?php endif; ?>
        
        <form method="POST" action="<?= site_url('/login') ?>">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
        
        <p>Pas de compte ? <a href="<?= site_url('/register') ?>">S'inscrire</a></p>
    </div>
</body>
</html>