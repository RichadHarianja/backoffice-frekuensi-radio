@extends('layout.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Frekuensi Radio TNI AD</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tentara Nasional Indonesia Angkatan Darat</li>
        </ol>
        
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="row">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar Frekuensi Radio TNI AD <br></br>
            </div>

            <div class="input-group mb-3 float-right">
                <a href="{{ route('tniad.create', $divisiCode->divisi_code) }}" class="btn btn-sm btn-primary p-2" style='margin-left:-12px'><i class="fas fa-plus"></i> Tambah Data</a>
            </div>

            <div class="card-body">

                <table id="datatablesSimple" class="display nowrap">
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
                            <th width="280px">AKSI</th>
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
                            <th>AKSI</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php $number = 1; ?>

                        @foreach ( $frekuensi as $frekuensi )
                        @if($frekuensi->divisi_code==2)
                        <tr>
                            <td>{{ $number }}</td>
                            <td>{{ $frekuensi->type_code }}</td>
                            <td>{{ $frekuensi->frekuensi }}</td>
                            <td>{{ $frekuensi->bandwith }}</td>
                            <td>{{ $frekuensi->type }}</td>
                            <td>{{ $frekuensi->service }}</td>
                            <td>{{ $frekuensi->power }}</td>
                            <td>{{ $frekuensi->location }}</td>
                            <td>{{ $frekuensi->unit }}</td>
                            <td>{{ $frekuensi->divisi_code }}</td>
                            <td>
                                @if($frekuensi->status==0)
                                    AKTIF
                                @else
                                    TIDAK AKTIF
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('index.destroy', $frekuensi->id) }}" method="POST">
                                    <a href="{{ route('index.edit', $frekuensi->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit" style="font-size:10px"></i></a>
                                    
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure want to delete this data?')"  class="btn btn-danger btn-sm"><i class="fas fa-trash" style="font-size:10px"></i></button>
                                </form>
                            </td>

                            <?php $number++; ?>
                            
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection