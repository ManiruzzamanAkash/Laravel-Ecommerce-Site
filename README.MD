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

### Code Upgrade
1. Update Route declaration system according to `8.x`
2. Update some Helper files function like `str_slug()` to `Str::slug()`
3. `count()` deprecated issue
4. Check if any issues while running the project

## Run the beauty Laravel `8.x`