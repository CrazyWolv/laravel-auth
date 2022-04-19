# Challenge Laravel

Nos visiteurs vont pouvoir proposer un artiste. Le responsable du projet, tu confies la tâche de mettre en ligne ce formulaire et une page de confirmation. Notre intégrateur a mis à ta disposition, l'intégration HTML et tu as une charte d'intégration pour créer la page de confirmation.

Ne te jette pas corps et âme dans le développement :
- Analyse ton objectif
- Liste toutes les étapes pour l'atteindre (ce n'est pas tricher que de faire un plan sur une feuille de papier)
- Ne fais pas tout en même temps, valide chaque étape avant de passer à la suivante (sans ça, c'est le meilleur moyen d'avoir le petit bug qui énerve et dont tu ne trouves pas la source)

La doc Laravel est très bien faite, [je te donne le lien direct](https://laravel.com/docs/9.x). Quelques éléments qui te seront nécessaires :
- [Les requêtes (pour récupérer les données)](https://laravel.com/docs/9.x/requests)
- [L'ORM Eloquent pour enregistrer des données dans le BDD](https://laravel.com/docs/9.x/eloquent#inserting-and-updating-models)
- [Upload de fichier](https://laravel.com/docs/9.x/filesystem#file-uploads) (Attention : actuellement nos images sont stockées dans le dossier public, il faut revoir donc tout le stockage de nos fichiers). Si tu n'arrives pas à gérer l'upload d'images, tu peux mettre dans un premier temps un champ texte, tu as quelques images à ta disposition dans le dossier /public/img.

## Bonus

Tu n'en as pas assez : tu peux activer le lien pour voter pour un artiste (j'aime ou je n'aime pas)... et stocker cette info dans la bdd. Pour l'instant, aucune sécurité, on peut voter de manière illimitée.


## Super-Bonus

Franchement tu exagères, tu n'es pas rassasié après tout ça... Tu peux faire en sorte qu'un visiteur ne puisse voter qu'une seule fois. Pour le moment, tu ne sais pas gérer l'authentification alors cherche une autre méthode (même si ce ne sera pas la solution la plus sécurisée).