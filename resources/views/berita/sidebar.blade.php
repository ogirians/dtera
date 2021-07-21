<div class="sidebar">

<h3 class="sidebar-title">Search</h3>
<div class="sidebar-item search-form">
  <form action="{{ asset('berita/cari') }}" method="POST">
  {{ csrf_field() }}
      <input name="keywords" type="text">
    <button type="submit"><i class="icofont-search"></i></button>
  </form>
</div><!-- End sidebar search formn-->


<h3 class="sidebar-title">Categories</h3>
<div class="sidebar-item categories">
  <ul>
    @foreach($kategori as $k)
    <li><a href="{{ asset('/berita/kategori/'.$k->id_kategori) }}">{{ $k -> nama_kategori }}<span>( {{ $k -> berita_count }} )</span></a></li>
    @endforeach
  </ul>

</div><!-- End sidebar categories-->

<h3 class="sidebar-title">Recent Posts</h3>
<div class="sidebar-item recent-posts">
  
    @foreach($beritarec as $b)
  <div class="post-item clearfix">
    <img src="{{ asset('public/upload/image/thumbs/'.$b ->gambar) }}" alt="">
    <h4><a href="{{ asset('berita/read/'.$b->slug_berita) }}">{{$b -> judul_berita}}</a></h4>
    <time><?php echo date('d-m-Y', strtotime($b->tanggal_post))  ?></time>
  </div>
    @endforeach

  
</div><!-- End sidebar recent posts-->

</div><!-- End sidebar -->