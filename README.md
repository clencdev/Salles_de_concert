# Salles_de_concert
Site qui gère l'actualité d'une salle de concert en PHP

## Explication du Projet

J'ai conçu un site web dédié à la gestion de l'actualité d'une salle de concerts appelée **OK**. Ce site, développé en PHP, s'appuie sur une base de données pour son fonctionnement. 

Initialement, j'ai développé une section **Actualités**, semblable à une page de blog, ainsi qu'une page **Événements** destinée à présenter les prochains concerts. L'idée était également de créer une page **Administration** pour que le propriétaire du site puisse gérer les actualités, les événements, et la planification des dates.

Cependant, j'ai rencontré des difficultés : la mise en relation de la base de données avec le calendrier JavaScript ne s'est pas déroulée comme prévu, mais du coup j'ai quand même pu finaliser cette partie du projet.

## Layout

Pour le footer, le header, et la barre de navigation, j'ai créé des layouts personnalisés. J'ai rencontré des difficultés pour déterminer les chemins des URL et le chemin du logo dans la navigation. Cependant, j'ai trouvé une solution en utilisant une constante PHP pour l'image du logo et `$_SERVER['HTTP_HOST']` pour les chemins des URL.

## Templates

J'ai créé des templates pour gérer toutes les actualités et chaque actualité individuellement, en utilisant `$_GET` pour récupérer les données. J'ai appliqué la même méthode pour les événements. Ces templates sont ensuite connectés à ma base de données, d'où ils récupèrent les informations nécessaires.

## La Page Index

La page d'accueil présente un carrousel mettant en évidence les derniers événements de ma base de données. Elle affiche également les six dernières actualités sous forme de blog, suivies d'une section "À propos de nous".

## Page Contact

J'ai également créé une page de contact qui permet aux utilisateurs de communiquer avec les organisateurs via un formulaire.

## Partie Administration

Pour la gestion du site, j'ai conçu une interface d'administration permettant à l'administrateur de publier des actualités et des événements. J'ai aussi mis en place une page de connexion et d'authentification pour restreindre l'accès à cette section aux seuls administrateurs. J'ai intégré un calendrier JavaScript dans cette partie pour faciliter la gestion des événements. Il est connecté avec ma base de donné, les dates des events sont marqué sue le calendrier qui permet de faciliter la gestion des dates

## ScriptPhp

J'ai créer un script php qui se déclenche lorsque je lance le navigateur. Il permet de créer un profil Admin, avec un mot de passe pour avoir accés à l'interface