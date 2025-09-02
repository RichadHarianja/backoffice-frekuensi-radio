@extends('layout.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="row">

        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Chart Total Frekuensi Per Matra 
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>

        <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Chart Total Type Frekuensi
                    </div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar Frekuensi Radio TNI <br></br>
            </div>
            <div class="card-body">

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>JENIS <br>FREKUENSI</br></th>
                            <th>FREKUENSI <br>[MHz]</br></th>
                            <th>BANDWITH <br>[KHz]</br></th>
                            <th>JENIS <br>PENGGUNAAN</br></th>
                            <th>JENIS <br>LAYANAN</br></th>
                            <th>POWER [W]</th>
                            <th>LOKASI</th>
                            <th>SATUAN KERJA</th>
                            <th>MATRA</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>JENIS <br>FREKUENSI</br></th>
                            <th>FREKUENSI <br>[MHz]</br></th>
                            <th>BANDWITH <br>[KHz]</br></th>
                            <th>JENIS <br>PENGGUNAAN</br></th>
                            <th>JENIS <br>LAYANAN</br></th>
                            <th>POWER [W]</th>
                            <th>LOKASI</th>
                            <th>SATUAN KERJA</th>
                            <th>MATRA</th>
                            <th>STATUS</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $frekuensi as $frekuensi )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $frekuensi->type_code }}</td>
                            <td>{{ $frekuensi->frekuensi }}</td>
                            <td>{{ $frekuensi->bandwith }}</td>
                            <td>{{ $frekuensi->type }}</td>
                            <td>{{ $frekuensi->service }}</td>
                            <td>{{ $frekuensi->power }}</td>
                            <td>{{ $frekuensi->location }}</td>
                            <td>{{ $frekuensi->unit }}</td>
                            <td>{{ $frekuensi->divisi->name }}</td>
                            <td>{{ $frekuensi->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

<script>
    // Embed data from Laravel
    const chartLabels = {!! json_encode($dataChart['labelsForBarChart']) !!};
    const chartData = {!! json_encode($dataChart['valuesForBarChart']) !!};
    const matraLabels = {!! json_encode($dataChart['labelsForAreaChart']) !!};
    const matraData = {!! json_encode($dataChart['valuesForAreaChart']) !!};
</script>
