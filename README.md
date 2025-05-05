# Gestion_des_affectations
Application pour le gestion des affectation d'encadreur pour la soutenance 2026

# Cahier des charges

1. Objectif du projet
Développer une application permettant aux étudiants de soumettre un cahier des charges de projet, de désigner un binôme, et à l'administrateur d’attribuer un encadreur à chaque groupe.

2. Acteurs du système
2.1 Étudiant
S’authentifie dans la plateforme.

Soumet un cahier des charges.

Désigne un binôme au moment de la soumission.

Modifie les informations de son profil.

Visualise l’état de son dossier via un tableau de bord (Dashboard).

Voit un bouton "Ajouter un cahier des charges" tant qu’il n’a pas encore soumis.

Après soumission :

Voit un bouton "Rappeler" si aucun encadreur n’a encore été attribué.

Ce bouton disparaît dès qu’un encadreur lui est attribué par l’admin.

Le nom de l’encadreur s’affiche.

Si un étudiant est ajouté comme binôme par un autre :

Il ne peut plus soumettre un cahier des charges individuellement.

2.2 Administrateur
S’authentifie dans la plateforme.

Gère les encadreurs :

Ajoute un encadreur.

Supprime un encadreur.

Visualise la liste des encadreurs.

Gère les étudiants :

Visualise la liste des étudiants inscrits.

Supprime un étudiant.

Gère les cahiers des charges :

Visualise la liste des cahiers soumis.

Associe un encadreur à chaque cahier des charges soumis.

# Technologies
Utilisation de composer pour gestion automatique des autoloads
composer init

//apres  chaque modification de classe
composer dump-autoload 


