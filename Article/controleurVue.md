# contrôleur et vue

nous allons créer les contrôleurs pour chaque vue que nous avons besoins ou utiliser un contrôleur ressource déjà créer.

l'identification et la gestion des rôles se ferra dans une autre section

il y a 5 *section* dans le site web:

* **Home Page**
* **Espace Accueil**
* **Espace Client**
* **Espace Entreprise**
* **Espace Organisateur**

## Home Page
|Home Page|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commente**||
|infos pratiques|||||
|Modèles de vélo|Edition||||
|News|pas de model|pas de contrôleur|||
|Réserver mon pass|Badge |Badge (ressource)|||

## Espace Accueil
|Accueil|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commente**|**URL**|
|Ajouter client|Client|Client (ressource)||BikeTest/client|
|liste clients|Client|Client (ressource)||Bike/client|
|liste clients - voir un client|Client|Client (ressource)||Bike/client/{n}|



> limiter l'accès de Accueil à la Edition en cours

## Espace client
|Client|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commente**|**URL**|
|Mon Pass|Client|client (ressource)||BikeTest/client/{n}/pass|
|réserver mon pass|Client|client (ressource)||BikeTest/client/{n}/passReserve|
|Mes tests|Client|Client (ressource)||BikeTest/client/{n}/test|
|recherche vélo|Bike| Bike (ressource) ||BikeTest/bike|
|Mes paramètres|Client|Client (ressource)|||

## Espace Entreprise
|Entreprise|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commente**|**URL**|
|Gérer produits|Product|Product (ressource)||BikeTest/product|
|Gérer les test|Test|Test (ressource)|*comment limité les produits de l'édition en cours ?*|Bike/test|
|Ajouter client au test|Test|Test (ressource)|*comment voir tout les clients (disponible) et en sélectionner un ||
|Fin de test|Test|Test (ressource)||BikeTest/test/{n}/edit|

> comment voir les clients et en sélectionner un ?
> doit ton faire apparaitre les pages Gérer les tests seulement quand les Edition est en cours ?
> comment on sépare la liste des tests par édition ?

## Espace Organisateur
|Organisateur|||||
|-|-|-|-|-|
|**Nom de page**|**model**|**contrôleur**|**commente**|**URL**|
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
