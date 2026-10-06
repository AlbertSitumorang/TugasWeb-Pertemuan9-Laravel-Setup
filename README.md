# TugasWeb-P9-LaravelSetup

Tugas Rutin 9 - Setup Laravel (Pemrograman Web)

## Langkah Install
1. Clone repo ini: `git clone <url-repo>`
2. Masuk folder: `cd TugasWeb-P9-LaravelSetup`
3. Install dependency: `composer install`
4. Copy file environment: `cp .env.example .env`
5. Generate key: `php artisan key:generate`
6. Buat database MySQL bernama `laravel_p9` di phpMyAdmin
7. Sesuaikan `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` di file `.env`
8. Jalankan migration: `php artisan migrate`
9. Jalankan server: `php artisan serve`
10. Buka `http://127.0.0.1:8000`

## Struktur Folder
- `app/Models` - Model (representasi tabel database)
- `app/Http/Controllers` - Controller (logika aplikasi)
- `routes/web.php` - Daftar route/URL aplikasi
- `resources/views` - File Blade template (tampilan HTML)
- `database/migrations` - Skema struktur tabel database
- `.env` - Konfigurasi environment (database, dll)

## Route yang Tersedia
- `/` - Halaman Home
- `/about` - Halaman About
- `/contact` - Halaman Contact
- `/skills` - Data dinamis dari array
- `/mahasiswa` - Data dari database (Model + Controller)
- `/hello/{nama}` - Bonus, route parameter