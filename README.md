## Instalasi

Clone Repo ini

```bash
  git clone https://github.com/keyshaathallias/laravel-dasar
```

Pindah direktori

```bash
  cd laravel-dasar
```

Install depedensi

```bash
  composer install
```

Salin file .env.example

```bash
  cp .env.example .env
```

Buat database dan hubungkan di file .env

```bash
  DB_DATABASE=resep
```

Jalankan migrasi

```bash
  php artisan migrate --seed
  # atau
  php artisan migrate:fresh --seed
```

Jalankan server

```bash
  php artisan key:generate
  php artisan serve
```
