@include('layouts.header');
@include('layouts.sidebar');
<title>Catatan Perjalanan</title>
<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Catatan</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah Catatan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row match-height">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Form Tambah Catatan</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-horizontal" action="{{ route('store') }}" method="post">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Tanggal</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="date" name="tanggal" class=" form-control">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Waktu</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="time" name="waktu" class=" form-control">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-alarm"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Lokasi</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" name="lokasi" class=" form-control">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-pin-map"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Suhu Tubuh</label>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group has-icon-left">
                                                    <div class="position-relative">
                                                        <input type="text" name="suhu_tubuh" class=" form-control">
                                                        <div class="form-control-icon">
                                                            <i class="bi bi-thermometer"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Kirim</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- // Basic Horizontal form layout section end -->
        <!-- // Basic multiple Column Form section end -->
    </div>
    @include('layouts.footer');
