# Praktikum 11: PHP Framework (Codeigniter)
```
Ridho Prasetya
311910621
TI.19.A2
```
## Langkah-langkah Praktikum
## Persiapan
### Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4.
### Berikut beberapa ekstensi yang perlu diaktifkan:
```
• php-json ekstension untuk bekerja dengan JSON;
• php-mysqlnd native driver untuk MySQL;
• php-xml ekstension untuk bekerja dengan XML;
• php-intl ekstensi untuk membuat aplikasi multibahasa;
• libcurl (opsional), jika ingin pakai Curl.
```
### Untuk mengaktifkan ekstentsi tersebut, melalu XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini
![1](https://user-images.githubusercontent.com/56241745/122017222-f963ad80-cdeb-11eb-9378-2fada5c4d8ec.png)
### Pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.
![2](https://user-images.githubusercontent.com/56241745/122019181-bb678900-cded-11eb-9962-a1f000f29e60.png)
## Instalasi Codeigniter 4
### Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara manual.
```
• Unduh Codeigniter dari website https://codeigniter.com/download
• Extrak file zip Codeigniter ke direktori htdocs/lab11_ci.
• Ubah nama direktory framework-4.x.xx menjadi ci4.
• Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/
```
![3](https://user-images.githubusercontent.com/56241745/122031310-c8d64080-cdf8-11eb-9f21-fd09fcc9a0f6.png)
## Menjalankan CLI (Command Line Interface)
### Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt. Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_php_ci/ci4/) 
### Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:
```
php spark
```
![4](https://user-images.githubusercontent.com/56241745/122187150-f84c8200-ceb8-11eb-82b3-1b63ae79aa21.png)
## Mengaktifkan Mode Debugging
### Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk  mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.
![5a](https://user-images.githubusercontent.com/56241745/122376736-9f4f1d80-cf8e-11eb-9e3e-14687b5ebcaa.png)
### Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development.
![5](https://user-images.githubusercontent.com/56241745/122188176-e9b29a80-ceb9-11eb-9761-75e7c8304ee3.png)
### Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable CI_ENVIRINMENT menjadi development.
![6](https://user-images.githubusercontent.com/56241745/122188730-72c9d180-ceba-11eb-906f-e19d86c3a89a.png)
### Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file app/Controller/Home.php hilangkan titik koma pada akhir kode.
## Routing dan Controller
### Router terletak pada file app/config/Routes.php
## Membuat Route Baru.
### Tambahkan kode berikut di dalam Routes.php
```
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```
### Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.
```
php spark routes
```
![7](https://user-images.githubusercontent.com/56241745/122192786-2c767180-cebe-11eb-92df-e74b38eee08c.png)
### Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about
![8](https://user-images.githubusercontent.com/56241745/122193254-8ecf7200-cebe-11eb-820b-ea543391aa53.png)
### Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.
## Membuat Controller
### Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama `page.php` pada direktori Controller kemudian isi kodenya seperti berikut.
![9](https://user-images.githubusercontent.com/56241745/122194270-7d3a9a00-cebf-11eb-9160-c04261deedda.png)
### Tambahkan method baru pada Controller Page seperti berikut. Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan alamat : http://localhost/lab11_php_ci/ci4/public/page/tos
![10](https://user-images.githubusercontent.com/56241745/122217878-078ef800-ced8-11eb-948a-5cada664f1f5.png)
## Membuat View
### Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama `about.php` pada direktori view (app/view/about.php) kemudian isi kodenya seperti berikut.
![11](https://user-images.githubusercontent.com/56241745/122219646-d6172c00-ced9-11eb-9dbd-d34416299b8a.png)
### Ubah method about pada class Controller Page menjadi seperti berikut:
![12](https://user-images.githubusercontent.com/56241745/122219996-23939900-ceda-11eb-8191-a31d3b37f475.png)
## Membuat Layout Web dengan CSS
### Buat file css pada direktori public dengan nama style.css copy file dari praktikum lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.
![13](https://user-images.githubusercontent.com/56241745/122221153-36f33400-cedb-11eb-9878-4e03aac06685.png)
### Kemudian buat folder template pada direktori view kemudian buat file `header.php` dan `footer.php`
### File app/view/template/header.php
![14](https://user-images.githubusercontent.com/56241745/122222305-550d6400-cedc-11eb-8933-b9628582846b.png)
### File app/view/template/footer.php
![15](https://user-images.githubusercontent.com/56241745/122222365-65254380-cedc-11eb-9edb-cdb55e1b450b.png)
### Kemudian ubah file app/view/about.php seperti berikut.
![16](https://user-images.githubusercontent.com/56241745/122378048-cf4af080-cf8f-11eb-87d6-e76f8fc2a8d8.png)
## Pertanyaan dan Tugas
### Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.
### About
![17](https://user-images.githubusercontent.com/56241745/122380490-1fc34d80-cf92-11eb-888a-74faa5e4cfe7.png)
### Kontak
![18](https://user-images.githubusercontent.com/56241745/122380506-2651c500-cf92-11eb-81f9-0c375c5b5395.png)
# Praktikum 12: Framework Lanjutan (CRUD)
## Langkah-langkah Praktikum
## Persiapan
### Untuk memulai membuat aplikasi CRUD sederhana, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.
## Membuat Database: Studi Kasus Data Artikel
```
CREATE DATABASE lab_ci4;
```
### Membuat Tabel
![1](https://user-images.githubusercontent.com/56241745/122881931-dd20bd00-d365-11eb-9f6e-852ea778ffb2.png)
## Konfigurasi koneksi database
### Selanjutnya membuat konfigurasi untuk menghubungkan dengan database server. Konfigurasi dapat dilakukan dengan du acara, yaitu pada file app/config/database.php atau menggunakan file `.env`. Pada praktikum ini kita gunakan konfigurasi pada file `.env`.
![2](https://user-images.githubusercontent.com/56241745/122889351-ebbea280-d36c-11eb-9b95-29e1fbc9aefe.png)
## Membuat Model
### Selanjutnya adalah membuat Model untuk memproses data Artikel. Buat file baru pada direktori app/Models dengan nama ArtikelModel.php
![3](https://user-images.githubusercontent.com/56241745/122889477-07c24400-d36d-11eb-9053-7204256d3afe.png)
## Membuat Controller
### Buat Controller baru dengan nama Artikel.php pada direktori app/Controllers.
![4](https://user-images.githubusercontent.com/56241745/122889608-1f99c800-d36d-11eb-8924-5884f2e3de75.png)
## Membuat View
### Buat direktori baru dengan nama artikel pada direktori app/views, kemudian buat file baru dengan nama index.php.
![5](https://user-images.githubusercontent.com/56241745/122889715-3a6c3c80-d36d-11eb-8b79-554953b92d10.png)
### Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel
![6](https://user-images.githubusercontent.com/56241745/122890068-8dde8a80-d36d-11eb-9987-8f10a927642e.png)
### Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.
![7](https://user-images.githubusercontent.com/56241745/122890089-93d46b80-d36d-11eb-993b-c4171274bc02.png)
### Refresh kembali browser, sehingga akan ditampilkan hasilnya.
![8](https://user-images.githubusercontent.com/56241745/122890111-9931b600-d36d-11eb-9d4e-b2b7c786dc4e.png)
## Membuat Tampilan Detail Artikel
### Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view().
![9](https://user-images.githubusercontent.com/56241745/122890136-9e8f0080-d36d-11eb-8ca6-eb79d9824858.png)
## Membuat View Detail
### Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.
![10](https://user-images.githubusercontent.com/56241745/122890291-be262900-d36d-11eb-8aab-6b0aaaf05a4d.png)
## Membuat Routing untuk artikel detail
### Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.
![11](https://user-images.githubusercontent.com/56241745/123625598-1bbce880-d83a-11eb-954a-b10ff79e73e3.png)
## Membuat Menu Admin
### Menu admin adalah untuk proses CRUD data artikel. Buat method baru pada Controller Artikel dengan nama admin_index().
![12a](https://user-images.githubusercontent.com/56241745/123620209-2a080600-d834-11eb-9ca0-5fbdd8658c64.png)
### Selanjutnya buat view untuk tampilan admin dengan nama admin_index.php
![12](https://user-images.githubusercontent.com/56241745/123619278-3a6bb100-d833-11eb-8dda-a087d53a0b61.png)
### Tambahkan routing untuk menu admin seperti berikut:
![13](https://user-images.githubusercontent.com/56241745/123620453-72bfbf00-d834-11eb-8c5e-d0327843a77e.png)
### Akses menu admin dengan url http://localhost:8080/admin/artikel
![14](https://user-images.githubusercontent.com/56241745/123624966-6ee26b80-d839-11eb-84ed-e12d01935570.png)
## Menambah Data Artikel
### Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().
![15](https://user-images.githubusercontent.com/56241745/123622394-5e7cc180-d836-11eb-8571-edb829c11e29.png)
### Kemudian buat view untuk form tambah dengan nama form_add.php
![16](https://user-images.githubusercontent.com/56241745/123623070-3e99cd80-d837-11eb-9012-482ded943c31.png)
## Mengubah Data
### Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().
![17](https://user-images.githubusercontent.com/56241745/123623381-8ddffe00-d837-11eb-8d13-afbe4df77d64.png)
### Kemudian buat view untuk form tambah dengan nama form_edit.php
![18](https://user-images.githubusercontent.com/56241745/123624019-4c038780-d838-11eb-9c91-ae9d3810ed2c.png)
## Menghapus Data
### Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().
![19](https://user-images.githubusercontent.com/56241745/123624245-8b31d880-d838-11eb-8102-756887e1b2c2.png)
# Praktikum 13: Framework Lanjutan (Modul Login)
## Persiapan.
### Untuk memulai membuat modul Login, yang perlu disiapkan adalah database server menggunakan MySQL. Pastikan MySQL Server sudah dapat dijalankan melalui XAMPP.
### Membuat Tabel: User Login
![1](https://user-images.githubusercontent.com/56241745/123758358-094db800-d8e9-11eb-80e6-715991f4ab67.png)
## Membuat Model User
### Selanjutnya adalah membuat Model untuk memproses data Login. Buat file baru pada direktori app/Models dengan nama UserModel.php
![2](https://user-images.githubusercontent.com/56241745/123758786-7cefc500-d8e9-11eb-9c45-c36b1490408e.png)
## Membuat Controller User
### Buat Controller baru dengan nama User.php pada direktori app/Controllers. Kemudian tambahkan method index() untuk menampilkan daftar user, dan method login() untuk proses login
![3](https://user-images.githubusercontent.com/56241745/123759270-f091d200-d8e9-11eb-96f7-b5f9f9dac3c7.png)
## Membuat View Login
### Buat direktori baru dengan nama user pada direktori app/views, kemudian buat file baru dengan nama login.php. 
![4](https://user-images.githubusercontent.com/56241745/123759537-30f15000-d8ea-11eb-93ad-491705c63947.png)
## Membuat Database Seeder
### Database seeder digunakan untuk membuat data dummy. Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password kedaalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut:
![5](https://user-images.githubusercontent.com/56241745/123759885-8594cb00-d8ea-11eb-8993-daaf75f9134e.png)
### Selanjutnya, buka file UserSeeder.php yang berada di lokasi direktori /app/Database/Seeds/UserSeeder.php kemudian isi dengan kode berikut:
![6](https://user-images.githubusercontent.com/56241745/123760114-be34a480-d8ea-11eb-908d-5e3980da2d71.png)
### Selanjutnya buka kembali CLI dan ketik perintah berikut:
![7](https://user-images.githubusercontent.com/56241745/123760412-0358d680-d8eb-11eb-9cef-5466aef45fe5.png)
## Uji Coba Login
### Selanjutnya buka url http://localhost:8080/user/login seperti berikut:
![8](https://user-images.githubusercontent.com/56241745/123760939-84b06900-d8eb-11eb-8859-43f8f3700213.png)
## Menambahkan Auth Filter
### Selanjutnya membuat filer untuk halaman admin. Buat file baru dengan nama Auth.php pada direktori app/Filters. 
![9](https://user-images.githubusercontent.com/56241745/123761155-c04b3300-d8eb-11eb-9b5a-6d1bd8b3869f.png)
### Selanjutnya buka file app/Config/Filters.php tambahkan kode berikut:
![10](https://user-images.githubusercontent.com/56241745/123761547-1c15bc00-d8ec-11eb-8a72-23ee6279ae34.png)
### Selanjutnya buka file app/Config/Routes.php dan sesuaikan kodenya.
![11](https://user-images.githubusercontent.com/56241745/123762103-a8c07a00-d8ec-11eb-9bf8-f9e68dc335bd.png)
## Fungsi Logout
### Tambahkan method logout pada Controller User seperti berikut:
![13](https://user-images.githubusercontent.com/56241745/123762840-62b7e600-d8ed-11eb-83ba-416d21bde3be.png)
### Tambahkan menu logout di header admin. Ke direktori app\view\template lalu buka file admin_header.php tambahkan kode berikut
![14](https://user-images.githubusercontent.com/56241745/123764900-6e0c1100-d8ef-11eb-8642-ad18b28b889e.png)
### Tambahkan route logout dengan cara ke direktori app\Config\Routes.php lalu tambahkan kode berikut
![15](https://user-images.githubusercontent.com/56241745/123764883-69dff380-d8ef-11eb-986d-23e33f692a9a.png)
## Login
![16a](https://user-images.githubusercontent.com/56241745/123765292-cfcc7b00-d8ef-11eb-9cbc-5922e8d76a9c.png)
## Setelah Login
![16](https://user-images.githubusercontent.com/56241745/123766177-a6f8b580-d8f0-11eb-83de-d2ac41853031.png)
