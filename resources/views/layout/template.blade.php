<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 bg-success py-4"></div>
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
                <div class="card-header"></div>
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>