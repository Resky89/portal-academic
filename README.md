# Portal Akademik Sederhana

Selamat datang di repositori Portal Akademik Sederhana! Proyek ini adalah aplikasi portal akademik yang dibangun menggunakan Laravel. Aplikasi ini memberikan akses berdasarkan peran pengguna, yaitu Admin, Dosen, dan Mahasiswa. Basis data untuk aplikasi ini dapat diambil dari file `database.sql`.

Welcome to the Simple Academic Portal repository! This project is an academic portal application built using Laravel. The application provides access based on user roles: Admin, Lecturer, and Student. The database for the application can be found in the `database.sql` file.

## 📚 Daftar Isi / Table of Contents

- [Pengenalan / Introduction](#pengenalan--introduction)
- [Fitur / Features](#fitur--features)
- [Teknologi / Technologies](#teknologi--technologies)
- [Instalasi / Installation](#instalasi--installation)
- [Penggunaan / Usage](#penggunaan--usage)
- [Struktur Basis Data / Database Structure](#struktur-basis-data--database-structure)

## 📖 Pengenalan / Introduction

Portal Akademik Sederhana adalah aplikasi yang dirancang untuk mengelola data akademik, termasuk pengguna, jadwal, mata kuliah, dan penilaian. Aplikasi ini dibangun menggunakan framework Laravel dan menyediakan akses berbasis peran pengguna.

Simple Academic Portal is an application designed to manage academic data, including users, schedules, courses, and assessments. This application is built using the Laravel framework and provides role-based user access.

## ✨ Fitur / Features

- **Admin:**
  - Mengelola pengguna
  - Mengelola jadwal
  - Mengelola mata kuliah

- **Dosen:**
  - Mengakses jadwal
  - Mengelola penilaian

- **Mahasiswa:**
  - Mengakses jadwal

- **Admin:**
  - Manage users
  - Manage schedules
  - Manage courses

- **Lecturer:**
  - Access schedules
  - Manage assessments

- **Student:**
  - Access schedules

## 🛠️ Teknologi / Technologies

- **Blade**: 64.5%
- **PHP**: 34.1%
- **JavaScript**: 1.4%
- **Laravel**: PHP framework used for building the application

## 🚀 Instalasi / Installation

Untuk memulai dengan Portal Akademik Sederhana, ikuti langkah-langkah berikut:

To get started with the Simple Academic Portal, follow these steps:

1. Clone repositori:
    ```sh
    git clone https://github.com/Resky89/portal-academic.git
    cd portal-academic
    ```

2. Instal dependensi:
    ```sh
    composer install
    npm install
    ```

3. Salin file `.env.example` menjadi `.env` dan sesuaikan konfigurasi basis data:
    ```sh
    cp .env.example .env
    ```

4. Generate application key:
    ```sh
    php artisan key:generate
    ```

5. Import basis data dari file `database.sql` ke dalam basis data Anda.

6. Jalankan migrasi dan seeder:
    ```sh
    php artisan migrate --seed
    ```

1. Clone the repository:
    ```sh
    git clone https://github.com/Resky89/portal-academic.git
    cd portal-academic
    ```

2. Install dependencies:
    ```sh
    composer install
    npm install
    ```

3. Copy the `.env.example` file to `.env` and adjust the database configuration:
    ```sh
    cp .env.example .env
    ```

4. Generate application key:
    ```sh
    php artisan key:generate
    ```

5. Import the database from the `database.sql` file into your database.

6. Run migrations and seeders:
    ```sh
    php artisan migrate --seed
    ```

## 📖 Penggunaan / Usage

Setelah instalasi, Anda dapat menjalankan server aplikasi menggunakan perintah berikut:

```sh
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`.

Once installed, you can run the application server using the following command:

```sh
php artisan serve
```

The application will run at `http://localhost:8000`.

## 📊 Struktur Basis Data / Database Structure

Basis data untuk aplikasi ini dapat ditemukan di file `database.sql`. Struktur basis data mencakup tabel-tabel untuk pengguna, jadwal, mata kuliah, dan penilaian.

The database for this application can be found in the `database.sql` file. The database structure includes tables for users, schedules, courses, and assessments.
