# Laravel Ecommerce 
A Complete Ecommerce Website with all of the implementations of Laravel. It's an output of Series tutorial published in youtube.

----


## Upgrade Guide from `5.6` to `8.x`

### Dependecy Upgrade
1. Upgrade Laravel Version `8.x` in `composer.json`
2. Upgrade all other dependency versions
3. Change `app\Exceptions\Handler.php` file to new one
4. Add new files in `Http\Middleware` folder according to new Laravel 8
5. Change auth scaffoldings with `npm`
6. Uncaught ReflectionException: Class env does not exist - `php artisan clear` `php artisan config:clear`
7. Class 'Fideloper\Proxy\TrustProxies' not found - `composer require fideloper/proxy`
8. Delete `storage/framework/views/*` all files or if possible delete files also from `cache/data/*`

### Code Upgrade
1. Update Route declaration system according to `8.x`
2. Update some Helper files function like `str_slug()` to `Str::slug()` - https://laravel.com/docs/8.x/helpers#method-str-slug
3. Update some Helper files function like `str_random()` to `Str::random()` - https://laravel.com/docs/8.x/helpers#method-str-random
4. `count()` deprecated issue
5. Auth system updated with frontend sanctum or -
   1. Install laravel/ui - `composer require laravel/ui`
   2. Install Node JS and npm
   3. https://nodejs.org/en/
   4. npm install - `npm i`
6. Check if any issues while running the project

## Run the beauty Laravel `8.x`