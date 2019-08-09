# SOLUSI IT PADA PERMASALAHAN KABOBS PREMIUM KEBAB
Proyek ini merupakan implementasi dalam bentuk MPV dari tugas keprofesian SPARTA 2018. Secara umum proyek berbasis web  ini terbagi menjadi 3 bagian, yaitu kasir, tampilan untuk dapur, dan tampilan untuk pelanggan. Pada komputer kasir, program diawali dengan login. Setelah login, akan ditampilkan mainpage yang menyediakan button untuk melakukan input pesanan pelanggan secara mudah dan menghitung total harga item yang dibeli. Setelah pesanan selesai diinput, pesanan akan ditampilkan pada layar untuk dapur dan layar untuk pelanggan. Koki dapat segera memasakn setiap item pesanan pelanggan tersebut. Sementara di layar untuk pelanggan akan ditampilkan status pesanan tersebut, yaitu sedang diproses. Jika koki di dapur telah selesai memasak pesanan, koki akan menekan button ready sehingga status pesanan pada layar untuk pelanggan akan berubah menjadi sudah siap (ready).

## Getting Started

### Prerequisites
Dibutuhkan 2 buah laptop atau PC dan 1 buah tablet untuk menjalankan program ini.

### Installing

A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo


## Running the tests

Explain how to run the automated tests for this system


## Deployment

Add additional notes about how to deploy this on a live system

## Built With
* HTML
* CSS
* JavaScript
* PHP
* MySQL

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning


## Authors
Kelompok 12 / Bosque
Gregorius Jovan Kresnadi / 16518017
Hollyana Puteri Haryono / 16518101
Muhammad Daffa Dinaya / 16518113
Vincentius Ian Widi Nugroho / 16518130
Brandon Oktavian Pardede / 16518151
Moh. Mirza Maulana Ikhsan / 16518201
Muhamad Ihza Faida Akbar / 16518214
Anna Elvira Hartoyo / 16518223
Muhammad Naufal Fakhrizal / 16518230
Hasna Roihan Nafiisah / 16518289
Ernest Giovanni / 16518297
Ananda Yulizar Muhammad / 16518346
Sulis Tiana / 16518348348
Rizkin Geordany / 16518408
Muhammad Cisco Zulfikar / 16518409


## License
Tidak ada lisensi untuk proyek ini.

## Acknowledgments



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
                data menu yang masih dibuat : Kebab Daging, Kebab Black Pepper
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
    - 
    