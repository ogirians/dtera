  <!-- ======= Blog breadcums ======= -->
  <section class="breadcrumbs" style="margin-top:80px;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Berita</h2>

          <ol>
            <li><a href="{{ asset('/') }}">Home</a></li>
            <li><a href="{{ asset('/berita') }}">Berita</a></li>
            <li><?php echo $title ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog breadcum -->

<!-- Read Section -->
<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">
              <div class="entry-img">
                <img src="{{ asset('public/upload/image/thumbs/'.$berita->gambar) }}" alt="<?php  echo $berita->judul_berita ?>" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href=""><?php echo $title ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href=""><?php  echo $berita->nama ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href=""><time><?php echo date('d-m-Y', strtotime($berita->tanggal_post))  ?></time></a></li>
                  
                </ul>
              </div>

              <div class="entry-content">
                 <?php echo $berita->isi ?>
              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">
                  <i class="icofont-folder"></i>
                  <ul class="cats">
                    <li><a href="{{ asset('/berita/kategori/'.$berita->id_kategori) }}"><?php  echo $berita->nama_kategori ?></a></li>
                  </ul>
                </div>

                <div class="float-right share">
                  <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                  <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                  <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                </div>

              </div>

            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">
            @include('berita.sidebar')            
          </div><!-- End blog sidebar -->

        </div><!-- End row -->

      </div><!-- End container -->

    </section><!-- End Blog Section -->
