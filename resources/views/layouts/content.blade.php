<title>Home</title>
<div id="main">
    <header class="mb-3">
        <a href="{{ asset('dist') }}/#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Profile Statistics</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('dist') }}/assets/images/faces/2.jpg" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">{{ auth()->user()->name }}
                                </h5>
                                <h6 class="text-muted mb-0">Catatan Perjalanan</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="card">
            <div class="card-body text-center">
                <h2>Selamat Datang Di Aplikasi Catatan Perjalanan</h2>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-5">
            <a href="/tambah"> <button class="btn btn-primary" type="button">Isi Catatan Perjalanan</button></a>
        </div>
