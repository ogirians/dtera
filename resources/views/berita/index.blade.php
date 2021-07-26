
    <!-- ======= Blog breadcums ======= -->
    <section class="breadcrumbs" style="margin-top:80px;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Berita</h2>

          <ol>
            <li><a href="{{ asset('/') }}">Home</a></li>
            <li>Berita</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog breadcum -->

<!-- ======= Blog Section ======= -->
<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">
            
           <?php  
            if($beritas) {
            foreach($beritas as $berita) { ?>
            <article class="entry">

              <div class="entry-img">
                <img src="{{ asset('public/upload/image/thumbs/'.$berita->gambar) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><?php  echo $berita->judul_berita ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?php  echo $berita->nama ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time><?php echo date('d-m-Y', strtotime($berita->tanggal_post))  ?></time></a></li>
                  </ul>
              </div>

              <div class="entry-content">
                <p>
                <?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 350, $end='...') ?>
                </p>
                <div class="read-more">
                  <a href="{{ asset('berita/read/'.$berita->slug_berita) }}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            <?php }} else{ ?>
              <div class="col-md-12">
              <p class="alert alert-info">Produk tidak ditemukan. Gunakan kata kunci pencarian yang berbeda.</p>
              </div>
            <?php } ?>
            <!-- End blog entry -->

           <?php if($cari != true){?>
              <article class="entry" style="padding:0px;">
              <div class="row" style="text-align:center;">
                <div class="col-md-6" style="margin-top:35px;">
                  <a>Halaman : <?php  echo $beritas->currentPage() ?></a> <br/>
                </div>
                
                <div class="col-md-6" style="margin-top:35px;">
                <p>Data Per Halaman : <?php  echo $beritas->perPage() ?></p>   <br/>
                </div>
              </div>
              </article >
              <div class="col-md-12" style="margin-top:35px;">
                 {{ $beritas->links() }}
              </div>
          
            <?php } ?>           
                      
            
          </div><!-- End blog entries list -->

            <!--sidebar -->
          <div class="col-lg-4">
              @include('berita.sidebar')
          </div><!-- End blog sidebar -->

        </div><!-- End .row -->

      </div><!-- End .container -->

    </section><!-- End Blog Section -->

    <script>
        function navHeadFunc(menu) {
          document.getElementsByTagName("li")[0].removeAttribute("class")    
          
        }
    </script>
