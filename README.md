<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Deploy project
#Database Setup

This app uses MySQL, to use MySQL, make sure you install it, setup a database and then add your db credentials(name it "laravel") to the .env.example file and rename it to .env and add mail config:

MAIL_DRIVER=mailgun

MAIL_MAILER=smtp

MAILGUN_DOMAIN=postmaster@sandboxaa5e7642fe644e84935cebc4f90d7003.mailgun.org

MAILGUN_SECRET=f8e1e3d8fcc703e2e03336016648e2ce-4e034d9e-9c8bf960

MAIL_HOST=smtp.mailgun.org

MAILGUN_ENDPOINT=api.eu.mailgun.net

MAIL_PORT=587

MAIL_USERNAME=postmaster@sandboxaa5e7642fe644e84935cebc4f90d7003.mailgun.org

MAIL_PASSWORD=4a0df3bb0e3167ed4d97376f62cef631-4e034d9e-00652236

MAIL_ENCRYPTION=tls

MAIL_FROM_ADDRESS="mrvladimir011@gmail.com"

MAIL_FROM_NAME="${APP_NAME}"

#Then run

composer install

#Migrations

#To create all the nessesary tables and columns, run the following

php artisan migrate

#Seeding The Database

#To add the dummy listings with a single user and currencies, run the following

php artisan db:seed

#Running The App

php artisan serve

#Run schedule in order to have api updates

php artisan schedule:work

set mail addres where to send mail in app/Service/Currency/Provider/Repository/CurrencyRepository.php line 59
