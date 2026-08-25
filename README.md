# 🥒 Sistem Pakar Diagnosa Hama & Penyakit Mentimun (K-Nearest Neighbors)

Aplikasi berbasis web untuk membantu petani dan praktisi pertanian dalam **menghadapi serta mendiagnosa serangan hama dan penyakit pada tanaman mentimun** secara cepat dan akurat menggunakan algoritma **K-Nearest Neighbors (KNN)** (dengan jarak *Euclidean Distance*).

---

## 📌 Fitur Utama

- 📋 **Input 27 Indikasi Gejala**: Formulir interaktif dengan 27 parameter gejala fisik tanaman (daun, buah, batang, akar).
- 🧮 **Perhitungan Algoritma KNN**: Perhitungan kemiripan gejala secara real-time berdasarkan data latih/klasifikasi hama & penyakit.
- ⚡ **Respon Cepat (AJAX)**: Pemrosesan data tanpa *reload* halaman menggunakan jQuery AJAX & SweetAlert / Modal Bootstrap.
- 💡 **Solusi & Penanganan**: Menampilkan hasil diagnosa beserta panduan tindakan pencegahan dan penanganan teknis (sanitasi, insektisida/fungisida, teknis budidaya).
- 📱 **Desain Responsi**: Tampilan interaktif berbasis **Bootstrap 5** dan **FontAwesome 6**.

---

## 📊 Daftar Hama & Penyakit yang Didiagnosa

Aplikasi ini dapat mengidentifikasi **11 jenis hama dan penyakit** berikut:

1. **Ulat Grayak**
2. **Kumbang Aulacophora Similis**
3. **Lalat Buah**
4. **Kumbang Epilachna Sparsa**
5. **Kepik**
6. **Gurem (Thrips)**
7. **Penyakit Bercak Coklat**
8. **Penyakit Embun Bulu**
9. **Penyakit Tepung**
10. **Penyakit Layu Fusarium**
11. **Penyakit Rebah Kecambah**

---

## 🛠️ Teknologi yang Digunakan

- **Backend**: PHP (Native)
- **Frontend**: HTML5, CSS3, JavaScript / jQuery (v3.6.1)
- **Framework UI**: Bootstrap v5.2.2
- **Icon & UI Components**: FontAwesome v6.2.0, SweetAlert2 v11.6.7
- **Algoritma**: K-Nearest Neighbors (KNN) dengan *Euclidean Distance*:
  $$d(x, y) = \sqrt{\sum_{i=1}^{n} (x_i - y_i)^2}$$

---

## 📁 Struktur Direktori

```text
├── assets/
│   ├── style.css         # Custom Styling
│   └── anu.js            # Script AJAX & penanganan UI
├── index.php             # Halaman utama (Formulir Input Gejala)
├── proses.php            # Script kalkulasi KNN & Penanganan Hama/Penyakit
└── README.md             # Dokumentasi Proyek
```

---

## 🚀 Cara Menjalankan Proyek

### 1. Prasyarat
- Web Server local (contoh: **XAMPP**, **WAMP**, **Laragon**, atau PHP CLI Web Server).
- Koneksi internet (untuk me-render pustaka CDN Bootstrap & FontAwesome).

### 2. Langkah-Langkah

1. **Clone / Download Repository**
   ```bash
   git clone https://github.com/username/diagnosa-mentimun-knn.git
   ```
2. **Pindahkan ke Server Folder**
   Pindahkan folder proyek ke direktori server web Anda (misal `htdocs` untuk XAMPP).
   ```text
   C:/xampp/htdocs/diagnosa-mentimun-knn/
   ```
3. **Jalankan Web Server**
   Aktifkan Apache pada kontrol panel XAMPP / Laragon Anda. Alternatifnya, gunakan PHP Built-in Server dari terminal:
   ```bash
   php -S localhost:8000
   ```
4. **Buka di Browser**
   Akses aplikasi melalui alamat:
   ```text
   http://localhost/diagnosa-mentimun-knn/
   ```
   atau `http://localhost:8000` jika menggunakan PHP CLI Server.

---

## 📝 Alur Penggunaan (Usage Flow)

1. Tekan tombol **MULAI** pada tampilan halaman utama.
2. Pilih gejala-gejala yang dialami oleh tanaman mentimun (Pilih **Ya / Tidak** untuk setiap dari 27 indikasi).
3. Klik tombol **CEK**.
4. Pop-up **Hasil Diagnosa** akan muncul menampilkan:
   - Daftar gejala yang dipilih.
   - Jenis Hama / Penyakit yang terdeteksi.
   - Panduan pencegahan & penanganan yang disarankan.

---

## 📄 Lisensi

Proyek ini dibuat untuk tujuan edukasi dan pengembangan sistem pakar. Silakan gunakan dan kembangkan secara bebas (Open Source).