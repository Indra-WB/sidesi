# <img src="assets/images/favicon.png" width="40" height="40" style="vertical-align: middle; margin-right: 10px;"> SIDESI - Sistem Informasi Sadar Pelatihan Terintegrasi

**SIDESI** adalah inovasi pelayanan publik digital milik **UPT Balai Latihan Kerja Pasuruan**, di bawah naungan Dinas Tenaga Kerja dan Transmigrasi Provinsi Jawa Timur. Sistem ini dikembangkan untuk mempermudah masyarakat dalam mengakses informasi pelatihan, pendaftaran online yang cepat, serta memantau proses seleksi secara transparan dan akuntabel.

---

> [!IMPORTANT]
> **SIDESI** kini tampil dengan desain antarmuka (UI/UX) baru yang lebih modern, dinamis, dan responsif untuk memberikan kenyamanan akses terbaik bagi seluruh calon peserta pelatihan.

---

## ✨ Pembaruan UI/UX Terbaru

Tampilan dan fungsionalitas SIDESI telah ditingkatkan secara menyeluruh dengan fokus pada modernisasi desain:

### 1. 🔤 Tipografi Premium & Dinamis
* Mengadopsi font modern gabungan **Poppins** dan **Plus Jakarta Sans** melalui Google Fonts.
* Override tipografi global diterapkan secara aman untuk memastikan pembacaan informasi yang tajam (*crisp rendering*) di seluruh perangkat.

### 2. 🗓️ Tabel Rencana Pelaksanaan Pelatihan APBD 2026
* **Interactive Responsive Table**: Tabel rencana pelatihan dengan arsitektur CSS kustom yang modern, diletak persis di atas footer.
* **Modern Badges**: Pembeda visual untuk durasi jam pelajaran (badge hijau `JP`), durasi hari (badge oranye `Hari`), dan paket pelatihan (badge biru `Paket`).
* **Clean Date Format**: Penulisan tanggal disederhanakan dengan hanya menampilkan **Bulan Lengkap dan Tahun** tanpa tanggal harian (misalnya: *Januari 2026 ➔ Februari 2026*).
* **Gradient Group Headers**: Pengelompokan baris yang indah dengan gradien modern untuk kategori pelatihan (APBD Angkatan I - V, MTU, dan Short Course).

### 3. 🖼️ Popout Modal Maklumat Pelayanan
* Popout otomatis (on-load modal) berukuran ekstra besar (`modal-xl` dengan lebar optimal 80%).
* Dilengkapi dengan efek latar belakang **backdrop blur** (`backdrop-filter: blur(8px)`) yang memberikan nuansa premium dan berkelas.
* Dilengkapi tombol tutup yang presisi dan melayang di bagian kanan atas gambar Maklumat Pelayanan.

### 4. 🎛️ Rounded Carousel Cards
* Seluruh ujung kartu pada menu **Layanan SIDESI** dan **Siap Lapor** kini berbentuk melengkung mulus (`border-radius: 20px !important; overflow: hidden;`) untuk mengikuti gaya desain aplikasi modern terkini.

### 5. 💬 Tombol WhatsApp Melayang (Sticky Button)
* Tombol sticky WhatsApp di pojok kanan bawah yang terintegrasi langsung dengan admin KIOS Pelayanan.
* Dilengkapi dengan animasi getar pulsa (*pulse animation*) untuk memikat perhatian pengguna tanpa mengganggu navigasi.

---

## 🛠️ Teknologi yang Digunakan

* **Frontend**: HTML5, Vanilla CSS3 (Custom Styles), Bootstrap 4 (Responsive Layout).
* **Interaksi & Slider**: JavaScript (ES6+), jQuery 2.1.0, Owl Carousel.
* **Animasi**: ScrollReveal (Smooth scroll & fade animation).
* **Integrasi Data**: Google Looker Studio (Dashboard Statistik Pelatihan & Alumni), Google Maps API.
* **Komunikasi**: WhatsApp API Integration.
* **Tipografi & Ikon**: Google Fonts (Poppins & Plus Jakarta Sans), Font Awesome 4.7.0.

---

## 📂 Struktur Proyek

```text
sidesi/
├── assets/
│   ├── css/                  # File stylesheet (Bootstrap, Owl Carousel, Custom)
│   ├── images/               # Aset gambar, logo, favicon, dan ilustrasi
│   ├── js/                   # File interaksi JavaScript (jQuery, Plugins, Init)
│   └── fonts/                # File font lokal (jika ada)
├── MaklumatPelayanan.jpg     # Gambar popout maklumat pelayanan utama
├── index.html                # Halaman utama aplikasi (Fully Modified & Clean)
├── README.md                 # Dokumentasi proyek (Updated)
└── .htaccess                 # Konfigurasi web server Apache
```

---

## 💻 Cara Menjalankan Aplikasi Secara Lokal

Ikuti langkah-langkah berikut untuk menjalankan SIDESI di komputer Anda:

### 1. Prasyarat (Prerequisites)
Pastikan Anda telah menginstal salah satu Web Server lokal berikut:
* [XAMPP](https://www.apachefriends.org/) (Sangat Direkomendasikan)
* [Laragon](https://laragon.org/)
* [WAMP](https://www.wampserver.com/)

### 2. Langkah Instalasi

1. **Unduh/Clone Proyek**:
   Unduh file proyek ini dan ekstrak foldernya.
   
2. **Pindahkan ke Folder Publik**:
   * Jika menggunakan **XAMPP**, pindahkan folder `sidesi` ke:
     `C:\xampp\htdocs\sidesi`
   * Jika menggunakan **Laragon**, pindahkan ke:
     `C:\laragon\www\sidesi`

3. **Aktifkan Server Apache**:
   Buka Control Panel XAMPP/Laragon Anda dan klik tombol **Start** pada modul **Apache**.

4. **Akses Aplikasi**:
   Buka peramban (web browser) favorit Anda dan ketikkan alamat berikut pada address bar:
   ```text
   http://localhost/sidesi
   ```

---

> [!TIP]
> ### 💡 Tips Pengembangan & Kustomisasi
> * Jika Anda ingin mengubah warna gradien pada tabel, Anda dapat menyesuaikan kelas `.group-apbd-1` hingga `.group-apbd-5` serta `.group-mtu` di bagian blok `<style>` di dalam berkas [index.html](file:///c:/xampp/htdocs/sidesi/index.html).
> * Untuk mengganti gambar popout Maklumat Pelayanan, cukup ganti berkas `MaklumatPelayanan.jpg` di root direktori dengan gambar baru yang memiliki nama dan format yang sama.

---

## 📄 Lisensi

Proyek ini berada di bawah lisensi **Proprietary License** - lihat berkas [LICENSE](LICENSE) untuk detail lebih lanjut.

---

© 2026 **UPT Balai Latihan Kerja Pasuruan**. Hak Cipta Dilindungi Undang-Undang.
