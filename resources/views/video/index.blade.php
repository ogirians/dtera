<!-- ======= Blog breadcums ======= -->
<section class="breadcrumbs" style="margin-top:80px;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Video</h2>

          <ol>
            <li><a href="{{ asset('/') }}">Home</a></li>
            <li>Video</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog breadcum -->


 <!-- ======= Team Section ======= -->
 <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">
        <?php foreach($videos as $video) { ?>     
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $video->video }}?rel=0" allowfullscreen></iframe>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $video->judul ?></h4>
                <p><?php echo $video->keterangan ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="blog">
    
            {{ $videos->links() }}

        </div>

        
      </div>
    </section><!-- End Team Section -->