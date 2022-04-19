# Mise en place du champ upload Proposition artiste

## Modification sur le formulaire HTML

2 modifications :

Au niveau du tag `<form>`, il faut ajouter `enctype="multipart/form-data"` :

```html
<form action="{{ route('submitArtist') }}" method="POST" enctype="multipart/form-data" class="form-default form-artiste">
```

Il faut maintenant un input de type file :

```html
<div class="input-group">
    <label class="main-label" for="artist-image">Photo de l'artiste</label>
    <input type="file" name="image" id="artist-image">
</div>
```
A noter que ce type de champs ne peut pas utiliser `old()`

## Information sur le stockage

Les fichiers seront stockés dans notre repo dans le dossier `/storage/app/public/images/`. Le dossier `/storage/app/public` bien qu'il ne soit pas dans le dossier présent dans `/public` sera accesible grâce à un lien symbolique géré par Laravel. Vous pouvez regarder dans le template `index.blade.php` comment l'url d'accès à l'image est générée.

***NOTE IMPORTANTE :*** il faudra déplacer tous les fichiers qui nous ont servis qui étaient dans `/public/img` et les mettre dans `/storage/app/public/images/`. Puis modifier le contenu dans la table "artists" pour ajouter devant chaque nom de fichier : "public/images/".

J'ai mis à jour mes fichiers de migrations, vous pouvez le recopier pour voir le resultat.

Si vous souhaitez supprimer tout le contenu de la BDD et refaire les migrations voici la commande :

```sh
./vendor/bin/sail artisan migrate:fresh --seed
```

## Liens utiles

- [File Uploads](https://laravel.com/docs/9.x/filesystem#file-uploads)
- [Url pour les fichiers dans le storage](https://laravel.com/docs/9.x/filesystem#file-urls)