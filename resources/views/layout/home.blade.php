<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 bg-success py-4">
        <div class="dropdown float-right">
            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-person-square"></i> User
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Silverius Stanic</a>
                <a class="dropdown-item" href="/user">Data Pengguna</a>
                <a class="dropdown-item" href="#">Keluar</a>
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
                  <a name="" id="" class="btn btn-success" href="/mahasiswa/formulirmhs" role="button"><i class="bi bi-plus-circle-fill"></i> Add Mahasiswa</a>
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
                          <th scope="col">NIM</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Jurusan</th>
                          <th scope="col">Bidang Minat</th>
                          <th scope="col">Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($mahasiswa as $no => $mhs)
                          <tr>
                              <th scope="row">{{ $mahasiswa->firstItem() + $no }}</th>
                              <td>{{ $mhs -> nim }}</td>
                              <td>{{ $mhs -> nama }}</td>
                              <td>{{ $mhs -> gender }}</td>
                              <td>{{ $mhs -> jurusan }}</td>
                              <td>{{ $mhs -> bidang_minat }}</td>
                              <td>
                                <a href="/mahasiswa/editmhs/{{ $mhs->id }}" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                                <button onclick="del({{ $mhs->id }})" class="btn btn-outline-success"><i class="bi bi-x-square"></i></button>
                              </td>
                          </tr>
                          @endforeach 
                      </tbody>
                    </table>
                    <span class="float-right">{{ $mahasiswa->links() }}</span>
                    <label>Halaman yang Dikunjungi : {{ $mahasiswa->currentPage() }} </label>
                    <br>
                    <label>Total Data Halaman Ini : {{ $mahasiswa->count() }} </label>
                    <br>
                    <label>Total Data Keseluruhan : {{ $mahasiswa->total() }}</label>
              </div>
          </div>
      </div>
    </div>
</div>
