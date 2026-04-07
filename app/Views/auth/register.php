<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    
    <?php if (isset($error)): ?>
        <p style="color: red;"><?= $error ?></p>
    <?php endif; ?>
    
    <form method="POST">
        <input type="text" name="username" placeholder="Nom" required><br><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br><br>
        <button>S'inscrire</button>
    </form>
    <a href="/login">Déjà un compte</a>
</body>
</html>