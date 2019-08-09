# SOLUSI IT PADA PERMASALAHAN KABOBS PREMIUM KEBAB
Proyek ini merupakan implementasi dalam bentuk MPV dari tugas keprofesian SPARTA 2018. Secara umum proyek berbasis web  ini terbagi menjadi 3 bagian, yaitu kasir, tampilan untuk dapur, dan tampilan untuk pelanggan. Pada komputer kasir, program diawali dengan login. Setelah login, akan ditampilkan mainpage yang menyediakan button untuk melakukan input pesanan pelanggan secara mudah dan menghitung total harga item yang dibeli. Setelah pesanan selesai diinput, pesanan akan ditampilkan pada layar untuk dapur dan layar untuk pelanggan. Koki dapat segera memasakn setiap item pesanan pelanggan tersebut. Sementara di layar untuk pelanggan akan ditampilkan status pesanan tersebut, yaitu sedang diproses. Jika koki di dapur telah selesai memasak pesanan, koki akan menekan button ready sehingga status pesanan pada layar untuk pelanggan akan berubah menjadi sudah siap (ready).

## Getting Started

### Prerequisites
 Localhost server : Support Apache, MySQL, PHP


### Installing
1. Simpan aplikasi web dibawah direktori www atau htdocs yang ada di program localhost server
2. Jalankan server
3. Buka phpmyadmin melalui browser
4. Login dengan username "root" dan password ""
5. Setup database menggunakan sql query yang terdapat di db_temp.txt

## Running the tests


## Deployment
1. Jalankan local server
2. Buka alamat localhost/mlstn2kbbs

## Built With
* HTML
* CSS
* JavaScript
* PHP
* MySQL
* Bootstrap library

## Contributing


## Versioning


## Authors
Kelompok 12 / Bosque
* Gregorius Jovan Kresnadi / 16518017
* Hollyana Puteri Haryono / 16518101
* Muhammad Daffa Dinaya / 16518113
* Vincentius Ian Widi Nugroho / 16518130
* Brandon Oktavian Pardede / 16518151
* Moh. Mirza Maulana Ikhsan / 16518201
* Muhamad Ihza Faida Akbar / 16518214
* Anna Elvira Hartoyo / 16518223
* Muhammad Naufal Fakhrizal / 16518230
* Hasna Roihan Nafiisah / 16518289
* Ernest Giovanni / 16518297
* Ananda Yulizar Muhammad / 16518346
* Sulis Tiana / 16518348348
* Rizkin Geordany / 16518408
* Muhammad Cisco Zulfikar / 16518409


## License
Tidak ada lisensi untuk proyek ini.

## Acknowledgments
* Kami memperbaiki UI/UX dari sistem POS kabobs yang telah ada dan digunakan saat ini di outlets kabobs
* Sistem layar untuk pelanggan terinspirasi dari sistem serupa yang telah digunakan pada Domino's Pizza


# mlstn2kbbs
 flow dari awal program

 secara front end
 - login.php
    - sudah bisa validasi pengguna menggunakan username : username, password : password
 - MainPage.html
    - sudah ada nama pada setiap menu
    - tombol kategori sudah berfungsi
    - sudah ada tombol varian, topping, dan kepedasan tetapi masih belum berfungsi
    - tab order di sebelah kanan belum berfungsi

secara back end
- database mysql
    - sudah ada database kabobs yang memuat
        - login : informasi untuk login
        - menu :    nama
                    harga 
                    kategori (a la carte, drink, combo, dessert), ukuran (small, big)
                    ukuran (small, big)
                    kepedasan (not spicy, medium, spicy)
        - pelanggan : nama (bersifat dummy) ada 4
        - pesanan   : berisi id pelanggan dan id menu yang dipilih.
- connect mysql : db_connect.php
    -   server : localhost
    -   username    : root
    -   password    :
    -   database    : kabobs

- login.php
    - sudah bisa validasi melalui mysql

- MainPage.php
    - Dapat menampilkan menu dari tiap-tiap kategori.
    - Untuk menambah menu, pilih menu di bagian kiri, kemudian pilih varian, sauce, dan kepedasan, kemudian klik tombol tambah (+). Menu akan muncul di tabel beserta harga per menu dan total harga.
    - Proses pesanan belum diimplementasi.
    
