<!-- ======= Blog breadcums ======= -->
<section class="breadcrumbs" style="margin-top:80px;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kontak</h2>

          <ol>
            <li><a href="{{ asset('/') }}">Home</a></li>
            <li>Kontak</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog breadcum -->

   <!-- ======= Contact Section ======= -->
   <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p><?php echo nl2br($site->alamat) ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p><?php echo $site->email ?></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p><?php echo $site->telepon ?></p>
                </div>
              </div>
            </div>

          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->

     <!-- ======= Map Section ======= -->
     <section class="map mt-2">
      <div class="container-fluid p-0">
      <?php echo $site->google_map ?>
      </div>
    </section><!-- End Map Section -->

