# API Showroom Mobil

REST API untuk mengelola data mobil showroom menggunakan Laravel 12 dan MySQL. Project ini dibuat sebagai tugas akhir Bootcamp Website Backend BTNG.

## Fitur

- Menampilkan seluruh data mobil.
- Menampilkan detail mobil berdasarkan ID.
- Menambahkan data mobil.
- Memperbarui data mobil.
- Menghapus data mobil.
- Validasi input.
- Dokumentasi API interaktif menggunakan Scramble.

## Teknologi

- PHP
- Laravel 12
- MySQL
- REST API
- Laravel Scramble

## Data Mobil

Setiap data mobil memiliki atribut:

- `id`
- `nama`
- `brand`
- `harga`
- `tahun`
- `transmisi`
- `bahan_bakar`
- `status`
- `foto`

## Instalasi

1. Clone repository:

   ```bash
   git clone URL_REPOSITORY
   ```

2. Masuk ke folder project:

   ```bash
   cd NAMA_FOLDER
   ```

3. Instal dependency:

   ```bash
   composer install
   ```

4. Salin `.env.example` menjadi `.env`, kemudian sesuaikan konfigurasi database.

5. Generate application key:

   ```bash
   php artisan key:generate
   ```

6. Jalankan migrasi database:

   ```bash
   php artisan migrate
   ```

7. Isi data contoh:

   ```bash
   php artisan db:seed --class=MobilSeeder
   ```

8. Jalankan server lokal:

   ```bash
   php artisan serve
   ```

## Endpoint API

Base URL lokal: `http://127.0.0.1:8000/api`

| Method | Endpoint | Fungsi |
|---|---|---|
| GET | `/mobil` | Menampilkan semua mobil |
| GET | `/mobil/{id}` | Menampilkan detail mobil |
| POST | `/mobil` | Menambahkan mobil |
| PUT | `/mobil/{id}` | Memperbarui mobil |
| PATCH | `/mobil/{id}` | Memperbarui sebagian data |
| DELETE | `/mobil/{id}` | Menghapus mobil |

## Dokumentasi API

Setelah server berjalan, buka:

`http://127.0.0.1:8000/docs/api`

## Format Respons

Respons API menggunakan JSON dengan atribut `message` dan `data`. Jika validasi gagal, API mengembalikan status HTTP `422`. Jika data tidak ditemukan, API mengembalikan status HTTP `404`.

## Catatan Keamanan

- Jangan mengunggah file `.env` ke repository publik.
- Jangan memasukkan password database atau application key asli ke repository.
- Gunakan konfigurasi environment sesuai lingkungan deployment.

## Pengembang

Nama: Muhammad Syafiq Ghazali
