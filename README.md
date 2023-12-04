## About Holiyou
Holiyou is a web app that focused on tourist destination in malang. Holiyou shows detail and also review about the tourist destination and also it has ticket purchase feature, so the visitor can order it via this website. Holiyou is built on Laravel 9 and you can modif this app as you want.

this is the manualbook for using holiyou: [https://drive.google.com/file/d/1AK59HNnSL3GMpVmFyD_ptwKnENw6QCy6/view?usp=sharing]


## Requirements

PHP >= 7.4

Composer

Node.js

npm

Xampp or other server app

### Installation

1. Open your terminal and navigate to any folder to put the project
2. clone the repository
   
   git clone [https://github.com/levina13/holiyou.git]

4. navigate to the project directory
   
   cd holiyou

6. copy '.env.example file to .env and configure the database and other settings:
7. Install PHP dependencies with Composer
   
   composer install
   
9. Generate the application key:
    
    php artisan key:generate
   
11. Run Mysql server in Xampp
    
13. Migrate the database with dummy data (optional):
    
    php artisan migrate --seed
    
15. Run the Laravel development server:
    
    php artisan serve
    
17. Access the project through the browser at http://localhost:8000. 

