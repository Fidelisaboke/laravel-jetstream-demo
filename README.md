# laravel-jetstream-demo

## About:

Repo for trying out various functionalities and designs for using Laravel Jetstream in Laravel app development.
Various tasks done or achieved in exploring Jetstream and adding functionality are outlined in this README.

### Project Setup
```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run build
```
## Tasks:

### Installation of Laravel Jetstream with Livewire scaffolding:
Laravel Jetstream installation guide: [Installation | Laravel Jetstream](https://jetstream.laravel.com/installation.html)

### Add CRUD:
- Useful Videos
   1. [Add CRUD with User Roles](https://www.youtube.com/watch?v=pyOcSEkG4Q0)

- Repos used (Some code borrowed from these repos)
   1. [Laravel-Jetstream-CRUD-Roles](https://github.com/LaravelDaily/Laravel-Jetstream-CRUD-Roles) - For Tasks and User Roles CRUD

### Add Lock Screen to Website:
- Useful Video:
    1. [How to Lock Screen Laravel](https://youtu.be/TbU79IegZDQ?si=-A3QByfFRaeYhTHb)

- Steps:
    1. Create lock screen view `lock.blade.php` - The UI displayed when website is locked
       - Has a field where the user will enter a password to unlock the website
       - A form that sends a POST request to an 'unlock' URL
    2. Create a LockScreenController (two methods):
       - show() - returns the lock screen view
       - unlock() - validates and verifies the password entered on lock screen view
    3. Create a middleware `CheckIfLocked.php`:
       - Used to check if the website is locked
       - Add it to `bootstrap\app.php` (Laravel 11)
        ```
        php artisan make:middleware CheckIfLocked
        ```
       - Apply it to routes 
    4. Add a 'Lock Screen' button to 'app.blade.php'
    5. Update app.js with automatic lock functionality, and configure the Lock Screen button
       - Automatic: Listen to key presses, mouse movements, e.t.c, create a redirection function and `setTimeout` for it
       - Manual: Redirect on clicking the Lock Screen button `window.location.href='\lock'`
    6. Add app.js to lock screen view: `@vite(['resources/js/app.js'])`
    7. Add routes:
        ```
        Route::get('/lock', [LockScreenController::class, 'show'])->name('lock');
        Route::post('/unlock', [LockScreenController::class, 'unlock'])->name('unlock');
        ```
    8. Run `npm run build` on the terminal

## Complementary Tools:
These tools can go well with Laravel Jetstream:
1. [Postmark Email Service](https://postmarkapp.com/) 
2. [Tailwind UI - Paid](https://tailwindui.com/)
3. [Float UI - Free and Open Source](https://floatui.com/)
4. [tailwindcomponents - Tailwind CSS Repo](https://tailwindcomponents.com/)
5. [ThemeSelection.com - Good UI starter kits](https://themeselection.com/)

