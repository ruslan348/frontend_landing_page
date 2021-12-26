<?php
include "connection.php";

$query    = mysqli_query($conn, "SELECT * FROM tbl_paket");
// $result    = mysqli_fetch_row($query);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>NiagaHoster</title>
  <!-- my font  online-->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&family=Roboto:wght@300;700&display=swap" rel="stylesheet">

  <!-- Option 1 Bootstrap CSS online-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Option 2 Bootstrap CSS offline-->
  <!-- <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Option 1 fontawesome css online-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Option 2 fontawesome css offline -->
  <!-- <link rel="stylesheet" href="assets/fontawesome/css/all.css"> -->
  <!-- <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/regular.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/solid.min.css"> -->

  <!-- custome css -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <!-- header contact -->
  <div class="container">
    <div class="row info-contact mt-1">
      <div class="col-md-6">
        <h6>
          <i class="fas fa-tag"></i>
          Gratis Ebook 9 Cara Cerdas Menggunakan Domain
        </h6>
      </div>
      <div class="col-md-6 call-phone">
        <a href="#" class="mr-3">
          <i class="fas fa-phone"></i>
          089507421370
        </a>
        <a href="#" class="mr-3">
          <i class="fas fa-comment-alt"></i>
          Live Chate
        </a>
        <a href="#" class="mr-3">
          <i class="fas fa-user-circle"></i>
          Member Area
        </a>
      </div>
    </div>
  </div>
  <!-- end heder contact -->
  <hr class="line-contact">
  <!-- header menu navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" aria-label="logo" href="index.html"><img src="assets/images/niagahoster-logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#hosting">Hosting</a>
          <a class="nav-link" href="#">Domain</a>
          <a class="nav-link" href="#">Server</a>
          <a class="nav-link" href="#">Website</a>
          <a class="nav-link" href="#">Afiliasi</a>
          <a class="nav-link" href="#">Promo</a>
          <a class="nav-link" href="#">Pembayaran</a>
          <a class="nav-link" href="#">Review</a>
          <a class="nav-link" href="#">Kontak</a>
          <a class="nav-link" href="#">Blog</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- end header menu navbar -->
  <hr class="line-navbar">
  <!-- content  baner-->
  <div class="container">
    <div class="row content-baner">
      <div class="col-md-6 col-sm-12">
        <h1>PHP Hosting</h1>
        <h3 class="mb-4">Cepat, handal, penuh dengan modul PHP yang anda butuhkan</h3>
        <p><i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
          Solusi PHP untuk performa query yang lebih cepat
        </p>
        <p>
          <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
          Konsumsi memori yang lebih rendah
        </p>
        <p>
          <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
          Suport PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7
        </p>
        <p>
          <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
          Fiture enkripsi IonCube dan Zend Guard Loaders
        </p>
      </div>
      <div class="col-md-6 col-sm-12 text-right">
        <img src="assets/svg/illustration banner PHP hosting-01.svg" class="img-right" alt="">
      </div>
    </div>
  </div>
  <!-- end content baner-->
  <hr class="line-baner">
  <!-- service PHP -->
  <div class="container">
    <div class="row text-center mt-5 mb-5">
      <div class="col-md-4 col-sm-12 zenguard mb-2">
        <img src="assets/svg/illustration-banner-PHP-zenguard01.svg" width="100" alt="svg_image" class="mb-2 ml-5">
        <h4>PHP Zend Guard Loader</h4>
      </div>
      <div class="col-md-4 col-sm-12 composer mb-2">
        <img src="assets/svg/icon-composer.svg" width="100" alt="svg_image" class="mb-2">
        <h4>PHP Composer</h4>
      </div>
      <div class="col-md-4 col-sm-12 ioncube mb-2">
        <img src="assets/svg/icon-php-hosting-ioncube.svg" width="100" alt="svg_image" class="mb-2 mr-5">
        <h4>PHP IonCube Loader</h4>
      </div>
    </div>
    <!-- end service PHP -->

    <!-- paket hosting -->
    <div class="row text-center justify-content-center mb-4 paket-hosting-header" id="hosting">
      <h4><b>Paket Hosting Singapura yang Tepat</b></h4>
      <h5>Diskon 40% + Domain dan SSL Gratis untuk Anda</h5>
    </div>
    <div class="row justify-content-center paket-hosting">
      <?php $bayi = mysqli_fetch_row($query)  ?>
      <div class="col-md-3 col-sm-6">
        <?php
        $conversi = rupiah($bayi[3]);
        $data1 = substr($conversi, 0, 6);
        $data2 = substr($conversi, 6);
        // var_dump($data2);
        // die;
        ?>
        <?php if ($bayi[0] == 1) : ?>
          <div class="card" style="width: 18rem;">
            <div class="card-header">
              <?= $bayi[1]; ?>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item price">
                <p><strike><?= rupiah($bayi[2]); ?></strike></p>
                <p>
                <h3><b><?= $data1; ?><sup><?= $data2; ?></sup></b><sup>/bln</sup></h3>
                </p>
              </li>
              <li class="list-group-item"><strong><?= $bayi[4]; ?></strong> Pengguna Terdaftar</li>
              <li class="list-group-item item-product">
                <p><b><?= $bayi[5]; ?></b></p>
                <p><b>500 MB</b> Disk Space</p>
                <p><b>Unlimited</b> Bandwidth</p>
                <p><b>Unlimited</b> Databases</p>
                <p><b>1</b> Domain</p>
                <p><b>Instant </b>Backup</p>
                <p><b>Unlimited</b> SSL Gratis Selamanya</p>
                <a href="#" class="btn btn-primary">Pilih Sekarang</a>
              </li>
            </ul>
          </div>
        <?php endif ?>
      </div>

      <?php $pelajar = mysqli_fetch_row($query) ?>
      <?php
      $conversi = rupiah($pelajar[3]);
      $data1 = substr($conversi, 0, 6);
      $data2 = substr($conversi, 6);
      ?>
      <div class="col-md-3 col-sm-6">
        <?php if ($pelajar[0] == 2) : ?>
          <div class="card" style="width: 18rem;">
            <div class="card-header">
              <?= $pelajar[1]; ?>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item price">
                <p><strike><?= rupiah($pelajar[2]); ?></strike></p>
                <p>
                <h3><b><?= $data1; ?><sup><?= $data2; ?></sup></b><sup>/bln</sup></h3>
                </p>
              </li>
              <li class="list-group-item"><strong><?= $pelajar[4]; ?></strong> Pengguna Terdaftar</li>
              <li class="list-group-item item-product">
                <p><strong><?= $pelajar[5]; ?></strong></p>
                <p><strong>Unlimited</strong> Disk Space</p>
                <p><strong>Unlimited</strong> Bandwidth</p>
                <p><strong>Unlimited</strong> POP3 Email</p>
                <p><strong>Unlimited</strong> Databases</p>
                <p><strong>10</strong> Addon Domains</p>
                <p><strong>Instant</strong> Backup</p>
                <p><strong>Domain</strong> Gratis Selamanya</p>
                <p><strong>Unlimited</strong> SSL Gratis Selamanya</p>
                <a href="#" class="btn btn-primary">Pilih Sekarang</a>
              </li>
            </ul>
          </div>
        <?php endif ?>
      </div>

      <?php $personal = mysqli_fetch_row($query) ?>
      <?php
      $conversi = rupiah($personal[3]);
      $data1 = substr($conversi, 0, 6);
      $data2 = substr($conversi, 6);
      ?>
      <div class="col-md-3 col-sm-6">
        <?php if ($personal[0] == 3) : ?>
          <div class="card" style="width: 18rem;">
            <div class="card-header best-seler">
              <?= $personal[1]; ?>
            </div>
            <div class="ribbon">
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item price best-seler">
                <p><strike><?= rupiah($personal[2]); ?></strike></p>
                <p>
                <h3><b><?= $data1; ?><sup><?= $data2; ?></sup></b><sup>/bln</sup></h3>
                </p>
              </li>
              <li class="list-group-item best-seler" style="background: #007fde;"><strong><?= $personal[4]; ?></strong> Pengguna Terdaftar</li>
              <li class="list-group-item item-product">
                <p><strong><?= $personal[5]; ?></strong></p>
                <p><strong>Unlimited</strong> Disk Space</p>
                <p><strong>Unlimited</strong> Bandwidth</p>
                <p><strong>Unlimited</strong> POP3 Email</p>
                <p><strong>Unlimited</strong> Databases</p>
                <p><strong>Unlimited</strong> Addon Domains</p>
                <p><strong>Instant</strong> Backup</p>
                <p><strong>Domain</strong> Gratis Selamanya</p>
                <p><strong>Unlimited</strong> SSL Gratis Selamanya</p>
                <p><strong>Private</strong> Name Server</p>
                <p><strong>SpamAssasin</strong> Mail Protection</p>
                <a href="#" class="btn btn-primary">Pilih Sekarang</a>
              </li>
            </ul>
          </div>
        <?php endif; ?>
      </div>

      <?php $bisnis = mysqli_fetch_row($query) ?>
      <?php
      $conversi = rupiah($bisnis[3]);
      $data1 = substr($conversi, 0, 6);
      $data2 = substr($conversi, 6);
      ?>
      <div class="col-md-3 col-sm-6">
        <?php if ($bisnis[0] == 4) : ?>
          <div class="card" style="width: 18rem;">
            <div class="card-header">
              <?= $bisnis[1]; ?>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item price">
                <p><strike><?= rupiah($bisnis[2]); ?></strike></p>
                <p>
                <h3><b><?= $data1; ?><sup><?= $data2; ?></sup></b><sup>/bln</sup></h3>
                </p>
              </li>
              <li class="list-group-item"><strong><?= $bisnis[4]; ?></strong> Pengguna Terdaftar</li>
              <li class="list-group-item item-product">
                <p><strong><?= $bisnis[5]; ?></strong></p>
                <p><strong>Unlimited</strong> Disk Space</p>
                <p><strong>Unlimited</strong> Bandwidth</p>
                <p><strong>Unlimited</strong> POP3 Email</p>
                <p><strong>Unlimited</strong> Databases</p>
                <p><strong>Unlimited</strong> Addon Domains</p>
                <p><strong>Magic</strong> Auto Backup & Restore</p>
                <p><strong>Domain</strong> Gratis Selamanya</p>
                <p><strong>Unlimited</strong> SSL Gratis Selamanya</p>
                <p><strong>Private</strong> Name Server</p>
                <p><strong>Prioritas</strong> Layanan Suport</p>
                <p><strong>SpamExpert</strong> Pro Mail Protection</p>
                <a href="#" class="btn btn-primary">Diskon 40%</a>
              </li>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="row text-center powerfull">
      <h4 class="performance mb-4 mt-5">
        Powerfull dengan Limit PHP yang Lebih Besar
      </h4>
    </div>
    <div class="row card-services justify-content-center">
      <div class="col-md-4 col-sm-12 mb-3">
        <div class="card" style="width: 100%;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
              max execution time 300s
            </li>
            <li class="list-group-item list-group-item-secondary">
              <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
              max execution time 300s
            </li>
            <li class="list-group-item">
              <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
              php memory limit 1024 MB
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="card" style="width: 100%;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
              post max size 128 MB
            </li>
            <li class="list-group-item list-group-item-secondary">
              <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
              upload max filesize 128 MB
            </li>
            <li class="list-group-item">
              <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
              max input vars 2500
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!--  -->
    <div class="row text-center all-paket-hosting">
      <h4 class="performance mb-4 mt-5">
        Semua Paket Hosting Sudah Termasuk
      </h4>
    </div>
    <div class="row text-center service-product">
      <div class="col-md-4 col-sm-12">
        <img src="assets/svg/icon PHP Hosting_PHP Semua Versi.svg" width="70" alt="">
        <h4><b>PHP Semua Versi</b></h4>
        <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7 Ubah sesuka Anda</p>
      </div>
      <div class="col-md-4 col-sm-12">
        <img src="assets/svg/icon PHP Hosting_My SQL.svg" width="70" alt="">
        <h4><b>MySQL Versi 5.6</b></h4>
        <p>Nikmati MySQL versi terbaru, tercepat dan kaya akan fiture</p>
      </div>
      <div class="col-md-4 col-sm-12">
        <img src="assets/svg/icon PHP Hosting_CPanel.svg" width="70" alt="">
        <h4><b>Panel Hosting cPanel</b></h4>
        <p>Kelola website dengan panel canggih yang familiar di hati Anda</p>
      </div>
      <div class="col-md-4 col-sm-12">
        <img src="assets/svg/icon PHP Hosting_garansi uptime.svg" width="70" alt="">
        <h4><b>Garansi Uptime 99.9%</b></h4>
        <p>Data center yang mendukung kelangsungan website Anda 24/7.</p>
      </div>
      <div class="col-md-4 col-sm-12">
        <img src="assets/svg/icon PHP Hosting_InnoDB.svg" width="70" alt="">
        <h4><b>Database InoDB Unlimited</b></h4>
        <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda</p>
      </div>
      <div class="col-md-4 col-sm-12">
        <img src="assets/svg/icon PHP Hosting_My SQL remote.svg" width="70" alt="">
        <h4><b>Wilcard Remote MySQL</b></h4>
        <p>Mendukung s/d 25 max_user_connections dan 100 max connection</p>
      </div>
    </div>


    <div class="row text-center frm-laravel">
      <h4 class="performance mb-4 mt-5">
        Mendukung Penuh Framework Laravel
      </h4>
    </div>
    <div class="row justify-content-center suport-laravel mb-2">
      <div class="col-md-6 col-sm-12">
        <h4>Tidak perlu menggunakan dedicted atau VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</h4>
        <p><i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
          Solusi PHP untuk performa query yang lebih cepat
        </p>
        <p>
          <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
          Konsumsi memori yang lebih rendah
        </p>
        <p>
          <i class="fas fa-check-circle" style="color:rgb(62, 185, 5)"></i>
          Suport PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7
        </p>
        <p>
        <h6>NB : Composer dan SSH hanya tersedia pada paket Personal dan Bisnis </h6>
        </p>
        <a href="#" class="btn btn-primary">Pilih Sekarang</a>
      </div>
      <div class="col-md-6 col-sm-12">
        <img src="assets/svg/illustration banner support laravel hosting.svg" width="500" alt="">
      </div>
    </div>


    <div class="row modul-php">
      <h4 class="performance text-center mb-4 mt-5">
        Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.
      </h4>
    </div>
    <div class="row mb-5 service-modul justify-content-center">
      <div class="col-md-2 col-sm-6">
        <ul class="list-group">
          <li class="list-group-item">IcePHP</li>
          <li class="list-group-item">apc</li>
          <li class="list-group-item">apcu</li>
          <li class="list-group-item">apcu</li>
          <li class="list-group-item">apm</li>
          <li class="list-group-item">ares</li>
          <li class="list-group-item">bcmath</li>
          <li class="list-group-item">bcompiler</li>
          <li class="list-group-item">big_int</li>
          <li class="list-group-item">bitset</li>
          <li class="list-group-item">bloomy</li>
          <li class="list-group-item">bz2_filter</li>
          <li class="list-group-item">clamav</li>
          <li class="list-group-item">coin_acceptor</li>
          <li class="list-group-item">crack</li>
          <li class="list-group-item">dba</li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-6">
        <ul class="list-group">
          <li class="list-group-item">http</li>
          <li class="list-group-item">huffman</li>
          <li class="list-group-item">idn</li>
          <li class="list-group-item">igbinary</li>
          <li class="list-group-item">imagick</li>
          <li class="list-group-item">imap</li>
          <li class="list-group-item">inclued</li>
          <li class="list-group-item">onotify</li>
          <li class="list-group-item">interbase</li>
          <li class="list-group-item">intl</li>
          <li class="list-group-item">ioncube_loader</li>
          <li class="list-group-item">ioncube_loader_4</li>
          <li class="list-group-item">jsmin</li>
          <li class="list-group-item">json</li>
          <li class="list-group-item">idap</li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-6">
        <ul class="list-group">
          <li class="list-group-item">nd_pdo_mysql</li>
          <li class="list-group-item">oauth</li>
          <li class="list-group-item">oci8</li>
          <li class="list-group-item">odbc</li>
          <li class="list-group-item">opcache</li>
          <li class="list-group-item">pdf</li>
          <li class="list-group-item">pdo</li>
          <li class="list-group-item">pdo_dblib</li>
          <li class="list-group-item">pdo_firebird</li>
          <li class="list-group-item">pdo_mysql</li>
          <li class="list-group-item">pdo_odbc</li>
          <li class="list-group-item">pdo_pgsql</li>
          <li class="list-group-item">pg_sql</li>
          <li class="list-group-item">phalcon</li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-6">
        <ul class="list-group">
          <li class="list-group-item">stats</li>
          <li class="list-group-item">stem</li>
          <li class="list-group-item">stomp</li>
          <li class="list-group-item">suhosin</li>
          <li class="list-group-item">sybase_ct</li>
          <li class="list-group-item">sysvmsg</li>
          <li class="list-group-item">sysvsem</li>
          <li class="list-group-item">sysvshm</li>
          <li class="list-group-item">tidy</li>
          <li class="list-group-item">timezonedb</li>
          <li class="list-group-item">trader</li>
          <li class="list-group-item">translit</li>
          <li class="list-group-item">uploadprogress</li>
          <li class="list-group-item">uri_template</li>
          <li class="list-group-item">uuid</li>
        </ul>
      </div>
      <div class="col-md-12 text-center mt-3">
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>

    <div class="row tekno-lve mb-5">
      <div class="col-md-5 col-sm-12">
        <h4>Linux Hosting yang Stabil dengan Teknologi LVE</h4>
        <P>
          SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128 GB</strong> dan teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda Dilengkapi dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching. Apache load balancer berbasis LiteSpeed Technologis, <strong>CageFS</strong> security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda
        </P>
        <a href="#" class="btn btn-primary">Pilih Hosting Anda</a>
      </div>
      <div class="col-md-7 col-sm-12">
        <img src="assets/images/Image support.png" alt="">
      </div>
    </div>
  </div>

  <section class="sosmed">
    <div class="container">
      <!-- sosial media -->
      <div class="row mb-5">
        <div class="col-md-6 col-sm-12">
          <h5>Bagikan jika Anda menyukai halaman ini.</h5>
        </div>
        <div class="col-md-6 col-sm-12">
          <a href="#">
            <span style="font-size: 2em; color: #23599b;">
              <i class="fab fa-facebook-square"></i>
            </span>
          </a>
          <a href="#">
            <span style="font-size: 2em; color: #00aef1;">
              <i class="fab fa-twitter-square"></i>
            </span>
          </a>
          <a href="#">
            <span style="font-size: 2em; color: #fc4a35;">
              <i class="fab fa-google-plus-square"></i>
            </span>
          </a>
        </div>
      </div>
      <!-- end sosial media -->
    </div>
  </section>

  <section class="live-chat">
    <div class="container">
      <!-- LIVE CHATE -->
      <div class="row">
        <div class="col-md-9 col-sm-12">
          <h2>Perlu <strong>Bantuan ?</strong> Hubungi Kami :<strong> 0274-5305505</strong></h2>
        </div>
        <div class="col-md-3 col-sm-12">
          <a href="#" class="btn btn-primary">
            <i class="fas fa-comment-alt"> </i>
            Live Chat
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="footer">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-3 col-sm-6">
          <h6>Hubungi Kami</h6>
          <p>0274-5305505</p>
          <p>Senin - Minggu</p>
          <p class="mb-5">24 Jam Nonstop</p>
          <p>Jl.Selokan Mataram Monjali</p>
          <p>Karangjati MT I/304</p>
          <p>Sinduadi, Mlati, Sleman</p>
          <p>Yogyakarta 55284</p>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Layanan</h6>
          <a href="#">Domain</a>
          <a href="#">Shared Hosting</a>
          <a href="#">Cloud VPS Hosting</a>
          <a href="#">Managed VPS Hosting</a>
          <a href="#">Web Builder</a>
          <a href="#">Keamanan SSL / HTTPS</a>
          <a href="#">Program Afiliasi</a>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Service Hosting</h6>
          <a href="#">Hosting Murah</a>
          <a href="#">Hosting Indonesia</a>
          <a href="#">Hosting Singapura SG</a>
          <a href="#">Hosting PHP</a>
          <a href="#">Hosting Wordpress</a>
          <a href="#">Hosting Laravel</a>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Tutorial</h6>
          <a href="#">Knowledgebase</a>
          <a href="#">Blog</a>
          <a href="#">Cara Pembayaran</a>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Tentang Kami</h6>
          <a href="#">Tim Niagahoster</a>
          <a href="#">Karir</a>
          <a href="#">Event</a>
          <a href="#">Penawaran & Promo Spesial</a>
          <a href="#">Kontak Kami</a>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Kenapa Pilih Niagahoster ?</h6>
          <a href="#">Suport Terbaik</a>
          <a href="#">Garansi Harga Termurah</a>
          <a href="#">Domain Gratis Selamanya</a>
          <a href="#">Datacenter Hosting Terbaik</a>
          <a href="#">Review Pelanggan</a>
        </div>
        <div class="col-md-6 col-sm-12">
          <h6>Newsletter</h6>
          <div class="email-media d-flex">
            <div class="form-input">
              <form class="d-flex input-email">
                <input class="form-control me-2 shadow-none" type="search" placeholder="Email" aria-label="Search">
                <button class="btn btn-outline-primary btn-email" type="submit">Berlangganan</button>
              </form>
            </div>
            <div class="use-sosmed d-flex">
              <a href="#">
                <span style="font-size: 1em; color: #fff;">
                  <div class="media">
                    <i class="fab fa-facebook-f"></i>
                  </div>
                </span>
              </a>
              <a href="#">
                <span style="font-size: 1em; color: #fff;">
                  <div class="media">
                    <i class="fab fa-twitter"></i>
                  </div>
                </span>
              </a>
              <a href="#">
                <span style="font-size: 1em; color: #fff;">
                  <div class="media">
                    <i class="fab fa-google-plus-g"></i>
                  </div>
                </span>
              </a>
            </div>
          </div>
          <div class="info-promo">
            <p>Dapatkan promo dan konten menarik</p>
            <p>dari penyedia hosting terbaik anda</p>
          </div>
        </div>
        <div class="col-md-12 pay">
          <h5 class="payment">Pembayaran</h5>
          <img src="assets/images/bank.png" alt="" width="100%">
          <h4 class="payment-info mb-5">Aktivasi instant dengan e-Payment Hosting dan Domain langsung aktif</h4>
          <hr class="line-footer">
        </div>
        <div class="col-md-8 col-sm-12">
          <h4 class="copyright">
            Copyright &copy;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Tecnovillage Jakarta
            Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing tecnology
          </h4>
        </div>
        <div class="col-md-4 col-sm-12">
          <h4 class="terms">
            <a href="#">
              Syarat dan Ketentuan | Kebijakan Privasi
            </a>
          </h4>
        </div>
      </div>
    </div>
  </section>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <!-- <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

</body>

</html>