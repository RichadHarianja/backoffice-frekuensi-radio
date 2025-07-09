@extends('layout.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Akun Pengguna</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">List pengguna</li>
        </ol>
        <div class="row">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar user pengguna website inventaris <br></br>
            </div>
            <div class="card-body">

                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA </th>
                            <th>EMAIL </th>
                            <th>STATUS </th>
                            <th>ROLE</th>
                            <th width="280px">AKSI</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>NAMA </th>
                            <th>EMAIL </th>
                            <th>ROLE</th>
                            <th>STATUS </th>
                            <th width="280px">AKSI</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $users as $users )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td>AKTIF</td>
                            <td>ADMIN</td>
                            <td>
                                <form action="{{ route('index.destroy', $users->id) }}" method="POST">
                                    <a href="{{ route('index.edit', $users->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit" style="font-size:10px"></i></a>
                                    
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure want to delete this data?')"  class="btn btn-danger btn-sm"><i class="fas fa-trash" style="font-size:10px"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection