# Web App Project

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

