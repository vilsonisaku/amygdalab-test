## Docker , Laravel 9 , php 8

### To get started clone and cd this repository and run:
```
composer install
./vendor/bin/sail up
```

### Then use command "docker ps" to get the image id and login with below command:

```
docker exec -it <image id> /bin/bash
```

### Then run composer commands below

```
php artisan migrate
php artisan passport:install
php artisan db:seed
```