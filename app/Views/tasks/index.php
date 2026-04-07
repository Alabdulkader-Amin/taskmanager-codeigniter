<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mes tâches</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background: #f2f2f2; }
        .completed { text-decoration: line-through; color: gray; }
    </style>
</head>
<body>
    <h1>Bienvenue <?= $username ?> !</h1>
    <a href="<?= site_url('/add') ?>">Ajouter</a> | <a href="<?= site_url('/logout') ?>">Déconnexion</a>
    
    <h2>Mes tâches</h2>
    
    <?php if (empty($tasks)): ?>
        <p>Aucune tâche</p>
    <?php else: ?>
        <table>
            <tr><th>Titre</th><th>Description</th><th>Statut</th><th>Actions</th></tr>
            <?php foreach ($tasks as $task): ?>
            <tr class="<?= $task->status === 'terminé' ? 'completed' : '' ?>">
                <td><?= esc($task->title) ?></td>
                <td><?= esc($task->description ?? '') ?></td>
                <td><?= esc($task->status) ?></td>
                <td>
                    <a href="<?= site_url('/edit/'.$task->id) ?>">Modifier</a>
                    <a href="<?= site_url('/delete/'.$task->id) ?>" onclick="return confirm('Supprimer ?')">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>