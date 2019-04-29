<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>


	<h1>Edit Data Buku</h1>

	<a href="/books"> Kembali</a>

	<br/>
	<br/>

	@foreach($buku as $p)
	<form action="/books/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Judul <input type="text" required="required" name="nama" value="{{ $p->judul }}"> <br/>
		Penerbit <input type="text" required="required" name="jabatan" value="{{ $p->penerbit }}"> <br/>
		Tahun Terbit <input type="number" required="required" name="umur" value="{{ $p->tahun_terbit }}"> <br/>
		Pengarang <input type="text" required="required" name="umur" value="{{ $p->pengarang }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
