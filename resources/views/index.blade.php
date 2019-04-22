<!DOCTYPE html>
<html>
<head>
	<title>dzuhriandika</title>
</head>
<body>

	<h1>Data Buku</h1>

	<a href="/books/create"> + Tambah Buku Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>id</th>
			<th>Judul</th>
			<th>penerbit</th>
			<th>tahun_terbit</th>
      <th>pengarang</th>
			<th>Opsi</th>
		</tr>
    @foreach($buku as $b)
    <tr>
        <td>{{$b->id}}</td>
        <td>{{$b->judul}}</td>
        <td>{{$b->penerbit}}</td>
        <td>{{$b->tahun_terbit}}</td>
        <td>{{$b->pengarang}}</td>
        <td>
        <a href="/pegawai/edit/{{ $b->pegawai_id }}">Edit</a>
        |
        <a href="/pegawai/hapus/{{ $b->pegawai_id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
</table>
</body>
</html>
