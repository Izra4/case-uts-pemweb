
# 🧑‍💻 Briefing Ujian Tengah Praktikum

## 📅 Topik: HTML, CSS, JS, Dasar PHP, FORM


## 🎯 Tujuan
Mahasiswa mampu menerapkan:
- Manipulasi DOM untuk validasi form login tanpa menggunakan alert bawaan browser / js.
- Penggunaan array sebagai sumber data user dan produk.
- Pembuatan form untuk menambah atau mengunggah produk serta menampilkan hasilnya secara dinamis.

---

## 🧩 1. LOGIN PAGE

### Ketentuan:
- Proses login menggunakan JavaScript dengan penerapan konsep DOM dan validasi dengan menggunakan PHP.
- Tidak diperbolehkan menggunakan `alert()` bawaan untuk menampilkan pesan kesalahan.
- Kasus validasi yang harus diterapkan:
  1. Username dan/atau password kosong.
  2. Username dan/atau password salah.
  3. Login berhasil.
- Gunakan array berisi daftar user valid yang telah disediakan pada file PHP sebagai acuan validasi login.
- Setelah login berhasil, user diarahkan menuju halaman **Homepage**.

---

## 🏠 2. HOMEPAGE

### Ketentuan:
- Setelah login berhasil, tampilkan halaman utama (**Homepage**).
- Data produk diambil dari array yang telah disediakan.
- Produk harus ditampilkan (render) secara dinamis ke halaman menggunakan PHP.
- Tampilkan seluruh field data produk yang ada pada array.
- Desain tampilan bebas.

---

## 🧾 3. CREATE / UPLOAD PRODUCT

### Ketentuan:
- Sediakan form untuk menambah (create) atau mengunggah produk baru.
- Setiap produk baru yang berhasil ditambahkan harus langsung muncul di daftar produk yang telah dirender.
- Proses penambahan produk dilakukan dengan manipulasi DOM (tanpa reload halaman).
- Minimal field yang disediakan:
  - Nama produk
  - Harga produk
- Desain tampilan form bebas, tetapi harus fungsional dan mengikuti kaidah dasar form HTML.

---

## 📌 Catatan
- Semua proses validasi dan manipulasi data **harus menggunakan JavaScript DOM**, bukan alert atau prompt bawaan browser.
- Gunakan **array** sebagai sumber data utama untuk user dan produk.
- Penilaian mencakup:
  - Validasi form login
  - Manipulasi DOM
  - Data produk berhasil di-render
  - Struktur kode dan kebersihan tampilan
  - Fungsi create/upload produk

---

## 💬 Output Akhir
- File HTML, CSS, dan JS yang terhubung dengan baik.
- Login berhasil mengarahkan ke halaman utama dengan daftar produk yang dirender dari array.
- Form create/upload dapat menambah produk baru secara dinamis ke daftar produk.

---
