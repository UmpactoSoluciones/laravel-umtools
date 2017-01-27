# laravel-umtool
UMTool is a compilation of tools that could help the development on Laravel 5.
## Instalation

To install Umpacto Soluciones Tools you need to install by composer: 
```
composer require umpactosoluciones/laravel-umtools
```
Then, you could add on config/app.php
```php
'providers' => [
      ...
         UmpactoSoluciones\Tools\ToolsServiceProvider::class,
      ...
    ],
```

## Usage

If you need to create a repository you could use:
```
php artisan make:repository UserRepository --model=User
```
