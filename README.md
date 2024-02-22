# Projet_Cyber
# Connexion.php
Le fichier Connexion.php contient le formulaire de connexion utilisateur en HTML, avec des fonctionnalités de vérification côté serveur en PHP. Il établit une connexion à une base de données MySQL pour vérifier les informations d'identification de l'utilisateur.

# Inscription.php
Le fichier Inscription.php contient le formulaire d'inscription utilisateur en HTML, avec des fonctionnalités de vérification côté serveur en PHP.

# traitement_connexion.php
Le fichier traitement_connexion.php gère le traitement des données de connexion.

# user.sql
Le fichier user.sql est un script SQL contenant la structure de la base de données. Il doit être exécuté avant d'utiliser le code sur phpMyAdmin.

Instructions d'Utilisation - Configuration de la Base de Données
Assurez-vous de créer une base de données MySQL nommée 'projet_cyber' avec une table appelée 'user'.
La table 'user' doit comporter au moins les colonnes suivantes :
email : Pour stocker l'adresse e-mail de l'utilisateur.
password : Pour stocker le mot de passe haché de l'utilisateur.
Vérifiez que la structure de la table et les noms de colonnes correspondent à ceux utilisés dans le code PHP pour garantir le bon fonctionnement de l'application.
Configuration de la Connexion à la Base de Données
Dans les fichiers PHP (connexion.php, inscription.php), ajustez les paramètres de connexion à la base de données pour correspondre à votre configuration. Cela inclut les variables suivantes :

$servername : L'adresse du serveur MySQL (par exemple, "localhost").
$username : Le nom d'utilisateur de la base de données MySQL (par défaut, "root").
$password : Le mot de passe de la base de données MySQL (par défaut, vide).
$dbname : Le nom de la base de données MySQL (dans ce cas, "projet_cyber").
Assurez-vous que ces informations sont correctes pour que les fichiers PHP puissent se connecter à la base de données avec succès.

# Exécution du Projet
Après avoir configuré correctement la base de données et la connexion, placez les fichiers dans un serveur web compatible PHP (comme Apache) et ouvrez-les dans un navigateur web.

# Boutons
Bouton "Se connecter" : Sur la page connexion.php, le bouton "Se connecter" permet à l'utilisateur de soumettre ses informations d'identification (email et mot de passe) pour se connecter. Les données sont ensuite vérifiées côté serveur en PHP pour authentifier l'utilisateur.

Bouton "Ajouter un compte" : Le bouton "Ajouter un compte" sur la page Connexion.php redirige l'utilisateur vers la page inscription.php, où il peut s'inscrire pour créer un nouveau compte utilisateur.

Bouton "Sign up" : Sur la page Inscription.php, le bouton "Sign up" permet à l'utilisateur de soumettre le formulaire d'inscription. Les données sont vérifiées côté serveur en PHP, y compris la validation du captcha, avant d'être insérées dans la base de données.

Bouton "Reset" : Le bouton "Reset" sur les pages Connexion.php et Inscription.php réinitialise tous les champs du formulaire, permettant à l'utilisateur de recommencer le processus si nécessaire.

Pour renforcer la sécurité du formulaire, j'ai utilisé des tokens et remplacé le code JavaScript par du PHP. Les entrées du formulaire sont filtrées pour assurer une meilleure sécurité.


















