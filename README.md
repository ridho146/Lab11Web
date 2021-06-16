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
### Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRINMENT menjadi development.
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
### Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost/lab11_php_ci/ci4/public/about
![8](https://user-images.githubusercontent.com/56241745/122193254-8ecf7200-cebe-11eb-820b-ea543391aa53.png)
### Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.
## Membuat Controller
### Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama `page.php` pada direktori Controller kemudian isi kodenya seperti berikut.
![9](https://user-images.githubusercontent.com/56241745/122194270-7d3a9a00-cebf-11eb-9160-c04261deedda.png)
### Tambahkan method baru pada Controller Page seperti berikut.
