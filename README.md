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
    