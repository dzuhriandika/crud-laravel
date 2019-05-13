<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel CRUD BIMILLAH</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h1> </h1><br/>
      <form method="post" action="{{url('books')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Judul">Judul buku:</label>
            <input type="text" class="form-control" name="judul">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Penerbit">Penerbit:</label>
              <input type="text" class="form-control" name="penerbit">
            </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Tahun Terbit">Tahun Terbit:</label>
            <input type="text" class="form-control" name="tahun_terbit">
          </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Pengarang">Pengarang:</label>
            <input type="text" class="form-control" name="pengarang">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
