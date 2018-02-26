# Site Documentation participative (sur le modèle de Stack Overflow)
L'idée de ce projet est de créer un site de **Questions/Réponses/Commentaires communautaire** sur des sujets donnés (ex: un jeu vidéo, un langage informatique, etc) afin que les utilisateurs se répondent et s'aident sur ces sujets.
L'utilisateur qui pose la question pourra séléctionner la réponse qui répond à son problème et ainsi donner des points de réputation à l'utilisateur ayant posté la réponse.
Ces points de réputation permettront aux utilisateurs d'obtenir le grade de SuperUtilisateur (ils pourront alors éditer certaines réponses/questions/commentaires). 


## User Stories 
-_**US1** : En tant que Visiteur_, je veux pouvoir consulter (**browse**) les Questions et leurs Réponses pour donner l'envie de participer à la communauté.  
-_**US2** : En tant que Visiteur_, je veux pouvoir lire (**Read**) une Question et ses Réponses pour trouver l'information.  
-_**US3** : En tant que Visiteur_, je veux pouvoir m'inscrire (**Register**) sur le site afin de participer.  
-_**US4** : En tant qu'utilisateur_, je veux pouvoir poser (**Add**) des Questions et répondre aux questions posées pour gagner des points de réputation.  
-_**US5** : En tant qu'utilisateur_, je veux pouvoir modifier (**Edit**) ou supprimer (**Delete**) les Questions/Réponses/Commentaires que j'ai posé pour garder le site propre.  
-_**US6** : En tant qu'utilisateur_, je veux pouvoir gagner de la réputation afin de passer d'utilisateur à SuperUtilisateur.  
-_**US7** : En tant que SU (SuperUtilisateur)_, je veux pouvoir modifier (**Edit**) ou supprimer (**Delete**) les Questions/Réponses/Commentaires ayant moins de 15 Commentaires pour éviter les éléments contre productifs.  
-_**US8** : En tant qu'Admin_, je veux pouvoir modifier (**Edit**) ou supprimer (**Delete**) toutes les Questions/Réponses pour modérer.  
-_**US9** : En tant qu'Admin_, je veux pouvoir bannir (**Delete User or SuperUser**) un Utilisateur ou un SuperUtilisateur afin de garder le site cohérent (pas de trolls, etc).  
-_**US10** : En tant qu'Admin_, je veux pouvoir promouvoir ou retrograder (**Promote or Demote**) un Utilisateur ou SU pour mieux gérer le contenu du site.  

## Lots Fonctionnels (par ordre de priorité : 1 = priorité haute)
-**LOT 1** : Système d'authentification: **US3** (Inscription / Connexion -> User).  
-**LOT 2** : Système de "Post" des Questions et des Réponses: **US1, US2, US4, US5, US7** (BREAD).  
-**LOT 3** : Système de Commentaires sur les Questions et sur les Réponses: **US4, US5, US7** (BREAD).  
-**LOT 4** : Système de Points de Réputation + Rôles : **US6, US8, US9** (-> SU + Admin).  
-**LOT 5** : Système de Promote / Demote : **US10**.  

## Diagrammes 
Le diagramme des classes (**ClassDiagram.jpg**) et le UseCaseDiagram (**UseCaseDiagram.jpg**) sont consultables dans **/documentation**.

## Maquettes
-**FrontPage V1** (susceptible d'être repensée): https://wireframe.cc/mcIEaG  
-**Page Documentation V1** (susceptible d'être repensée): https://wireframe.cc/ygnuWm   

## Slide présentation  
https://slides.com/notthebees/deck-5/live#/