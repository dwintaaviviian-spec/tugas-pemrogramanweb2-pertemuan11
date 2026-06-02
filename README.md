# Tugas Pertemuan 11 - Sistem Perpustakaan Laravel

## Identitas Mahasiswa

* Nama : Dwinta Vivian Acintya Syahda
* NIM : 60324053
* Program Studi : Informatika
* Semester : 4
* Mata Kuliah : Pemrograman Web II - B
* Pertemuan : 11

---

## Deskripsi Proyek

Proyek ini merupakan aplikasi Sistem Perpustakaan berbasis Laravel yang dikembangkan sebagai tugas Pertemuan 11. Aplikasi digunakan untuk mengelola data buku dan anggota perpustakaan serta menampilkan dashboard statistik.

---

## Fitur yang Diimplementasikan

### 1. Dashboard Perpustakaan

Menampilkan ringkasan data perpustakaan berupa:

* Total Buku
* Buku Tersedia
* Buku Habis
* Total Anggota
* Anggota Aktif
* Anggota Nonaktif
* 5 Buku Terbaru
* 5 Anggota Terbaru
* Quick Links

URL:

```text
/dashboard
```

---

### 2. Blade Component Buku Card

Menggunakan Blade Component reusable untuk menampilkan informasi buku.

Informasi yang ditampilkan:

* Judul Buku
* Pengarang
* Harga
* Kategori
* Status Ketersediaan
* Stok Buku
* Tombol Detail
* Tombol Edit

File Component:

```text
resources/views/components/buku-card.blade.php
```

---

### 3. Search & Filter Buku Advanced

Fitur pencarian dan filter buku berdasarkan:

* Judul
* Pengarang
* Penerbit
* Kategori
* Tahun Terbit
* Ketersediaan Buku

URL:

```text
/buku/search
```

---

## Teknologi yang Digunakan

* PHP 8.x
* Laravel 12
* Bootstrap 5
* MySQL
* Blade Template Engine

---

## Screenshot

### Dashboard

<img width="960" height="509" alt="dashboard" src="https://github.com/user-attachments/assets/474ce98f-38fd-4921-a1fa-76ce2b1cadf7" />

### Daftar Buku

<img width="960" height="476" alt="daftar buku 1" src="https://github.com/user-attachments/assets/6b198239-c877-4bb6-bdc9-558895d57b38" />
<img width="933" height="430" alt="daftar buku 2" src="https://github.com/user-attachments/assets/172b540c-5303-4121-805a-18723eb47596" />

### Blade Component Buku Card

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/d47cf120-4678-499a-b7a9-fde0426ce526" />

### Search & Filter Buku

<img width="590" height="286" alt="filter" src="https://github.com/user-attachments/assets/59e8d359-77b9-4917-8917-5f02e985edb3" />

<img width="959" height="505" alt="search kategori" src="https://github.com/user-attachments/assets/e636721f-83aa-4153-a084-932c9cdd4218" />

<img width="550" height="164" alt="stok habis" src="https://github.com/user-attachments/assets/0d233717-3b88-433f-b795-52198e11f2f6" />

---

 diimplementasikan Dashboard Perpustakaan, Blade Component Buku Card, serta fitur Search & Filter Buku Advanced menggunakan Laravel 12.
