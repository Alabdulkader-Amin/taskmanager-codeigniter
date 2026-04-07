<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
</head>

<body>
    <h1>Modifier la tâche</h1>
    <form method="POST">
        <input type="text" name="title" value="<?= esc($task->title) ?>" required><br><br>
        <textarea name="description"><?= esc($task->description ?? '') ?></textarea><br><br>
        <select name="status">
            <option value="en cours" <?= $task->status === 'en cours' ? 'selected' : '' ?>>En cours</option>
            <option value="terminé" <?= $task->status === 'terminé' ? 'selected' : '' ?>>Terminé</option>
        </select><br><br>
        <button>Enregistrer</button>
        <a href="<?= site_url('/') ?>">Annuler</a>
    </form>
</body>

</html>