<!-- ======= Blog breadcums ======= -->
<section class="breadcrumbs" style="margin-top:80px;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>gambar</h2>

          <ol>
            <li><a href="{{ asset('/') }}">Home</a></li>
            <li>gambar</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog breadcum -->


<!-- ======= gambar Section ======= -->
<section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

        <?php foreach($galeris as $galeri) { ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('public/upload/image/'.$galeri->gambar) }}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo strip_tags($galeri->judul_galeri) ?></h4>
                <span><?php echo $galeri->nama_kategori_galeri ?></span>
                
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
        <div class="blog">
    
             {{ $galeris->links() }}

        </div>

      </div>
    </section><!-- End gambars Section -->