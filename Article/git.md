# commande git 

## initiation

    git init

    git clone http://example.com

> Attention les dossiers **vendor**, **node_module** et **.env** sont à rajouter dans votre dossier personnel

## ajouter un fichier

    git add fichier.txt

pour ajouter tout les fichiers

    git add .

## supprimer un fichier 

    git rm fichier.txt

## valider les modifications

    git commit -m "Commantaire du commit"

## envois des modification a la dépôt principale

    git push

ou

    git push origin master

## recharger le dépôt principale

    git pull

## charger seulement le fichier inéxistant 

 git fetch origin

 ## interface graphique

    gitk