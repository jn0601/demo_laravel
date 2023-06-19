<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Hướng dẫn setup Laravel

Cài đặt: Git bash, composer
Update composer (Trường hợp muốn update các vendors cần thiết): Mở Git bash ở folder project, lệnh: composer update

Cài đặt package cần thiết cho composer: 
composer require paypal/rest-api-sdk-php
Ở đây "paypal/rest-api-sdk-php" là tên package

1. Trường hợp tạo mới hoàn toàn:

Tạo project laravel bằng composer: mở git bash ở folder muốn tạo project, nhập lệnh:
composer create-project --prefer-dist laravel/laravel projectlaravel
Ở đây "projectlaravel" chính là tên project muốn tạo.

Để mở project ở trình duyệt mà không cần vào /public:
Move tất cả files ở folder public ra bên ngoài folder chính, tạo 2 folders backend và frontend trong folder public, mỗi folder này chứa các folders cơ bản như: ckeditor, css, fonts, images, js.
Folder backend sẽ chứa các files thành phần giao diện của trang admin, folder frontend sẽ chứa các files thành phần giao diện của trang khách hàng.
Quản lý các files giao diện (HTML) ở folder resources/views. Ở đây chỉnh lại đường dẫn đến các folders css, js.
Quản lý đường dẫn ở routes/web.php

Các câu lệnh thường dùng trong laravel: mở git bash ở folder project laravel.
Tạo Model: php artisan make:model Admin
Ở đây "Admin" chính là tên model muốn tạo.
Tạo controller: php artisan make:controller AdminController
Ở đây "AdminController" chính là tên controller muốn tạo.
Tạo file migration để tạo table trong database: php artisan make:migration create_tbl_admin_table --create=tbl_admin
Ở đây "create_tbl_admin_table" là tên của migration, "--create=tbl_admin" để tự động tạo 2 public function up và down, function up chứa các attribute của table cần tạo, function down để drop table if exists.
Thực thi câu lệnh migration để tạo các table theo các file migration: php artisan migrate

2. Trường hợp muốn thay đổi database, domain:

Ở thư mục chính của project, mở file .env bằng editor bất kì (ví dụ notepad):
"APP_URL=http://localhost" là domain của project.

"DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testlaravel
DB_USERNAME=root
DB_PASSWORD=''"
Là thông tin kết nối của database.

Tiếp theo, vào config/database.php: ở mục 'connections' chỉnh host và database tương ứng.


