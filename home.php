<?php
//koneksi
include "koneksi.php";

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPK TOPSIS</title>
    <!--bootstrap-->
    <link href="tampilan/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

    <!--menu-->
    <nav class="navbar navbar-default navbar-custom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">Profil</a>
        </div>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="kriteria.php">Kriteria</a>
            </li>
            <li>
              <a href="alternatif.php">Alternatif</a>
            </li>
            <li>
              <a href="poin.php">Poin</a>
            </li>
            <li>
              <a href="nilmat.php">Nilai Matriks</a>
            </li>
            <li>
              <a href="hastop.php">Hasil Topsis</a>
            </li>
            <li>
              <a href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>



  <section class="content">
    <div style="text-align:center">
      <h2  class="ui header">SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN HANDPHONE MENGGUNAKAN METODE TOPSIS</h2>
      <br>
      <img src="tampilan/image/hp.PNG" style="width:340px;height:300px;">
</div>
</br>
</br>
<div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
      <p style="text-indent: 30px;">Technique for Order Preference by Similarity to Ideal Solution (TOPSIS) didasarkan pada konsep dimana alternatif terpilih yang terbaik tidak hanya memiliki jarak terpendek dari solusi ideal positif, namun juga memiliki jarak terpanjang dari solusi ideal negatif.</p>
    </br>
      <p style="text-indent: 30px;">TOPSIS banyak digunakan dengan alasan: <br />
        • Konsepnya sederhana dan mudah dipahami <br />
        • Komputasinya efisien <br />
        • Memiliki kemampuan untuk mengukur kinerja relatif dari alternatif-alternatif keputusan dalam bentuk matematis yang sederhana.</p>
    </br>
      <p style="text-indent: 30px;">Langkah-langkah penyelesaian masalah MADM dengan TOPSIS:<br />
        • Membuat matriks keputusan yang ternormalisasi <br />
        • Membuat matriks keputusan yang ternormalisasi terbobot <br />
        • Menentukan matrikssolusi ideal positif & matriks solusi ideal negatif <br />
        • Menentukan jarak antara nilai setiap alternatif dengan matriks solusi ideal positif & matriks solusi ideal negatif <br />
        • Menentukan nilai preferensi untuk setiap alternatif.</p>
    </div>
  </div>
</div>
</br>
    <!--footer-->
    <footer class="text-center">
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              </br>
              <br />
              <em>Copyright &copy; Politeknik Harapan Bersama - 2022</em>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!--plugin-->
    <script src="tampilan/js/bootstrap.min.js"></script>

  </body>
</html>
