# Running application
  https://finnskjold.dk
  frontend_angular
    ng serve
  http://localhost:4200
  backend_laravel
    php artisan serve
# Løsning på CRUD app.cd b
    Udført af Finn Skjoldager 2023-01-06

# Backend Laravel
# Scabelon
    https://github.com/CodAffection/Angular-7-Master-Detail-CRUD-with-Web-API

# Create laravel project
    composer create-project laravel/laravel backend_laravel

# Run application http://localhost:8000
    composer install
    http://localhost/phpmyadmin/
    .env.example   DB_CONNECTION=mysql
    copy .env.example to .env
    php artisan serve
    http://localhost:8000/api/order
# Error
     php artisan dbcommand 
        App\Console\Commands\Test1Command.php
# create service

    php artisan make:controller OrderController --resource
    php artisan make:controller CustomerController --resource
    php artisan make:controller ItemController --resource
    php artisan make:controller OrderItemController --resource

# Create model
    http://localhost/phpmyadmin/
    https://laravel.com/docs/4.2/schema#adding-columns
    php artisan make:model Order
    php artisan make:migration create_order
    php artisan migrate

# Create testdata
    php artisan make:seeder OrderSeeder
        Customer
        Item
        Order
        OrderItem
    php artisan db:seed CustomerSeeder
    php artisan db:seed ItemSeeder

# Fetch data form database
    https://blog.quickadminpanel.com/list-of-21-artisan-make-commands-with-parameters/
    php artisan db:show
    php artisan db:table custome
    php artisan tinker 
        App\Models\Customer::all();

# Route/API create
https://laravel.com/docs/9.x/controllers

# blocked by CORS policy: No 'Access-Control-Allow-Origin' header is
   composer require fruitcake/laravel-cors
   FruitcakeCorsHandleCors::class
   class Kernel extends HttpKernel { protected $middleware = [
# Frontend Angular
# Run application http://localhost:4200
    ng serve
# Run Laravel
    php artisan serve --port=9000
# git
    git config --global user.email "finn.skjolds@gmail.com"
    git config --global user.name "finn.skjolds@gmail.com"
    git config --global user.password "Hund22hund"
    git config --global --list
    git commit -m "ok"
# git …or create a new repository on the command line
echo "# -finnskjold.dk-frontend" >> README.md
git init
git add README.md
git add *
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/FinnSkjoldager/Take-away-bestilling1.git
git push -u origin main
# git …or push an existing repository from the command line
git remote add origin https://github.com/FinnSkjoldager/Take-away-bestilling1.git
git branch -M main
git push -u origin main
# change .gitignore
git init
git rm -r --cached -f .
git commit -m "first commit"
git add .
# Angular Breakponts
https://www.digitalocean.com/community/tutorials/angular-breakpoints-angular-cdk
