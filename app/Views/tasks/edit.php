<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier une tâche</title>
    <link rel="stylesheet" href="/taskmanager_ci/public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Modifier la tâche</h1>
        
        <form method="POST" action="<?= site_url('/edit/'.$task->id) ?>">
            <input type="text" name="title" value="<?= esc($task->title) ?>" required>
            <textarea name="description" rows="3"><?= esc($task->description ?? '') ?></textarea>
            
            <select name="status">
                <option value="en cours" <?= $task->status === 'en cours' ? 'selected' : '' ?>>En cours</option>
                <option value="terminé" <?= $task->status === 'terminé' ? 'selected' : '' ?>>Terminé</option>
            </select>
            
            <button type="submit">Enregistrer</button>
            <a href="<?= site_url('/') ?>" class="lien-annuler">Annuler</a>
        </form>
    </div>
</body>
</html>