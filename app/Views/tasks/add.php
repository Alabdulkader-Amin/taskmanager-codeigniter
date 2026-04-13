<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter une tâche</title>
    <link rel="stylesheet" href="/taskmanager_ci/public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter une tâche</h1>
        
        <form method="POST" action="<?= site_url('/add') ?>">
            <input type="text" name="title" placeholder="Titre" required>
            <textarea name="description" placeholder="Description" rows="3"></textarea>
            <button type="submit">Ajouter</button>
            <a href="<?= site_url('/') ?>" class="lien-annuler">Annuler</a>
        </form>
    </div>
</body>
</html>