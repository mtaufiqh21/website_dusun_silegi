## Installation

1. Clone repositori
```
git clone https://github.com/codegod61/website_dusun_silegi.git
```

2. Masuk direktori website dusun silegi
```
cd website_dusun_silegi
```

3. Install package bawahan laravel
```
composer install
```

4. Rename .env.example ke .env
```
copy .env.example .env
```

5. Generate key
```
php artisan key:generate
```

6. Open .env lalu ubah konfigurasi database sesuai yang ingin dipakai
```
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

7. Jalankan Migration & Seeder
```bash
php artisan migrate --seed
```

8. Jalankan website
```bash
php artisan serve
```

## Admin Account
- Email : admin@gmail.com
- Password : admin


## License

The <b>DusunSilegi</b> is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
