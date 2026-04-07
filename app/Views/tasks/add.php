<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ajouter</title>
</head>

<body>
    <h1>Ajouter une tâche</h1>
    <form method="POST">
        <input type="text" name="title" placeholder="Titre" required><br><br>
        <textarea name="description" placeholder="Description"></textarea><br><br>
        <button>Ajouter</button>
        <a href="<?= site_url('/') ?>">Annuler</a>
    </form>
</body>

</html>