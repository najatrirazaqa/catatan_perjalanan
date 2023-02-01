@include('layouts.header')
@include('layouts.sidebar')
<link rel="stylesheet" href="{{ asset('dist') }}/assets/css/pages/fontawesome.css">
<link rel="stylesheet" href="{{ asset('dist') }}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{ asset('dist') }}/assets/css/pages/datatables.css">

<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>DataTable Jquery</h3>
                    <p class="text-subtitle text-muted">Powerful interactive tables with datatables (jQuery
                        required)</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable Jquery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Jquery Datatable
                </div>
                <div class="card-body">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Suhu Tubuh</th>
                            </tr>
                        </thead>
                        @foreach ($catatanperjalanan as $result)
                            <tbody>
                                <tr>
                                    <td>{{ $result->tanggal }}</td>
                                    <td>{{ $result->waktu }}</td>
                                    <td>{{ $result->lokasi }}</td>
                                    <td>{{ $result->suhu_tubuh }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>

        </section>
        <!-- Basic Tables end -->
    </div>
</div>
@include('layouts.footer')
<script>
    $(function() {
        $('#table1').DataTable();
    });
</script>
<script src="{{ asset('dist') }}/assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ asset('dist') }}/assets/js/pages/datatables.js"></script>

</body>

</html>
