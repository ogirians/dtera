<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Berita_model;
use App\KategoriBerita;

class Berita extends Controller
{
    // Beritapage
    public function index()
    {
    	$site 	= DB::table('konfigurasi')->first();
    	$slider = DB::table('galeri')->where('jenis_galeri','Beritapage')->orderBy('id_galeri', 'DESC')->first();
    	// $berita = DB::table('berita')->where('status_berita','Publish')->orderBy('id_berita', 'DESC')->get();
    	$model 	= new Berita_model();
		$berita = $model->listing();
        $beritaRecent = Berita_model::limit(5)->orderBy('id_berita','desc')->get();
        $kategori =  KategoriBerita ::withCount('berita')->get();

        $data = array(  'title'     => $site->namaweb.' - '.$site->tagline,
                        'deskripsi' => $site->namaweb.' - '.$site->tagline,
                        'keywords'  => $site->namaweb.' - '.$site->tagline,
                        'slider'    => $slider,
                        'site'		=> $site,
                        'beritas'	=> $berita,
                        'beritarec' => $beritaRecent,
                        'cari'      =>  false,
                        'kategori'  => $kategori,
                        'content'   => 'berita/index'
                    );
        return view('layout/wrapper',$data);
    }

    // kontak
    public function read($slug_berita)
    {
        $site   = DB::table('konfigurasi')->first();
        $slider = DB::table('galeri')->where('jenis_galeri','Beritapage')->orderBy('id_galeri', 'DESC')->first();
        // $berita = DB::table('berita')->where('status_berita','Publish')->orderBy('id_berita', 'DESC')->get();
        $model  = new Berita_model();
        $berita = $model->read($slug_berita);
        $beritaRecent       =  Berita_model::limit(5)->orderBy('id_berita','desc')->get();
        $kategori           =  KategoriBerita ::withCount('berita')->get();

        $data = array(  'title'     => $berita->judul_berita,
                        'deskripsi' => $berita->judul_berita,
                        'keywords'  => $berita->judul_berita,
                        'slider'    => $slider,
                        'site'      => $site,
                        'berita'    => $berita,
                        'content'   => 'berita/read',
                        'beritarec' => $beritaRecent,
                        'kategori'  => $kategori,
                    );
        return view('layout/wrapper',$data);
    }

    public function cari(Request $request)
    {
        $site 	= DB::table('konfigurasi')->first();
    	$slider = DB::table('galeri')->where('jenis_galeri','Beritapage')->orderBy('id_galeri', 'DESC')->first();
    	// $berita = DB::table('berita')->where('status_berita','Publish')->orderBy('id_berita', 'DESC')->get();    	
        $cari = true;

        $myberita           =  new Berita_model();
        $keywords           =  $request->keywords;
        $berita             =  $myberita->cari_page($keywords);
        $beritaRecent       =  Berita_model::limit(5)->orderBy('id_berita','desc')->get();
        $kategori           =  KategoriBerita ::withCount('berita')->get();
        

        $data = array(      'title'     => $site->namaweb.' - '.$site->tagline,
                            'deskripsi' => $site->namaweb.' - '.$site->tagline,
                            'keywords'  => $site->namaweb.' - '.$site->tagline,
                            'slider'    => $slider,
                            'site'		=> $site,
                            'beritas'	=> $berita,
                            'beritarec' => $beritaRecent,
                            'cari'      => false,
                            'kategori'  => $kategori,
                            'content'   => 'berita/index' 
                    );

        return view('/layout/wrapper',$data);
    }

    public function kategori($id_kategori)
    {
        $site 	= DB::table('konfigurasi')->first();
    	$slider = DB::table('galeri')->where('jenis_galeri','Beritapage')->orderBy('id_galeri', 'DESC')->first();
    	// $berita = DB::table('berita')->where('status_berita','Publish')->orderBy('id_berita', 'DESC')->get();    	
              
        
        $myberita           =  new Berita_model();
        $berita             =  $myberita->all_kategori_page($id_kategori);
        $beritaRecent       =  Berita_model::limit(5)->orderBy('id_berita','desc')->get();
        $kategori           =  KategoriBerita ::withCount('berita')->get();

        $data = array(  'title'     => $site->namaweb.' - '.$site->tagline,
                        'deskripsi' => $site->namaweb.' - '.$site->tagline,
                        'keywords'  => $site->namaweb.' - '.$site->tagline,
                        'slider'    => $slider,
                        'site'		=> $site,
                        'beritas'	=> $berita,
                        'beritarec' => $beritaRecent,
                        'cari'      => false,
                        'kategori'  => $kategori,
                        'content'   => 'berita/index' 
                    );
        return view('layout/wrapper',$data);
    }
}