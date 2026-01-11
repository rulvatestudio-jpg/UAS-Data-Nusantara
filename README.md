# Sistem Informasi Kependudukan (Data Nusantara) - UAS Pemrograman Web

Aplikasi web sederhana untuk pengelolaan data kependudukan provinsi di Indonesia. Dibangun menggunakan **PHP Native** dengan konsep **MVC (Model-View-Controller)** dan **Modular**.

## 📋 Fitur Utama
Sesuai ketentuan UAS, aplikasi ini memiliki fitur:
1.  **Arsitektur MVC:** Struktur kode terpisah (App, Controller, Model, View).
2.  **Routing System:** Menggunakan `.htaccess` untuk URL yang bersih.
3.  **Multi-Role Login:**
    - **Admin:** Bisa Tambah, Edit, Hapus data.
    - **User:** Hanya bisa melihat data (Read Only).
4.  **CRUD Lengkap:** Create, Read, Update, Delete data penduduk.
5.  **Pencarian (Search):** Mencari data berdasarkan Provinsi atau Ibu Kota.
6.  **Pagination:** Membagi data menjadi beberapa halaman.
7.  **Responsive Design:** Menggunakan Bootstrap 5.

## 🛠️ Teknologi yang Digunakan
* Bahasa: PHP (OOP style)
* Database: MySQL
* Frontend: Bootstrap 5, CSS Custom
* Server: Apache (XAMPP)

## 🚀 Cara Instalasi
1.  Clone repository ini atau download ZIP.
2.  Pastikan XAMPP (Apache & MySQL) sudah berjalan.
3.  Buat database baru di phpMyAdmin bernama `db_uas_web`.
4.  Import file `db_uas_web.sql` (yang ada di repo ini).
5.  Atur konfigurasi database di `app/config/config.php` jika perlu.
6.  Buka browser dan akses `http://localhost/UAS_PROJECT`.

## 🔑 Akun Demo
Gunakan akun berikut untuk login:

| Role  | Username | Password | Akses |
| :--- | :--- | :--- | :--- |
| **Admin** | admin | admin123 | Full Akses (CRUD) |
| **User** | user | user123 | Read Only |
