# laravel-trinitycore

- Add Provider in config/app.php
```
'providers' => [
    
    [...]
    
    ThibaudDT\LaravelTrinityCoreAuth\Providers\TrinityCoreServiceProvider::class,
    
    [...]
]
```    


- Add Facade in config/app.php

```
'aliases' => [
    
    [...]
    
    'TrinityCore' => ThibaudDT\LaravelTrinityCoreAuth\Facades\TrinityCore::class,
    
    [...]
]
```  

- Do migration (please delete default laravel before)
```
php artisan migrate
```
- Generate Auth Route in routes/web.php with :

```
TrinityCore::auth(); 
```



- Add this to .env :
```
DB_HOST_WORLD=localhost
DB_DATABASE_WORLD=world
DB_USERNAME_WORLD=root
DB_PASSWORD_WORLD=root

DB_HOST_CHARACTERS=localhost
DB_DATABASE_CHARACTERS=characters
DB_USERNAME_CHARACTERS=root
DB_PASSWORD_CHARACTERS=root

DB_HOST_AUTH=localhost
DB_DATABASE_AUTH=auth
DB_USERNAME_AUTH=root
DB_PASSWORD_AUTH=root
```
- Set DB_CONNECTION=auth in .env

- Change Users providers in config/auth.php

```
'providers' => [
        'users' => [
            'driver' => 'trinitycore',
            'model' => ThibaudDT\LaravelTrinityCoreAuth\Models\Auth\Account::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],
```
    
- Add the connection name in password configuration in config/auth.php

```
'passwords' => [
        'users' => [
            'provider' => 'users',
            'connection' => 'auth',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],
```