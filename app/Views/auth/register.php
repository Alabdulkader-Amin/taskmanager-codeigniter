<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription - Gestion de tâches</title>
    <link rel="stylesheet" href="/taskmanager_ci/public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Inscription</h1>
        
        <?php if (isset($error)): ?>
            <div class="error"><?= esc($error) ?></div>
        <?php endif; ?>
        
        <form method="POST" action="<?= site_url('/register') ?>">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">S'inscrire</button>
        </form>
        
        <p>Déjà un compte ? <a href="<?= site_url('/login') ?>">Se connecter</a></p>
    </div>
</body>
</html>