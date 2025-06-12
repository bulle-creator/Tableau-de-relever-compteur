# 📊Tableau de relever compteur.

Ce projet est une application web simple permettant de suivre et gérer les relevés de compteurs pour une reprographie (marque d'imprimante, type d'encre, identifiant, format et date.). Les utilisateurs peuvent ajouter, modifier et supprimer des relevés, ainsi que visualiser les données sous forme de tableau interactif.

# 🚀 Fonctionnalités

- Ajouter des relevés pour différents compteurs (date, type, valeur).
- Modifier ou supprimer des relevés existants.
- Filtrer les données par type de compteur ou période.
- Exporter les relevés sous forme de fichier CSV.

# 🛠️ Installation

## Prérequis
- [Node.js](https://nodejs.org/fr) (v16+ recommandé)
- Un navigateur moderne (Google Chrome, Firefox, etc.)

## Windows

### Télécharger PHP :
- Accédez au site officiel de PHP : *[php.net/downloads](https://www.php.net/downloads)*
- Téléchargez la version de PHP correspondant à votre version de Windows (Thread Safe pour un serveur web).

### 1. Installer PHP :

- Extrayez l'archive téléchargée dans un dossier, par exemple *C:\php.*
- Ajoutez le chemin du dossier PHP *(C:\php)* à la variable d'environnement *PATH*.

### 2. Configurer PHP :

- Renommez le fichier php.ini-development en php.ini.
- Ouvrez ce fichier avec un éditeur de texte et configurez les extensions et les paramètres si nécessaire.

### 3. Tester l'installation :

- Ouvrez le terminal, tapez *php -v* pour vérifier que PHP est installé.

##  Télécharger XAMPP

- Rendez-vous sur le site officiel de [XAMPP.](https://www.apachefriends.org)
- Choisissez la version adaptée à votre système d'exploitation (Windows, macOS ou Linux).
- Téléchargez le fichier d'installation.

 ### Installer XAMPP
 
 #### Sur Windows :
- Exécutez le fichier d'installation téléchargé.
- Si une fenêtre de contrôle de compte utilisateur (UAC) s'ouvre, cliquez sur Oui pour autoriser l'installation.

#### Suivez l'assistant d'installation :

- Sélectionnez les composants à installer (les paramètres par défaut conviennent généralement).
- Choisissez un dossier d'installation (par défaut, *C:\xampp*).
- Terminez le processus d'installation.


### Démarrer XAMPP

#### Lancez le panneau de contrôle de XAMPP :

- Sur Windows : Exécutez *xampp-control.exe* depuis le dossier d'installation.
- Démarrez les services nécessaires (Apache, MySQL, etc.) en cliquant sur le bouton Start à côté de chaque service.

### Vérifier l'installation

- Ouvrez un navigateur web et saisissez *http://localhost* dans la barre d'adresse.
- Si XAMPP est correctement installé, le tableau de bord XAMPP s'affichera.

### Tester PHP (Optionnel)

#### Créez un fichier PHP de test :

- Allez dans le dossier *htdocs* du répertoire d'installation de XAMPP.
- Créez un fichier nommé *test.php* avec le contenu suivant :

```
<?php
phpinfo();
?>
```

#### Ouvrez un navigateur et visitez *http://localhost/test.php*. Vous devriez voir une page contenant les informations sur PHP.

## Accéder au projet :  

- Cloner ce dépot:
```
git clone https://github.com/username/releve-compteur.git
```

- Accédez au dossier du projet :
```
cd releve-compteur
```

- Installez les dépendances :
```
  npm install
```

- Lancez l'application en mode développement :
```
npm start
```
- Ouvrez [http://localhost:8000](http://localhost:8000) dans votre navigateur.
ou entré dans le terminale *php -S localhost:8000*

# 🖼️ Aperçu

Voici un exemple du tableau de relevés :

| Date       | Constructeur| Type    |
| ---------- | ----------- | ------- |
| 2025-06-01 | Xerot       | couleur |
| 2025-06-01 | Ricot       | n&b     |
| 2025-06-01 | Canon       | couleur |

# 📂 Structure du Projet

````
releve-compteur/
├── public/           # Fichiers publics (PHP, images)
├── src/              # Code source
│   ├── components/   # Composants React
│   ├── pages/        # Pages de l'application
│   ├── utils/        # Utilitaires (formatage, API)
│   └── styles/       # Fichiers CSS/SCSS
├── .gitignore        # Fichiers ignorés par Git
├── package.json      # Dépendances et scripts
└── README.md         # Documentation du projet
````
