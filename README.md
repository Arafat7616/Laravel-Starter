## Setup
create a database named `login`

run,
```sh
	composer install && npm install && cp .env.example .env && php artisan key:generate && composer require laravel/passport && php artisan migrate && php artisan passport:install && npm run dev
```
Then, edit \vendor\laravel\framework\src\Illuminate\Foundation\Http\Kernel.php

```php
    protected $middlewarePriority = [
		\App\Http\Middleware\StudentProvider::class,
		\App\Http\Middleware\FacilitatorProvider::class,
		\App\Http\Middleware\InstitutionProvider::class,
...
];
```

make sure to add at the top of `$middlewarePriority`

### In case of fresh migration
```sh
php artisan migrate:fresh && php artisan passport:install --force && php artisan serve
```

### To Upload Large Video File
Update post_max_size and upload_max_filesize in php.ini

### Third party software

#### Graphviz - generate er diagram
Setup [Graphviz](https://graphviz.org/), add to env variable and run
```sh
php artisan generate:erd
```
#### FFMPEG - Video Conversion
download [FFMPEG](https://www.gyan.dev/ffmpeg/builds/ffmpeg-release-full.7z) , add location to server environment variable and .env

> NB: Image Rendering requires php [exif](https://www.php.net/manual/en/exif.installation.php) extension to be enabled

