une fois clone le projet 
vous devez changer les parametres de base du fichier .env 
le port 8889 -> 3306 , 
le nom de la base de donnees etc..

ensuite tapez <b>Composer install</b>
puis <b>npm install && npm run dev </b>

ensuite la migration <b>php artisan migrate</b>
et <b>php artisan db:seed --class=SqlFileSeeder </b>


puis <b> php artisan serve</b>

