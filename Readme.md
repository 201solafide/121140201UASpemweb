# Web UAS
Nama : Solafide Zamili
NIM : 121140201

## Deskripsi
Aplikasi web ini adalah sistem sederhana dengan fitur:
1. Form sign-up dan login.
2. Validasi form secara real-time menggunakan JavaScript.
3. Penyimpanan dan pengambilan data pengguna menggunakan PHP.
4. Manajemen state menggunakan session dan cookie.

## Struktur Folder
- `public/`: Berisi file frontend yang dapat diakses browser.
  - `css/`: Styling aplikasi.
  - `js/`: Skrip JavaScript untuk manipulasi DOM dan validasi.
  - `index.php`: Halaman utama untuk sign-up dan login.
- `app/`: Berisi logika backend.
  - `controllers/`: Class PHP berbasis OOP untuk pengelolaan pengguna.
  - `models/`: File koneksi database.
  - `routes.php`: Logika routing URL aplikasi.
- `database/`: File terkait database.
  - `migration.sql`: Script SQL untuk membuat tabel.
<!-- - `storage/`: Data sementara untuk session dan cookie.
- `.env`: File konfigurasi koneksi database. -->
- `README.md`: Dokumentasi proyek.

## Teknologi
- **Frontend**: HTML, CSS, JavaScript.
- **Backend**: PHP.
- **Database**: MySQL.
- **Hosting**: Localhost atau platform seperti gitub.io.

## Cara Menjalankan
1. **Setup Database**:
   - Import file `migration.sql` ke MySQL menggunakan phpMyAdmin.
2. **Konfigurasi Koneksi**:
   - Edit file `.env` dengan informasi koneksi database.
3. **Menjalankan Server**:
   - Gunakan server lokal seperti XAMPP.
4. **Akses Aplikasi**:
   - Buka browser dan akses `http://localhost/web-app/public/index.php`.

## Hosting Aplikasi Web
1. **Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?**:
    - Membuat repository di Github untuk aplikasi web
    - Memastikan bahwa repository memiliki file utama untuk dijalankan
    - Mengupload semua file yang diperlukan
    - Mengaktifkan fitur Github Pages, di tab **Settings** repository, memilih branch, pada bagian source menentukan bagian folder yang dipilih **/ (root) **
    - Github memberikan URL publik yang dapat diakses untuk situs web tersebut
2. **Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web anda**:
    - Github Pages merupakan penyedia hosting yang cocok dan mudah dan sepenuhnya terintegrasi dengan github sehingga modifikasi kode dapat lebih cepat, akan tetapi untuk project yang lebih besar dapat menggunakan penyedia hosting lain.
3. **Bagaimana anda memastikan keamanan aplikasi web yang anda host? **:
    - Github Pages sendiri menyediakan HTTPS secara otomatis untk semua situs web yang dihosting
    - Pemeliharaan kode dnegan memastikan pengguna memberikan input dan divalidasi dengan benar
4. **Jelaskan konfigurasi server yang anda terapkan untuk mendukung aplikasi anda**:
    - Lingkugan hosting Github Pages, sudah menyediakan lingkungan server yang otomatis menangani hosting, sehingga tidak perlu mengonfigurasi server fisika atau virtual