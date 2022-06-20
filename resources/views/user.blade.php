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
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bg-success py-4">
            <div class="dropdown float-right">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-person-square"></i> User
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">{{ Auth::user()->name ?? '' }}</a>
                    <a class="dropdown-item" href="/user">Data Pengguna</a>
                    <a class="dropdown-item" href="/logout">Keluar</a>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
          <div class="col-lg-2 vh-100">
              <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link text-dark" href="#">Home</a>
                  <a class="nav-link text-dark" href="/dosen">Dosen</a>
                  <a class="nav-link active text-dark bg-success" href="/mahasiswa">Mahasiswa</a>
                  <a class="nav-link text-dark" href="#v">Mata Kuliah</a>
              </div>
          </div>
          <div class="col-lg-10 vh-100">
              <div class="card mt-4">
                  <div class="card-header">
                      <a name="" id="" class="btn btn-success" href="/user/formuliruser" role="button"><i class="bi bi-plus-circle-fill"></i> Add Pengguna Baru</a>
                      <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                          <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                  </div>
                  <div class="card-body">
                      <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin untuk menghapus data ini?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                        <a id="deleteLink" class="btn btn-primary">Ya, hapus data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @if (session('alert'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('alert') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                      <table class="table table-hover">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama Pengguna</th>
                              <th scope="col">Email Pengguna</th>
                              <th scope="col">Edit</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($user as $no => $u)
                              <tr>
                                  <th scope="row">{{ $user->firstItem() + $no }}</th>
                                  <td>{{ $u -> name }}</td>
                                  <td>{{ $u -> email }}</td>
                                  <td>
                                    <a href="/user/edituser/{{ $u->id }}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                                    <button onclick="del({{ $u->id }})" class="btn btn-outline-success"><i class="bi bi-x-square"></i></button>
                                  </td>
                              </tr>
                              @endforeach 
                          </tbody>
                        </table>
                        <span class="float-right">{{ $user->links() }}</span>
                  </div>
              </div>
          </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function del(id) {
          var link = document.getElementById('deleteLink')
          link.href = "/mahasiswa/hapusmhs/" + id
            $('#hapusModal').modal('show')
        }
    </script>
  </body>
</html>