<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Feane

Website Feane adalah website ecommerce burger , dengan produk yang lezat

## Erd

![ERD](erd/erd_feane.png)

## Cara Install

git clone https://github.com/Necrophoo/project-final.git
composer update
cp .env.example .env
php artisan db:seed --class=LoginSeeder
php artisan db:seed --class=KategoriSeeder
php artisan migrate
php artisan serve

/ ( untuk halaman user)

/login (login ke halaman admin)
email admin@gmail.com
password admin1234

untuk contoh gambar ada di public/storage
