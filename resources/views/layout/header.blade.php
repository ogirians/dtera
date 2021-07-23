<?php
use Illuminate\Support\Facades\DB;
use App\Nav_model;
$site                 = DB::table('konfigurasi')->first();
// Produk
$myproduk             = new Nav_model();
$nav_kategori_produk  = $myproduk->nav_produk();
// Nav profil
$myprofil             = new Nav_model();
$nav_profil           = $myprofil ->nav_profil();
?>
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex justify-content-between align-items-center ">

      <div class="logo float-left">
        <h1 class="text-light"><a href="{{ asset('/') }}"><span>
          <img src="{{ asset('public/upload/image/'.$site->logo) }}" alt="Dtera" style="min-height: 50px; width: auto; margin-top:-10px;">
        </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="{{ asset('/') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          
            <li id="homeMenu" class=""><a href="{{ asset('/') }}" onclick="navHeadFunc(1)">Home</a></li>
            <li id="profilMenu" class="drop-down"><a href="" onclick="navHeadFunc(2)">Profil</a>
              <ul>
                <?php foreach($nav_profil as $nav_profil) { ?>
                <li id="profilMenu"><a  href="{{ asset('berita/read/'.$nav_profil->slug_berita) }}" onclick="navHeadFunc(2)"><?php echo $nav_profil->judul_berita ?></a></li>
                <?php } ?>
              </ul>
            </li>
            <li id="beritaMenu"><a href="{{ asset('berita') }}" onclick="navHeadFunc(3)">Berita</a></li>
          
           
            <!--<li id="produkMenu" class="drop-down"><a href="{{ asset('produk') }}" onclick="navHeadFunc(4)">Produk</a>
              <ul>
                <?php foreach($nav_kategori_produk as $nkp) { ?>
                <li><a href="{{ asset('produk/kategori/'.$nkp->slug_kategori_produk) }}" onclick="navHeadFunc(4)"><?php echo $nkp->nama_kategori_produk ?></a></li>
                <?php } ?>
                <li><a href="#"><hr style="margin: 0; padding: 0;"></a></li>
                <li><a href="{{ asset('produk') }}" onclick="navHeadFunc4()">Semua Produk</a></li>
              </ul>
            </li>-->
         
            <li id="kontakMenu"><a href="{{ asset('kontak') }}" onclick="navHeadFunc(5)">Kontak</a></li>
            <li id="galeriMenu" class="drop-down"><a href="#">Galeri</a>
              <ul>                
                <li><a href="{{ asset('video') }}">Video Youtube</a onclick="navHeadFunc(5)"></li>
                <li><a href="{{ asset('galeri') }}">Galeri Gambar</a onclick="navHeadFunc(5)"></li>
                <li><a href="{{ asset('download') }}">Unduhan File</a onclick="navHeadFunc(5)"></li>
              </ul>
            </li>
            <!--
              <li>
                  <a href="{{ asset('pemesanan') }}" class="orange" style="margin-top: -5px" title="Form Pemesanan"><div class="belanja"><i class="fa fa-shopping-cart"></i> Form Order</div></a>
              </li>-->
                     
            
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header --><!-- ======= Hero Section ======= -->