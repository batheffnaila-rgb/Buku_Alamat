# 📒 Aplikasi Buku Alamat Berbasis Web

## Deskripsi Singkat
Aplikasi Buku Alamat merupakan aplikasi web berbasis PHP native yang digunakan untuk menyimpan dan mengelola data kontak pribadi. Aplikasi ini memungkinkan pengguna untuk menambahkan, melihat, mengedit, dan menghapus data kontak seperti nama, nomor telepon, email, serta kategori kontak.  
Project ini dikembangkan sebagai bagian dari persyaratan penilaian mata kuliah **Back-End Web Development**.

---

## 👥 Daftar Anggota Kelompok

| No | Nama | NIM | GitHub | Peran |
|----|------|-----|--------|-------|
| 1 | Ni Putu Victoria Ratih Susanti | 240030259 | vriths | Back-End Developer |
| 2 | Ni Putu Amel Angelina Putri | 240030246 | amel2005-git | Front-End Developer |
| 3 | Gusti Ayu Putri Satya Pradewi Widhiantara | 240030252 | gaputrisatya-hash | Database Administrator |
| 4 | Naila Batheff | 240030185 | batheffnaila-rgb | Dokumentasi & Integrasi Sistem |

**Pembagian Peran:**
- **Back-End Developer**: Mengembangkan logika aplikasi menggunakan PHP dan proses CRUD.
- **Front-End Developer**: Mendesain tampilan antarmuka menggunakan HTML, CSS, Bootstrap, dan JavaScript.
- **Database Administrator**: Merancang struktur database dan mengelola koneksi database MySQL.
- **Dokumentasi & Integrasi Sistem**: Menyusun dokumentasi project (README.md) dan memastikan integrasi antar modul berjalan dengan baik.

---

## 🛠️ Lingkungan Pengembangan
Teknologi yang digunakan dalam pengembangan aplikasi ini adalah:
- **Bahasa Pemrograman**: PHP Native (tanpa framework back-end)
- **Database**: MySQL / MariaDB
- **Front-End**: HTML, CSS, JavaScript
- **Framework Front-End**: Bootstrap 5
- **Web Server**: Apache (XAMPP)
- **Text Editor**: Visual Studio Code
- **Version Control**: Git & GitHub

---

## ⚙️ Hasil Pengembangan (Fitur Aplikasi)
Fitur utama yang berhasil diimplementasikan pada aplikasi Buku Alamat meliputi:

1. **Menampilkan Daftar Kontak**  
   Menampilkan seluruh data kontak yang tersimpan di database dalam bentuk tabel.

2. **Menambah Kontak Baru**  
   Pengguna dapat menambahkan kontak baru melalui form input.

3. **Mengedit Data Kontak**  
   Pengguna dapat memperbarui data kontak yang sudah ada.

4. **Menghapus Kontak**  
   Pengguna dapat menghapus data kontak dengan konfirmasi terlebih dahulu.

5. **Melihat Detail Kontak**  
   Menampilkan informasi lengkap sebuah kontak, termasuk nomor telepon, email, kategori, dan catatan.

6. **Pengelompokan Kategori Kontak**  
   Kontak dapat diklasifikasikan ke dalam kategori Teman, Keluarga, Kerja, dan Lainnya.

---

## 📂 Struktur Folder Project
Struktur folder dalam project Buku Alamat adalah sebagai berikut:
address-book/
│
├── config/
│ └── database.php # Konfigurasi koneksi database
│
├── public/
│ ├── index.php # Halaman utama daftar kontak
│ ├── create.php # Halaman tambah kontak
│ ├── edit.php # Halaman edit kontak
│ ├── delete.php # Proses hapus kontak
│ └── view.php # Halaman detail kontak
│
├── uploads/ # Penyimpanan foto kontak (opsional)
│
└── README.md # Dokumentasi project
