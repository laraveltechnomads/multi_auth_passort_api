# Salary Slip Calculation
## Admin login url Local   '/adminside/loginpage'
- http://localhost/github/salary_calc/public/adminside/loginpage


## Run commands First time

- **composer install**
- **php artisan migrate**
- **php artisan storage:link**


## Existing Database tables cmd:
- **php artisan migrate**
- **composer update**


##  composer.json  
"require": {
  "php": "^7.3|^8.0",
        "andreaselia/laravel-api-to-postman": "^1.12",
        "fruitcake/laravel-cors": "^2.0",
        "guzzlehttp/guzzle": "^7.0.1",
        "laravel/framework": "^8.75",
        "laravel/passport": "^10.4",
        "laravel/sanctum": "^2.11",
        "laravel/tinker": "^2.5"
},
<br>

"autoload-dev": {
   "files": [
       "app/helper.php"
   ]
},


## .env    - udpate list
APP_NAME=Salary_Calc
APP_ENV=local
APP_URL=http://localhost/github/salary_calc/public
<br>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hostapps_taskmanagement
DB_USERNAME=root
DB_PASSWORD=

# multi_auth_passort_api
