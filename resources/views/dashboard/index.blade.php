@extends('layout.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
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
                            <th>DIVISI</th>
                            <th>STATUS</th>
                            <!-- <th>AKSI</th> -->
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
                            <th>DIVISI</th>
                            <th>STATUS</th>
                            <!-- <th>AKSI</th> -->
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
                            <td>{{ $frekuensi->divisi_code }}</td>
                            <td>{{ $frekuensi->status }}</td>
                            <!-- <td></td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection