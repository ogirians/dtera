
    <!-- ======= Blog breadcums ======= -->
    <section class="breadcrumbs" style="margin-top:80px;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail</h2>

          <ol>
            <li><a href="{{ asset('/') }}">Home</a></li>
            <li>Detail</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog breadcum -->



<!-- ======= Hero Section ======= -->
<section id="berita">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
        <div class="kotak">
          <div class="row">
            <div class="col-md-12">
              <p class="text-right">
                <!--<a href="{{ asset('produk') }}" class="btn btn-success btn-sm"><i class="fa fa-file-pdf"></i> Produk Lainnya</a>-->
                <a href="{{ asset('produk/cetak/'.$produk->slug_produk) }}" class="btn btn-warning btn-sm" target="_blank"><i class="fa fa-file-pdf"></i> Cetak</a>
              </p>
              <hr>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12">
              <div class="owl-carousel owl-theme">
                <div class="item" data-hash="zero">
                  <img src="{{ asset('public/upload/image/'.$produk->gambar) }}" alt="<?php echo $produk->nama_produk; ?>" class="img img-thumbnail img-fluid">
                </div>
                <?php if($gambar) { foreach($gambar as $gambar) { ?>
                <div class="item" data-hash="one<?php echo $gambar->id_gambar_produk ?>">
                  <img src="{{ asset('public//upload/image/'.$gambar->gambar) }}" alt="<?php echo $produk->nama_produk; ?>" class="img img-thumbnail img-fluid">
                </div>
                <?php }} ?>
              </div>
                <div class="row">
                  <a class="button secondary url col-lg-3 col-md-3 col-sm-3 col-xs-3 url" href="#zero">
                    <img src="{{ asset('public/upload/image/thumbs/'.$produk->gambar) }}" alt="<?php echo $produk->nama_produk; ?>" class="img img-thumbnail img-fluid" >
                  </a> 
                  <?php if($gambar2) { foreach($gambar2 as $gambar) { ?>
                  <a class="button secondary col-lg-3 col-md-3 col-sm-3 col-xs-3 url" href="#one<?php echo $gambar->id_gambar_produk ?>">
                    <img src="{{ asset('public//upload/image/thumbs/'.$gambar->gambar) }}" alt="<?php echo $produk->nama_produk; ?>" class="img img-thumbnail img-fluid" >
                  </a> 
                  <?php }} ?>
                </div>
                
            </div>

            <div class="col-lg-8 col-md-7 col-sm-12 produk">
              
              <h1><?php echo $title ?></h1>
              <h5>mulai Rp 
                <span class="harga"><?php 
                $date1    = strtotime($produk->mulai_diskon); 
                $date2    = strtotime($produk->selesai_diskon); 
                $sekarang = strtotime(date('Y-m-d'));
                if($date1 <= $sekarang && $date2 >= $sekarang) { ?>
                  <strong><?php echo number_format($produk->harga_jual,'0',',','.'); ?> 
                    <sup class="text-danger">
                      <del>
                        Rp <?php echo number_format($produk->harga_jual,'0',',','.'); ?>    
                      </del>
                    </sup>
                  </strong>
                <?php }else{ ?>
                  <strong><?php echo number_format($produk->harga_jual,'0',',','.'); ?></strong>
                <?php } ?>
                </span>
              </h5>
              <hr>
                
                <hr>
                <div class="input-group">                  
                  

                  <span class="input-group-btn">
                    
                      <a href="https://api.whatsapp.com/send?phone={{$site->whatsapp}}&text=saya mau info tentang {{$produk->nama_produk}}" class="btn btn-success">
                        <i class="fa fa-shopping-cart"></i> Hubungi via WA
                      </a>
                  </span>
                </div>
                <hr>
                <p><strong>Deskripsi:</strong>
                  <br><?php echo nl2br($produk->deskripsi) ?></p>
                <?php echo $produk->isi; ?>
            </div>
            <?php  if($produk_all) { ?>
            <div class="col-md-12">
              <hr>
              <h4>Produk <?php echo $kategori_produk->nama_kategori_produk ?> lainnya</h4>
              <hr>
              
            </div>
            <?php  }
            if($produk_all) {
            foreach($produk_all as $produk) { ?>
            <div class="col-lg-3 col-md-3 col-sm-12 mb-4 produk text-center">
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
                    <p class="harga">Rp <?php echo number_format($produk->harga_jual); ?></p>
                  </div>
                  <div class="link-produk">
                    <p>
                      <a href="{{ asset('produk/detail/'.$produk->slug_produk) }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Detail</a>
                     
                    </p>
                </div>
            </div>
          <?php }} ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>