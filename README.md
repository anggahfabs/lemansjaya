<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# LemansJaya

A simple Laravel 12 website for a project.

---

## Teknologi yang Digunakan ✅

-   **Bahasa & Framework**: PHP 8.2, **Laravel 12**
-   **Dependency Manager**: Composer
-   **Frontend build**: Vite, Node.js, npm
-   **CSS**: Tailwind CSS v4
-   **Frontend libraries**: Alpine.js, AOS
-   **HTTP Client**: Axios
-   **Laravel plugin**: laravel-vite-plugin
-   **Testing**: Pest
-   **Queue / Background**: Laravel Queue
-   **Database**: SQLite (default), mendukung MySQL/MariaDB/Postgres
-   **Cache / Fast Storage**: Redis (opsional)
-   **Development (opsional)**: Laravel Sail, Pint, Pail

---

## Persyaratan Minimum 🔧

-   PHP ^8.2
-   Node.js (v16+ direkomendasikan)
-   Composer
-   npm / pnpm / yarn

---

## Cara Menjalankan Secara Lokal 🚀

1. Install dependency PHP & JS:

```bash
composer install
npm install
```

2. Salin file environment dan generate key:

```bash
cp .env.example .env
php artisan key:generate
```

3. Siapkan database (default sqlite):

```bash
php artisan migrate
```

4. Jalankan di mode development:

```bash
npm run dev
php artisan serve
```

5. Build untuk produksi:

```bash
npm run build
```

---

## Jalankan ✅

Jalankan test dengan:

```bash
php artisan serve
# atau
composer test
```

---

## Lisensi

**MIT**


Link Youtube: 