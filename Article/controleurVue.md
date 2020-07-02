# Contrôleur et vue

Nous allons créer les contrôleurs pour chaque vue que nous avons besoins ou utiliser un contrôleur ressource déjà créé.

L'identification et la gestion des rôles se ferra dans une autre section.

Il y a 5 *sections* dans le site web:

* **Home Page**
* **Espace Accueil**
* **Espace Client**
* **Espace Entreprise**
* **Espace Organisateur**

## Home Page
|Home Page|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commente**||
|Infos pratiques|||||
|Modèles de vélo|Bike|Bike (ressource)|||
|News|pas de model|pas de contrôleur|||
|Réserver mon pass|Badge |Badge (ressource)|||

> Si l'utilisateur n'est pas connecté, il est redirigé sur la page de connexion lorsqu'il cherche à réserver un pass.

## Espace Accueil

|Accueil|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**comment**|**URL**|
|Ajouter client|Client (User ?)|Client (ressource) (User ?)||BikeTest/client|
|Liste clients|Client (User ?)|Client (ressource) (User ?)||Bike/client|
|Liste clients - voir un client|Client (User ?)|Client (ressource) (User ?)||Bike/client/{n}|

> Limiter l'accès de l'Accueil à l'Édition en cours.

## Espace client
|Client|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**comment**|**URL**|
|Mon Pass|Badge|Badge (ressource)||BikeTest/client/{n}/pass|
|Réserver mon pass|Badge|Badge (ressource)||BikeTest/client/{n}/passReserve|
|Mes tests|Client (User ?)|Client (ressource)||BikeTest/client/{n}/test|
|Recherche vélo|Bike| Bike (ressource) |App\Providers\AppServiceProvider.php permet de passer une donnée à plusieurs vues.|BikeTest/bike|
|Mes paramètres|Client (User ?)|Client (ressource)|||

## Espace Entreprise
|Entreprise|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commente**|**URL**|
|Gérer produits|Product|Product (ressource)||BikeTest/product|
|Gérer les test|Test|Test (ressource)|*comment limité les produits de l'édition en cours ?*|Bike/test|
|Ajouter client au test|Test|Test (ressource)|*comment voir tout les clients (disponible) et en sélectionner un* ||
|Fin de test|Test|Test (ressource)||BikeTest/test/{n}/edit|

> Comment voir les clients et en sélectionner un ?
> Doit-on faire apparaître les pages et gérer les tests seulement quand les Edition sont en cours ?
> Comment sépare-t-on la liste des tests par édition ?

## Espace Organisateur
|Organisateur|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**comment**|**URL**|
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
