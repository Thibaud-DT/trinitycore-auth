# TrinityCore Authentification

TrinityCore Authentification package for Laravel 5.3
Require the package thibaud-dt/trinitycore-models available here : https://github.com/Thibaud-DT/trinitycore-models

- Add Provider in config/app.php
```
'providers' => [
    
    [...]
    
    ThibaudDT\TrinityCoreAuth\Providers\TrinityCoreAuthServiceProvider::class,
    
    [...]
]
```    


- Add Facade in config/app.php

```
'aliases' => [
    
    [...]
    
    'TrinityCoreAuth' => ThibaudDT\TrinityCoreAuth\Facades\TrinityCore::class,
    
    [...]
]
```  

- Do migration (please delete default laravel before)
```
php artisan migrate
```
- Generate Auth Route in routes/web.php with :

```
TrinityCoreAuth::routes(); 
```

- Add database connection in config/database.php

```
'connections' => [

        [...]

        'characters' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_CHARACTERS', 'localhost'),
            'database'  => env('DB_DATABASE_CHARACTERS', 'forge'),
            'username'  => env('DB_USERNAME_CHARACTERS', 'forge'),
            'password'  => env('DB_PASSWORD_CHARACTERS', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'world' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_WORLD', 'localhost'),
            'database'  => env('DB_DATABASE_WORLD', 'forge'),
            'username'  => env('DB_USERNAME_WORLD', 'forge'),
            'password'  => env('DB_PASSWORD_WORLD', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'auth' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST_AUTH', 'localhost'),
            'database'  => env('DB_DATABASE_AUTH', 'forge'),
            'username'  => env('DB_USERNAME_AUTH', 'forge'),
            'password'  => env('DB_PASSWORD_AUTH', ''),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ]

        [...]

    ],
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
            'model' => ThibaudDT\TrinityCoreAuth\Models\Auth\Account::class,
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