composer require ideasvn/rbac dev-master

app.php

Ideasvn\Rbac\Providers\RbacServiceProvider::class,

php artisan vendor:publish --provider="Vendor\Providers\PackageServiceProvider" --tag="migrations"