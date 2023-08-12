<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Trello by Laravel

## Création du projet

Voici la liste des commandes qui ont permis de créer le projet :
`composer create-project laravel/laravel trello`

`composer require laravel/breeze --dev`

`php artisan breeze:install blade`

`php artisan migrate`

`npm install`

`npm run dev`

`php artisan make:model -rfsmc Category`
`php artisan make:model -rfsmc Task`

La table qui relie les 2 précédentes pour assurer une relation many to many est une table 'pivot'.
Le modèle correspondant est créé de cette façon :

`php artisan make:model CategoryUser --pivot`


`php artisan db:seed`

## License
C'est GPL3 et elle se trouve dans le fichier LICENSE
