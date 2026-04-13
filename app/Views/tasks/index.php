<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mes tâches</title>
    <link rel="stylesheet" href="/taskmanager_ci/public/css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Bienvenue, <?= esc($username) ?> !</h1>
            <div class="user-info">Connecté(e)</div>
        </div>
        
        <div class="menu">
            <a href="<?= site_url('/add') ?>" class="btn">➕ Ajouter une tâche </a>
            <a href="<?= site_url('/logout') ?>"> Se déconnecter</a>
        </div>
        
        <h2>Mes tâches</h2>
        
        <?php if (empty($tasks)): ?>
            <p>Aucune tâche. <a href="<?= site_url('/add') ?>">Créez-en une !</a></p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tasks as $task): ?>
                        <tr class="<?= $task->status === 'terminé' ? 'completed' : '' ?>">
                            <td><?= esc($task->title) ?></td>
                            <td><?= esc($task->description ?? '') ?></td>
                            <td><?= esc($task->status) ?></td>
                            <td>
                                <a href="<?= site_url('/edit/'.$task->id) ?>">✏️ Modifier</a>
                                <a href="<?= site_url('/delete/'.$task->id) ?>" onclick="return confirm('Supprimer cette tâche ?')">🗑️ Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>