composer require ideasvn/rbac dev-master

app.php

Ideasvn\Rbac\RbacServiceProvider::class,

php artisan vendor:publish --provider="Ideasvn\Rbac\RbacServiceProvider" --tag="migrations"
php artisan vendor:publish --provider="Ideasvn\Rbac\RbacServiceProvider" --tag="config"

