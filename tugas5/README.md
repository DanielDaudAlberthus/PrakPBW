### TAMBAHKAN LAPORAN KAMU DI SINI
## PEMBAHASAN
Aplikasi Penjualan Barang ini dibangun menggunakan arsitektur Model-View-Controller (MVC) untuk memisahkan logika bisnis, tampilan, dan kontrol alur aplikasi. Pada implementasi Model, aplikasi menggunakan class untuk mengelola data barang yang mencakup operasi CRUD (Create, Read, Update, Delete) terhadap database. Model bertanggung jawab untuk menghandle interaksi dengan database seperti menambah barang baru, mengambil daftar barang, mengupdate informasi barang, dan menghapus barang.

-- Pada bagian View, aplikasi menerapkan beberapa halaman antarmuka yang telah dirancang dengan memperhatikan aspek user experience (UX) dan estetika. Halaman-halaman tersebut meliputi halaman login untuk autentikasi pengguna, halaman admin yang menampilkan daftar barang dalam bentuk tabel, form tambah barang untuk menginput data baru, dan form edit untuk mengubah data barang yang sudah ada.

-- Controller berfungsi sebagai penghubung antara Model dan View, mengatur alur logika aplikasi dan memproses request dari pengguna. Controller menangani berbagai aksi seperti proses autentikasi pada login, penambahan barang baru, pembaruan data barang, dan penghapusan barang. Setiap aksi dalam Controller memvalidasi input pengguna sebelum diteruskan ke Model untuk diproses, kemudian mengarahkan ke View yang sesuai untuk menampilkan hasilnya.

## KESIMPULAN
Praktikum terkait MVC ini menghasilkan struktur kode yang terorganisir, memudahkan dalam maintenance dan pengembangan fitur baru. Pemisahan concern antara Model, View, dan Controller membuat kode lebih modular dan dapat diuji secara terpisah. Penerapan konsep MVC juga membantu dalam pengelolaan state aplikasi dan alur data yang lebih terstruktur.



### AKHIR LAPORAN

## Screenshot

### Halaman Home

![Halaman Home](https://github.com/user-attachments/assets/dbdb1f37-bbd3-428d-95a3-3e25df0056e4)


### Form Login

![Form Login](https://github.com/user-attachments/assets/4c143a7f-5d97-4f6e-b2ae-b8874264ea89)


### Halaman Admin

![Halaman Admin](https://github.com/user-attachments/assets/85f7e666-1967-4d5b-be9e-856949aaa258)


### Tambah Barang

![Tambah Barang](https://github.com/user-attachments/assets/8cfea5db-9064-4f62-887b-3b64490d3779)


### Edit Barang

![Edit Barang](https://github.com/user-attachments/assets/a598453f-086a-4b5b-bd21-c2c61a9a7471)


## Kontribusi

Dibuat oleh:
Daniel Daud Alberthus - 4522210055

## Lisensi

Projek ini dilisensikan di bawah [MIT License](LICENSE).
