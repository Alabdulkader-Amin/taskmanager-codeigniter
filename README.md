# Gestion de tâches - CodeIgniter 4

Application web de gestion de tâches avec authentification, développée avec le framework **CodeIgniter 4**.

## 🚀 Fonctionnalités

- Inscription / Connexion sécurisée
- Ajout de tâche
- Modification de tâche (changement de statut)
- Suppression de tâche
- Isolation des données (chaque utilisateur ne voit que ses tâches)

## 🛠️ Technologies utilisées

- **Framework** : CodeIgniter 4
- **Langage** : PHP 8.5
- **Base de données** : MySQL
- **Environnement** : Laragon

## 📋 Prérequis

- PHP 8.2 ou supérieur
- MySQL
- Composer
- Laragon 

## 🔧 Installation

### 1. Télécharger le projet

```bash
git clone https://github.com/Alabdulkader-Amin/taskmanager-codeigniter.git
````
1- **Créer un dossier nommé taskmanager_ci dans C:laragon/www/taskmanager (à changer le nome lors de clone par taskmanager_ci).
--
2- Dans le meme dossier ouvrir le terminal et tapper (composer install) cela permet d'installer .vendor.
3- Ouvrir laragon (stat) -> base de donnée (gestionnaire de sessions) -> +ajouter pour créer base de donnée nommé : SIO.
4- Retrouver le fichier nommé par database.sql copier le text coller dans "requête" puis exécuter.
5- Le lien qui mène vers le sujet http://localhost:8080/taskmanager_ci/public/index.php/login
