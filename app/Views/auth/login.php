<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    
    <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>
    
    <?php if (isset($error)): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    
    <form method="POST">
        <input type="text" name="username" placeholder="Nom" required><br><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br><br>
        <button>Se connecter</button>
    </form>
    <a href="/register">Créer un compte</a>
</body>
</html>