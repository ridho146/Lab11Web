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
### Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka terminal/command prompt. 
