# Salles de Concert
Site dédié à la gestion de l'actualité d'une salle de concert en PHP.

## Explication du Projet

Ce projet vise à créer un site web pour la salle de concerts **OK**, développé en PHP et s'appuyant sur une base de données. Le site comprend une section **Actualités**, similaire à un blog, et une page **Événements** pour présenter les prochains concerts. Une page **Administration** a été envisagée pour la gestion des nouvelles, événements et planifications.

Des défis ont été rencontrés, notamment avec la connexion à la base de données, l'insertion d'images dans les formulaires et l'affichage des éléments de la base de données sur une page HTML. La synchronisation de la base de données avec un calendrier JavaScript a été complexe mais a été finalement réussie.

## Mise en Page

Des layouts personnalisés pour le footer, le header, et la barre de navigation ont été créés. Des difficultés ont été rencontrées pour définir les chemins des URL et le chemin du logo dans la navigation. Ces problèmes ont été résolus en utilisant une constante PHP pour l'image du logo ```(`define("LOGONAV", "/salle_concert/logo/logonav.svg")``` et ```<img src="<?php echo LOGONAV; ?>"`)```; et ```$_SERVER['HTTP_HOST']``` pour les chemins des URL. Le chemin de base est défini comme ```$basePath = 'http://' . $_SERVER['HTTP_HOST'] . '/salle_concert/'```;`. Dans les liens de navigation, j'ai simplement ajouté le nom de la page à ```$basePath` (`<a href="<?php echo $basePath; ?>index.php"`)```.

## Templates

Des templates ont été créés pour gérer toutes les actualités et chaque actualité individuellement, en utilisant ```$_GET['id' => $id] = $_GET```. Cette méthode a été également appliquée aux événements. Les templates sont connectés à la base de données pour récupérer les informations nécessaires. Des boucles `foreach` ont été utilisées pour remplir les pages avec toutes les actualités et tous les événements. Une boucle `for` a été utilisée sur le template des actualités pour n'afficher que six d'entre elles sur la page d'index. Pour les actualités et événements individuels, un `GET` a été utilisé pour les récupérer par ID ou par nom.

## La Page Index

La page d'accueil affiche un carrousel Tailwind mettant en avant les derniers événements de la base de données. Pour y intégrer une boucle `foreach`, la structure a dû être modifiée, permettant de récupérer les photos et les titres des événements. La page affiche également les six dernières actualités sous forme de blog. Une section "À propos de nous" termine cette page d'accueil.

## Page Contact

Une page de contact a été créée pour permettre aux utilisateurs de communiquer avec les organisateurs via un formulaire en méthode `POST`.

## Partie Administration

Une interface d'administration a été conçue pour la publication des actualités et des événements. Une page de connexion et d'authentification restreint l'accès à cette section aux seuls administrateurs. Un calendrier JavaScript fullcalendar a été intégré pour faciliter la gestion des événements, connecté à la base de données. Les difficultés rencontrées étaient principalement liées aux chemins, résolues grâce à l'utilisation de Postman et du navigateur pour tester et ajuster les URL.

## Script PHP

Un script PHP a été créé pour initialiser un profil admin lors du lancement du navigateur. Pour tester l'application, il suffit de récupérer le nom d'utilisateur et le mot de passe de l'admin dans la page `adminScript.php`. Il est possible de créer un profil en modifiant ces informations et en lançant la page dans le navigateur. Attention, chaque appel de la page crée un nouvel utilisateur.
