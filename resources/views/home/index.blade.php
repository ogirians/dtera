
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

       <!-- Slide 1 -->  
      <?php $isFirst = true; foreach($slider as $slider) { 
        if ($isFirst) {
          $isFirst = false;
          echo "<div class='carousel-item active'>";
      } else {
        echo "<div class='carousel-item'>";
      }   ?>          
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?php echo $slider->judul_galeri ?></h2>
          <p class="animate__animated animate__fadeInUp"><?php echo $slider->isi ?></p>
          <a href="<?php echo $slider->website ?>" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>
      <?php } ?>     

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
</section><!-- End Hero -->



<main id="main">

 <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-4 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <img src="{{ asset('public/upload/image/'.$site->icon) }}" alt="{{ $site->namaweb }}" class="img img-fluid img-thumbnail">
          </div>

          <div class="col-xl-8 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Selamat datang di {{ $site->namaweb }}</h3>
            <?php echo $site->tentang ?>

          </div>
        </div>

      </div>
      <hr>
    </section><!-- End About Section -->

<!-- ======= Apa itu Nitrico? Section ======= -->
<section id="apa-itu-nitrico" class="about">

      
  <div class="container">
    <div class="col-xl-12 col-lg-12 col-md-12 text-center" data-aos="fade-up">
          <h2>Produk <?php $site->namaweb ?></h2>
          <p><?php echo $site->deskripsi ?></p>
          <br><br>
    </div>
        <!-- START -->
    <div class="row">
      <?php  
            if($produks) {
            foreach($produks as $produk) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 produk text-center">
                  <figure class="thumnail">
                    <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}">
                      <img src="{{ asset('public/upload/image/'.$produk->gambar) }}" alt="<?php  echo $produk->nama_produk ?>" class="img-fluid img-thumbnail">
                    </a>
                  </figure>
                  <div class="keterangan">
                      <h3>
                        <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}">
                          <?php  echo $produk->nama_produk ?>
                        </a>
                      </h3>
                    <p class="harga">Rp <?php echo $produk->harga_jual; ?></p>
                  </div>
                  <div class="link-produk">
                    <p>
                      <input type="hidden" name="quantity" id="{{ $produk->id_produk }}" value="1" class="quantity">
                      <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Detail</a>
                        <a href="{{ asset('pemesanan?id_produk='.$produk->id_produk) }}" class="btn btn-info btn-sm">
                          <i class="fa fa-shopping-cart"></i> Pesan Produk Ini
                        </a>
                    </p>
                </div>
            </div>
            
          <?php } ?>
          <div class="clearfix"></div>
            <div class="col-md-12">
              <hr>
               {{ $produks->links() }}
              </div>
        <?php }else{ ?>
          <div class="col-md-12">
            <p class="alert alert-info">Produk tidak ditemukan. Gunakan kata kunci pencarian yang berbeda.</p>
          </div>
          <?php } ?>
          
    </div>
    <!-- END -->
    </div>
  <hr>
</section>
<!-- End Apa itu Nitrico? Section -->

 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title text-center" data-aos="fade-up">
          <h2>Berita terbaru</h2>
          <p><?php echo $site->namaweb ?></p>
        </div>

        <div class="row">

          <?php  
            if($berita) {
            foreach($berita as $berita) { ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 berita">
                  <figure class="thumnail">
                    <a href="{{ asset('berita/detail/'.$berita->slug_berita) }}">
                      <img src="{{ asset('public/upload/image/thumbs/'.$berita->gambar) }}" alt="<?php  echo $berita->judul_berita ?>" class="img-fluid img-thumbnail">
                    </a>
                  </figure>
                  <div class="keterangan">
                      <h3>
                        <a href="{{ asset('berita/detail/'.$berita->slug_berita) }}">
                          <?php  echo $berita->judul_berita ?>
                        </a>
                      </h3>
                    <p class="harga"><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 250, $end='...') ?></p>
                    <div class="link-berita">
                      <p>
                        <input type="hidden" name="quantity" id="<?php echo $berita->id_berita;?>" value="1" class="quantity">
                        <a href="{{ asset('berita/read/'.$berita->slug_berita) }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Baca Detail...</a>
                          
                      </p>
                  </div>
                  </div>
                  
            </div>
          <?php }}else{ ?>
          <div class="col-md-12">
            <p class="alert alert-info">Produk tidak ditemukan. Gunakan kata kunci pencarian yang berbeda.</p>
          </div>
          <?php } ?>
          <div class="col-md-12">
            <hr>
            <p class="text-center">
              <a href="{{ asset('berita') }}" class="btn btn-info"><i class="fa fa-newspaper"></i> Lihat berita lainnya...</a>
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

</main>
<script>

var getHeader = $('#header');
getHeader.addClass("header-transparent");



var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>