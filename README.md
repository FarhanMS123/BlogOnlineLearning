# Technoscape

This readme is created to describe Vasa Doctrina and how to setting it up. For laravel license, please see [this link](./laravel.md).

This branch are used for Backend, if you are looking for frontend HTML, please select the `Frontend` branch.

For design and mockup can be found [here](https://www.figma.com/file/Jn6LB6RqLYCGOkMBOcNDQ5/Mock-Up-VD?node-id=0%3A1).

## Entity Relationship Diagram
> There is nothing to see here.

## Set-up
There is no specific configuration.

Any configuration can be found in [Laravel Installation](https://laravel.com/docs/7.x/installation) and [Laravel Configuration](https://laravel.com/docs/7.x/configuration). 

## Testing (Dev Environment)
```
# /.env
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost
```

```bash
> composer install
> npm install
> npm run dev
> composer dump-autoload
> php artisan migrate
> php artisan storage:link
```

## Installation (Prod Environment)
```
# /.env
APP_ENV=production
APP_DEBUG=false
APP_URL=http://localhost # change to production DNS
```

```bash
> composer install
> npm install
> npm run prod
> composer dump-autoload
> php artisan migrate
> php artisan storage:link
```

## Features

### Middleware - Admin Access
```php
App\Http\Middleware\AdminChecks::class
```

This middleware is purposed to restrict access to admin dashboard. To apply this middleware, just set
`auth` and `admin` as middleware.

Setting as group in `web.php`
```php

Route::middleware(['auth', 'admin'])->group(function(){
    // ...
});

```

`admin` wouldn't check if user is authenticated, so `auth` also need to be set before `admin`. If a user is not admin, he will would directed to their dashboard which mentioned in `App\Providers\RouteServiceProvider::HOME`.

## Need to Check
> There is nothing to see here.

## Notes
- Query used in index page. All query listed can be combined.

```
GET /?search=[title|body]
GET /?by=[username]
GET /?sort_by=[asc|desc]
GET /?date_start=[interval]
GET /?date_end=[interval]
```

## TODO
- [ ] make admin middleware.
- [ ] make index function.
- [ ] make post function.
- [ ] make edit post function.
- [ ] make show profile function.
- [ ] make edit profile function.
- [ ] integrate FE to BE.
- [ ] testing.
- [ ] cleaning.

### Suspended
> There is nothing to see here.

### Next Up
> there is nothing to see here...

> remove all tasks above while everything has done, wants to continue to next tasks, or would be merged to the master routes and serve in production. Remember to move routes from `debug` middleware to the main routes.

## Security Issue
- Please restrict access to this root in production mode.
- Because of password exposed in `.env` for mailing, use `no-reply` account to minimize the risk.
- To secure user identity, file below uploaded could be secured.

## References
- Recaptcha Implementation: https://www.lab-informatika.com/implementasi-google-recaptcha-pada-laravel
