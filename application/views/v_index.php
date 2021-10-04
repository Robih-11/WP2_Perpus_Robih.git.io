<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/stylebuku.css">
    <title>>Web Pro II | Merancang Template sederhana dengan codeigniter</title>
</head>
<body>
<section>
        <p align='justify'>Nim : 12200131 </br>
                          Nama : Robih </br>
                          Kelas : 12.37.3B</p>
        <h1><?php echo $judul?></h1>
        <p align='justify'>Pada pengertian codeigniter diatas dijelaskan bahwa codeigniter menggunakan metode MVC. Apa itu
            MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.</p>
                <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller</p>

                <ol type="a">
                <li> Model</li>
        <p align='justify'> Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi.
            Model justru dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database. Seperti misalnya
            mengambil data dari database, menginput dan pengolahan database lainnya. Semua intruksi atau fungsi yang berhubung dengan pengolahan database di letakkan
            di dalam model. sebagai contoh, Jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran
            lingkaran sebagai kelas model.</p>
        
        <p align='justify'> Sebagai catatan, semua model harus disimpan di dalam folder application\model</p>

            <li>view</li>
            <p align='justify'> View Merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser)
                Tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer
                dalam melakukan pengembangan Tampilan halaman website.</p>

            <li>controller</li>
            <p align='justify'> Controller Merupakan kumpulan intruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan
                dengan model secara langsung, intinya data yang tersimpan di database(model) di ambil oleh controller dan kemudian controller
                pula yang menampilkan nya ke view. Jadi controller lah yang mengolah intruksi.</p>

            <p align='justify'> Dari penjelasan tentang model view dan controller diatas dapat di simpulkan bahwa controller sebagai penghubung
                view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep MVC, controller memanggil intruksi
                pada model yang mengambil data yang ada pada database, kemudian controller yang meneruskannya pada view untuk ditampilkan. Jadi 
                jika jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena web designer atau front-end developer tidak
                lagi perlu berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi, karena back-end 
                developer yang menangani bagian controller yang modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat dilakukan
                dengan cepat dan terstruktur</p>
    </section>
</body>
</html>