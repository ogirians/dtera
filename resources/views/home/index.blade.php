
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
   <!-- ======= Services Section ======= -->
   <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          

        </div>

      </div>
    </section><!-- End Services Section -->



<!-- ======= VIdeo Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

 <!-- ======= Berita Section ======= -->

      <!-- ======= Berita Details Section ======= -->
      <section class="service-details">
      <div class="container">
        <div class="section-title">
          <h2 href="{{ asset('berita') }}">Berita</h2>
          <p>cek Berita terbaru terkai Dtera dan Juga hal-hal terkait bidang kontruksi</p>
        </div>
        <div class="row">
            <?php  
            if($berita) {
                foreach($berita as $berita) { ?>
              <div class="col-md-4 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                  <div class="card-img">
                    <img src="{{ asset('public/upload/image/thumbs/'.$berita->gambar) }}" alt="<?php  echo $berita->judul_berita ?>">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{ asset('read/'.$berita->slug_berita) }}"><?php  echo $berita->judul_berita ?></a></h5>
                    <p class="card-text"><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 250, $end='...') ?></p>
                    <div class="read-more"><a href="{{ asset('read/'.$berita->slug_berita) }}"><i class="icofont-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>
              <?php }}else{ ?>
                <div class="col-md-12">
                <p class="alert alert-info">Produk tidak ditemukan. Gunakan kata kunci pencarian yang berbeda.</p>
              </div>
              <?php } ?>
              <div class="col-md-12 entries" style="text-align:center;">
                <div class="read-more">
                  <a class="btn btn-primary" style="color:white ; background-color: #68a4c4; border-color : #68a4c4; border-radius:0px; margin-top: -50px;" href="{{ asset('berita') }}">Berita lainnya..</a>
                </div>              
              </div>
              
              

      </div>
    </section><!-- End Service Details Section -->

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