# TUGAS 2 PAWL
MODUL PAWL04 - CRUD dan Validasi Data pada Laravel
 - **Nama** : NOFITA RAHMA SABILLAH
 - **NIM** : 245150701111007
 - **Mata Kuliah** : PENGEMBANGAN APLIKASI WEB LANJUT
 - **Kelas** : TEKNOLOGI INFORMASI - A

## Deskripsi Singkat
Saya menggunakan project yang telah digunakan sebelumnya saat sesi praktik di kelas, oleh karena itu BookController yang sesuai dengan perintah modul adalah BookController2.php

## Checklist Pengujian CRUD

- [v] GET /books menampilkan semua buku.
- [v] GET /books/create menampilkan form tambah.
- [v] POST /books menyimpan input valid.
- [v] Input invalid tidak masuk database.
- [v] Error validation muncul di dekat field yang salah.
- [v] old() mengembalikan input sebelumnya setelah validation gagal.
- [v] GET /books/{book} menampilkan detail record yang benar.
- [v] GET /books/{book}/edit menampilkan data lama.
- [v] PUT /books/{book} memperbarui record yang sama.
- [v] DELETE /books/{book} menghapus record.
- [v] Flash message tampil setelah create, update, dan delete.
- [v] route:list --path=books tidak menunjukkan route ganda yang tidak disengaja.

## Checklist Challenge ISBN

- [v] Migration up() dan down() bekerja tanpa error.
- [v] Dua buku tidak dapat memiliki ISBN yang sama.
- [v] Saat mengedit buku tanpa mengubah ISBN, validation tetap lolos.
- [v] Field ISBN mempertahankan old input saat validation gagal.
- [v] Tidak ada perubahan route CRUD yang tidak diperlukan.

## Refleksi Praktikum

**1. Mengapa create() dan store() dipisahkan menjadi dua action?**

create() hanya bertugas menampilkan form kosong, sedangkan store() memproses dan menyimpan data yang dikirim pengguna. Keduanya punya tujuan yang beda, sehingga dipisahkan agar setiap action hanya melakukan satu hal

**2. Mengapa @csrf tidak dapat menggantikan validation?**

@csrf hanya memastikan bahwa kiriman data berasal dari form aplikasi kita sendiri, bukan dari pihak luar. csrf tidak mengecek apakah isi datanya benar atau sesuai aturan. Validation yang bertugas memeriksa apakah data yang diisi pengguna sudah memenuhi syarat, seperti tidak boleh kosong, panjang maksimum, dan tidak boleh sama dengan data yang sudah ada

**3. Mengapa validation client-side tidak cukup untuk melindungi data?**

Validation di sisi browser bisa dengan mudah dilewati pengguna, misalnya dengan mematikan JavaScript atau mengirim data langsung tanpa melalui browser. sedangkan, validation di sisi server tidak bisa dilewati karena prosesnya terjadi di dalam aplikasi, bukan di perangkat user

**4. Apa fungsi @method('PUT') dan @method('DELETE')?**

@method('PUT') dan @method('DELETE') berfungsi untuk memberitahu aplikasi bahwa aksi yang ingin dilakukan adalah memperbarui atau menghapus data. Karena form HTML hanya bisa mengirim data dengan cara GET atau POST, jadi dibutuhkan cara lain supaya tahu maksud user adalah update atau delete

**5. Mengapa Book::create($request->all()) sebaiknya dihindari pada input pengguna?**

$request->all() mengambil semua data yang dikirim pengguna tanpa disaring, termasuk field yang tidak seharusnya diubah seperti id atau is_admin. Ini berbahaya karena pengguna bisa saja mengisi field tersebut secara sengaja. Sebaiknya menggunakan $request->validated() yang hanya mengambil field yang sudah lolos validasi dan diizinkan di $fillable.

**6. Apa manfaat memindahkan validation dari controller ke Form Request?**

Controller jadi lebih ringkas karena tidak perlu mengurus validasi. Aturan validasi dikumpulkan di satu tempat sehingga lebih mudah dikelola, dan jika ada perubahan aturan cukup diubah di satu file saja tanpa harus menyentuh controller.

## Checklist Penyelesaian Praktikum

- [v] Semua checkpoint 1-4 berhasil.
- [v] CRUD lengkap dapat didemokan dari browser.
- [v] Validation gagal tidak menghasilkan record baru/perubahan data.
- [v] CSRF dan method spoofing digunakan pada form yang sesuai.
- [v] Model memiliki mass-assignment whitelist.
- [v] StoreBookRequest dan UpdateBookRequest digunakan.
- [v] Challenge ISBN selesai.
- [v] Project dapat dijalankan ulang tanpa error setelah browser dan server direstart.