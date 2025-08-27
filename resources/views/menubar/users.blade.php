@extends('layout.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Akun User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">List User</li>
        </ol>

        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif

        <div class="row">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Daftar user pengguna website inventaris <br></br>
            </div>

            @if(Auth::check() && Auth::user()->role === 0 || Auth::check() && Auth::user()->role === 1)
            <div class="input-group mb-3 float-right">
                <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary p-2" style='margin-left:-12px'><i class="fas fa-plus"></i> Tambah Pengguna</a>
            </div>
            @endif

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA </th>
                            <th>EMAIL </th>
                            <th>ROLE</th>
                            <th>STATUS </th>
                            @if(Auth::check() && Auth::user()->role === 0)
                            <th width="280px">AKSI</th>
                            @endif
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>NAMA </th>
                            <th>EMAIL </th>
                            <th>ROLE</th>
                            <th>STATUS </th>
                            @if(Auth::check() && Auth::user()->role === 0)
                            <th width="280px">AKSI</th>
                            @endif
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ( $users as $users )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td>
                                @if($users->role==0)
                                    ADMIN
                                @elseif($users->role==1)
                                    STAFF
                                @else
                                    PIMPINAN
                                @endif
                            </td>
                            <td>
                                @if($users->status==0)
                                    AKTIF
                                @else
                                    TIDAK AKTIF
                                @endif
                            </td>
                            @if(Auth::check() && Auth::user()->role === 0)
                            <td>
                                <form action="{{ route('users.destroy', $users->id) }}" method="POST">
                                    <a href="{{ route('users.edit', $users->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit" style="font-size:10px"></i></a>
                                    
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure want to delete this user data?')"  class="btn btn-danger btn-sm"><i class="fas fa-trash" style="font-size:10px"></i></button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection