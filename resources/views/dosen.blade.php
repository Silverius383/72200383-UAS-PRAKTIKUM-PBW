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
              <div class="col-lg-12 bg-primary py-4"></div>
          </div>

          <div class="row">
            <div class="col-lg-2 vh-100">
                <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link active" href="/dosen">Dosen</a>
                    <a class="nav-link" href="#">Mahasiswa</a>
                    <a class="nav-link" href="#v">Mata Kuliah</a>
                </div>
            </div>
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
                        <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="bi bi-plus-circle-fill"></i> Add Dosen</a>
                        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/dosen/cari">
                            <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIDOSEN</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Keahlian</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($dosen as $no => $dsn)
                                <tr>
                                    <th scope="row">{{ $dosen->firstItem() + $no }}</th>
                                    <td>{{ $dsn -> nidosen }}</td>
                                    <td>{{ $dsn -> nama }}</td>
                                    <td>{{ $dsn -> status }}</td>
                                    <td>{{ $dsn -> pakar }}</td>
                                </tr>
                                @endforeach 
                            </tbody>
                          </table>
                          <span class="float-right">{{ $dosen->links() }}</span>
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
  </body>
</html>