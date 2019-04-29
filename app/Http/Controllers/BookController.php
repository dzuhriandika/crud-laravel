<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Buku;

use DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['buku'] = Buku::all();
        return view('index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // insert data ke table buku
    DB::table('bukus')->insert([
        'judul' => $request->judul,
        'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'pengarang' => $request->pengarang
    ]);
    // alihkan halaman ke halaman home
    return redirect('/books');
  }

      // method untuk edit data pegawai
    public function edit($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih
    $buku = DB::table('bukus')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('edit',['buku' => $buku]);
    }

        // update data pegawai
    public function update(Request $request)
    {
    	// update data pegawai
    	DB::table('bukus')->where('id',$request->id)->update([
        'judul' => $request->judul,
        'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'pengarang' => $request->pengarang
    	]);
    	// alihkan halaman ke halaman pegawai
    	return redirect('/books');
    }

          // method untuk hapus data pegawai
      public function hapus($id)
      {
      	// menghapus data pegawai berdasarkan id yang dipilih
      	DB::table('bukus')->where('id',$id)->delete();

      	// alihkan halaman ke halaman pegawai
      	return redirect('/books');
      }

}
