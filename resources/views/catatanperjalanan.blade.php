@include('layouts.header')
@include('layouts.sidebar')
<title>Catatan Perjalanan</title>
<link rel="stylesheet" href="{{ asset('dist') }}/assets/css/pages/fontawesome.css">
<link rel="stylesheet" href="{{ asset('dist') }}/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{ asset('dist') }}/assets/css/pages/datatables.css">

<div id="main">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Catatan Perjalanan</h3>
                    {{-- <p class="text-subtitle text-muted">Powerful interactive tables with datatables (jQuery
                        required)</p> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Catatan Perjalanan</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Basic Tables start -->
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Table Data Catatan Perjalanan
                </div>
                <div class="card-body">
                    <table class="table" id="table1" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Suhu Tubuh</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- Basic Tables end -->
    </div>
</div>
@include('layouts.footer')
<script src="{{ asset('dist') }}/assets/extensions/jquery/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        table = $('#table1').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            bDestroy: true,
            order: [],
            ajax: {
                "url": '{{ route('json') }}',
                "headers": {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
            },
            columns: [{
                    data: 'DT_RowIndex',
                    searchable: false
                },
                {
                    data: 'tanggal'
                },
                {
                    data: 'waktu'
                },
                {
                    data: 'lokasi',
                    sClass: 'text-center'
                },
                {
                    data: 'suhu_tubuh',
                    sClass: 'text-center'
                },
            ],
            columnDefs: [{
                targets: [0],
                orderable: false
            }, ],
        });
    })
</script>

<script src="{{ asset('dist') }}/assets/js/pages/datatables.js"></script>

</body>

</html>
