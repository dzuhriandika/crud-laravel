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
        $bukus=\App\Buku::all();
        return view('index',compact('bukus'));
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
        $bukus = new \App\Buku;
        $bukus->judul = $request->get('judul');
        $bukus->penerbit = $request->get('penerbit');
        $bukus->tahun_terbit = $request->get('tahun_terbit');
        $bukus->pengarang = $request->get('pengarang');
        $bukus->save();

        return redirect('books')->with('success', 'Alhamdulillah Data Sudah Di Tambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $buku = DB::table('bukus')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['buku' => $buku]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        /// update data pegawai
    	DB::table('bukus')->where('id',$request->id)->update([
        'judul' => $request->judul,
        'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'pengarang' => $request->pengarang
    	]);
    	// alihkan halaman ke halaman pegawai
    	return redirect('/books');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /*
      $book = \app\Buku::find($id);
      $book->destroy();
      return redirect('books')->with('success','Data buku telah di hapus');
    }

    */// method untuk hapus data pegawai
    $posts = Buku::find($id);

        $posts->delete();
        return back()->with('succes', 'deleted data');
      }

}
