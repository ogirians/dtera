<!-- ======= Blog breadcums ======= -->
<section class="breadcrumbs" style="margin-top:80px;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>unduh</h2>

          <ol>
            <li><a href="{{ asset('/') }}">Home</a></li>
            <li>unduh</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog breadcum -->

<!-- ======= Hero Section ======= -->
<section id="unduh">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
        <div class="kotak">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1><?php echo $title ?></h1>
              <hr>
            </div>
            <div class="col-md-12">
              
              <table id="example1" class="display table-responsive table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <tr class="" style="background-color:#1e4356; color:white; ">
                        <th width="5%" class="text-center">
                            NO
                        </th>
                        
                        <th width="25%">JUDUL</th>
                        <th width="30%">KATEGORI</th>
                        <th width="5%">HITS</th>
                        <th width="20%">UNDUH</th>
                </tr>
                </thead>
                <tbody>

                <?php $i=1; foreach($downloads as $download) { ?>

                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td><?php echo $download->judul_download ?></td>
                    <td><?php echo $download->nama_kategori_download ?>
                      <small>
                        <br><?php echo $download->isi ?>
                      </small>
                    </td>
                    <td class="text-center">{{ $download->hits }} Hits</td>
                    <td>
                      <a href="{{ asset('download/unduh/'.$download->id_download) }}" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-download"></i> Unduh</a>
                    </td>
                </tr>

                <?php $i++; } ?>

                </tbody>
                </table>
                <p class="text-center">
                  {{ $downloads->links() }}
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>