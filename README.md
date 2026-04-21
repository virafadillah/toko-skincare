Berikut ini aku buatkan **README lengkap** untuk project CRUD Toko Skincare kamu 💻✨
Mulai dari install Laravel 12 sampai web berjalan di Laragon — cocok untuk laporan atau dikumpulkan 📄

---

# 📘 README

## 🧴 Project CRUD Toko Skincare (Laravel 12 + Laragon)

---

## 📌 Deskripsi

Project ini merupakan aplikasi web sederhana berbasis **Laravel 12** yang digunakan untuk mengelola data produk skincare.
Fitur utama yang tersedia adalah:

* ➕ Tambah Produk (Create)
* 📄 Lihat Produk (Read)
* ✏️ Edit Produk (Update)
* 🗑️ Hapus Produk (Delete)

---

## 🛠️ Software yang Digunakan

* **Laragon** (Web Server & Database)
* **Laravel 12** (Framework PHP)
* **PHP 8+**
* **MySQL**
* **Visual Studio Code** (Code Editor)
* **Composer**

---

## 📥 Cara Install Laravel 12

### 1. Install Composer

Download dan install Composer dari:
[https://getcomposer.org/](https://getcomposer.org/)

Cek instalasi:

```bash
composer -v
```

---

### 2. Install Laravel 12

Jalankan perintah berikut di terminal (Laragon / CMD):

```bash
composer create-project laravel/laravel toko-skincare
```

Masuk ke folder project:

```bash
cd toko-skincare
```

---

## ⚙️ Menjalankan Project di Laragon

### 1. Pindahkan Project

Letakkan folder project ke:

```
C:\laragon\www\
```

---

### 2. Jalankan Laragon

* Klik **Start All** di Laragon
* Pastikan:

  * Apache/Nginx aktif
  * MySQL aktif

---

### 3. Akses Project

Buka browser:

```
http://toko-skincare.test
```

ATAU

```bash
php artisan serve
```

lalu buka:

```
http://127.0.0.1:8000
```

---

## 🗄️ Konfigurasi Database

### 1. Buat Database

Buka phpMyAdmin:

```
http://localhost/phpmyadmin
```

Buat database:

```
toko_skincare
```

---

### 2. Edit File `.env`

```env
DB_DATABASE=toko_skincare
DB_USERNAME=root
DB_PASSWORD=
```

---

### 3. Jalankan Migration

```bash
php artisan migrate
```

---

## 🧱 Struktur CRUD Produk

### 📌 Model

File:

```
app/Models/Produk.php
```

Digunakan untuk menghubungkan ke tabel `produks`.

---

### 📌 Controller

File:

```
app/Http/Controllers/ProdukController.php
```

Berisi logika:

* Menampilkan data
* Menyimpan data
* Update
* Hapus

---

### 📌 View (Tampilan)

Folder:

```
resources/views/produk/
```

Berisi:

* `index.blade.php` → tampil data
* `create.blade.php` → tambah data
* `edit.blade.php` → edit data

---

### 📌 Route

File:

```
routes/web.php
```

```php
Route::resource('produk', ProdukController::class);
```

---

## ▶️ Menjalankan Aplikasi

1. Jalankan Laragon
2. Jalankan migration:

```bash
php artisan migrate
```

3. Jalankan server:

```bash
php artisan serve
```

4. Buka browser:

```
http://127.0.0.1:8000/produk
```

---

## 🎨 Tampilan

* Menggunakan **Bootstrap 5**
* Tema warna pink (skincare) 💕
* Tabel berwarna & responsive

---

## 🚀 Fitur yang Bisa Dikembangkan

* Upload gambar produk 🧴
* Sistem login admin 🔐
* Kategori produk
* Keranjang belanja 🛒
* Dashboard admin

---

## 👩‍💻 Author

Nama: *Marlina Yanti br Tampubolon*
Program Studi: Sistem Informasi

---

## 📌 Penutup

Project ini dibuat sebagai latihan dan tugas untuk memahami konsep **CRUD menggunakan Laravel 12** serta implementasinya dalam sistem penjualan sederhana.

---

---

Kalau kamu mau, aku bisa bantu lanjut:

* Dibuatkan **versi PDF / Word untuk dikumpul** 📄
* Ditambahkan **gambar screenshot tiap langkah**
* Atau dibuat **laporan lengkap 10–15 halaman (kayak makalah kamu sebelumnya)**

Tinggal bilang aja 👍