<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  </head>
  <body>
      @extends('layout.template')
      @section('content')
      <div class="container-fluid rounded mt-4">
          <form action="/mahasiswa/simpanmhs" method="POST" class="pt-2 pb-2">
              @csrf
              <div class="form-group w-25">
                  <label>NIM</label>
                  <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM" required>
              </div>
              <div class="form-group w-25">
                  <label>Nama Mahasiswa</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
              </div>
              <label>Gender</label>
              <div class="form-group w-25">
                  <input type="radio" name="gender" value="male" class="form-check-input">
                  <label>male</label>
              </div>
              <div class="form-group w-25">
                  <input type="radio" name="gender" value="female" class="form-check-input">
                  <label>female</label>
              </div>
              <div class="form-group w-25">
                  <label>Jurusan</label>
                  <select name="jurusan" class="form-control">
                      <option value="0">Pilih Jurusan</option>
                      <option value="Sistem Informasi">Sistem Informasi</option>
                      <option value="Informatika">Informatika</option>
                      <option value="Akuntansi">Akuntansi</option>
                      <option value="Kedokteran">Kedokteran</option>
                      <option value="Filsafat">Filsafat</option>
                  </select>
              </div>
              <label>Bidang Minat</label>
              <div class="form-check w-25">
                  <input type="checkbox" name="bidang_minat[]" value="game" class="form-check-input">
                  <label>game</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" name="bidang_minat[]" value="tidur" class="form-check-input">
                  <label>tidur</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" name="bidang_minat[]" value="basket" class="form-check-input">
                  <label>basket</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" name="bidang_minat[]" value="renang" class="form-check-input">
                  <label>renang</label>
              </div>
              <div class="form-check w-25">
                  <input type="checkbox" name="bidang_minat[]" value="sepak bola" class="form-check-input">
                  <label>sepak bola</label>
              </div>
              <div class="form-group pt-4">
                  <input type="submit" value="SIMPAN" class="btn btn-outline-success">
              </div>
          </form>
      </div>
      @endsection
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>