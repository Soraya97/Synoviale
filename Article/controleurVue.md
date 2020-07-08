# Contrôleur et vue

Nous allons créer les contrôleurs pour chaque vue que nous avons besoins ou utiliser un contrôleur ressource déjà créé.

L'identification et la gestion des rôles se ferra dans une autre section.

Il y a 5 *sections* dans le site web:

* **Homepage**
* **Espace Accueil**
* **Espace Client**
* **Espace Entreprise**
* **Espace Organisateur**

## Homepage
|Home Page||||
|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commentaire**|
|Infos pratiques|Pas de model|Pas de contrôleur||
|Modèles de vélo|Product|Product (ressource)||
|News|Pas de model|Pas de contrôleur||
|Réserver mon pass|Badge |Badge (ressource)|Méthode store()|
|Se connecter|Compte |Compte|Méthode connect()|

> Si l'utilisateur n'est pas connecté, il est redirigé sur la page de connexion lorsqu'il cherche à réserver un pass.

## Espace Accueil

|Accueil|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commentaire**|**URL**|
|Ajouter client|Client|Client (ressource)|Méthode store()|client/create|
|Liste clients|Client|Client (ressource)|| client             |
|Liste clients - voir un client|Client|Client (ressource)|Méthode show()|client/{client_id}|

> Limiter l'accès de l'Accueil à l'Édition en cours.

## Espace client
|Client|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commentaire**|**URL**|
|Mon Pass|Badge|Badge (ressource)|| pass/{client_id} |
|Réserver mon pass|Badge|Badge (ressource)|Méthode store()| pass/create      |
|Mes tests|User|User (ressource)|Pas à coder|                  |
|Recherche vélo|Bike| Bike (ressource) |App\Providers\AppServiceProvider.php permet de passer une donnée à plusieurs vues.| velo             |
|Mes paramètres|User|User (ressource)||user/{user_id}|
|Créer un compte|Compte|Compte (ressource)|Méthode store()|compte/create|
|Paiement|Badge|Badge|Pas à coder||

## Espace Entreprise
|Entreprise|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commentaire**|**URL**|
|Gérer produits|Product|Product (ressource)||BikeTest/product|
|Gérer les test|Test|Test (ressource)|*comment limité les produits de l'édition en cours ?*|Bike/test|
|Commencer un test|Test|Test (ressource)|*comment voir tout les clients (disponible) et en sélectionner un -> selon QR code* ||
|Fin de test|Test|Test (ressource)|Méthode store()|BikeTest/test/{n}/edit|

> Comment voir les clients et en sélectionner un ?
> Doit-on faire apparaître les pages et gérer les tests seulement quand les Edition sont en cours ?
> Comment sépare-t-on la liste des tests par édition ?

## Espace Organisateur
|Organisateur|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commentaire**|**URL**|
|Général|Event|Event (ressource)||BikeTest/event|
|Général - Gérer Entreprise|Company|Company (ressource)||BikeTest/compagny|
|Général - Gérer personne de contact|Contact|Contact (ressource)||BikeTest/contact|
|Général - Gérer marques|Marque|Marque (ressource)||BikeTest/marque|
|Général - Gérer staff|Staff|Staff (ressource)||BikeTest/staff|
|Général - Gérer clients|Client|Client (ressource)|*voir avec la Espace Accueil (url)*|BikeTest/client|
|Edition|Edition|Edition (ressource)||BikeTest/edition/|
|Edition - infos édition||Edition (ressource)||BikeTest/editions/{n}/edit|
|Edition - gérer jours de tests|Edition|Edition (ressource)|||
|Edition - Gérer marques|Edition|Edition (ressource)|||
|Edition - Gérer staff|Edition|Edition (ressource)|||
