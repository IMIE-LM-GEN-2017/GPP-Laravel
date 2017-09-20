Màj: 20/06/2017

# Note explicative sur les différents champs de la base

Ce document a été créé lors de la définition initiale de la base de données. Il pourrait ne pas être à jour avec les dernières modifications, mais reste pertinent sur les principes.

## users

  - **first_name**, **last_name**, **email**, **username**, **password** : bah :)
  - **gender** : _int, NOT NULL_ : on assignera un genre à un numéro (ex Homme: 0, Femme: 1). Ce n'est pas la peine d'avoir une table "genres" juste pour deux entrées
  - **role**: _int, NOT NULL, DEFAULT "user"_ : "rôle" de l'utilisateur _vis à vis_ du programme: user ou admin. Permettra de gérer certains droits.
  - **status** : _int, NOT NULL, DEFAULT 0_ : "Etat" de l'utilisateur: actif/bloqué/supprimé. Comme les genres, on ne va pas créer une table pour ça.
  - **is_teacher**: _bool, NOT NULL, DEFAULT false_ : "flag" définissant si l'utilisateur est capable de dispenser des cours.

## skills

    - **name**, **description**: :)

### users can teach

  - **level**: _int(1)_, _NOT NULL_, _DEFAULT 0_ : Niveau de l'utilisateur dans la matière.

### users has skills

  - **level**: _int(1)_, _NOT NULL_, _DEFAULT 0_ : Niveau du prof dans la matière.

## messages

  - **title**, **content**...
  - **read**: _bool, NOT_NULL, DEFAULT false_ : "flag" définissant si le destinataire a lu le message.

## todolists
Cette table est présente car on part du principe qu'un utilisateur peut avoir plusieur listes de tâches.

  - **name**

## tasks

  - **name**, **description**
  - **status**: _int(1), NOT NULL, DEFAULT 0_: Status de la tâche (0: en attente, 1: en cours, 2: terminée). On ne créée pas de teble spécifique
  - **start_date**: _datetime, NULL_: pour une tâche avec un début et une fin, la date de début.
  - **due_date**: _datetime, NULL_: pour une tâche avec une date butoir, cete même date.
  - **start_date**: _datetime, NULL_: pour une tâche avec un début et une fin, la date de fin réelle (lorsque l'utilisateur a décidé qu'il avait fini).
  - **creation_date**: _datetime, NOT NULL_: date de création de la tâche
  - **modification_date**: _datetime, NOT NULL_: date de la dernière modification de la tâche

## promotions

  - **start_date**: _date, NOT NULL_: date de début de la promo (ex: 19 juin 2017)
  - **start_date**: _date, NOT NULL_: date de fin de la la promo (ex: 19 sept 2017)

## events

  - **start_time**: _datetime, NOT NULL_: date et heure de début du cours
  - **start_time**: _datetime, NOT NULL_: date et heure de fin du cours

## presences

  - **is_present**: _boolean, NOT NULL, DEAFULT false_: "flag" pour définir si un utilisateur était présent.
  - **excuse**: _varchar(255), DEFAULT NULL_: motif d'absence.

## centers

  - **name**, **address**, **zip**, **city**

## rooms
  - **name**
