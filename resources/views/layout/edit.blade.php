@extends('layout.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit data
            </div>
            <div class="card-body">
                <form action="{{ route('index.update', $frekuensi->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="type_code">JENIS FREKUENSI:</label>
                        <input type="text" class="form-control @error('type_code') is-invalid @enderror" id="type_code" name="type_code" value="{{ $frekuensi->type_code }}">
                        @error('type_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="frekuensi">FREKUENSI [MHz]:</label>
                        <input type="text" class="form-control @error('frekuensi') is-invalid @enderror" id="frekuensi" name="frekuensi" value="{{ $frekuensi->frekuensi }}">
                        @error('frekuensi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="bandwith">BANDWITH [KHz]:</label>
                        <input type="text" class="form-control @error('bandwith') is-invalid @enderror" id="bandwith" name="bandwith" value="{{ $frekuensi->bandwith }}">
                        @error('bandwith')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="type">JENIS PENGGUNAAN:</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ $frekuensi->type }}">
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="service">JENIS LAYANAN:</label>
                        <input type="text" class="form-control @error('service') is-invalid @enderror" id="service" name="service" value="{{ $frekuensi->service }}">
                        @error('service')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="power">POWER [W]:</label>
                        <input type="text" class="form-control @error('power') is-invalid @enderror" id="power" name="power" value="{{ $frekuensi->power }}">
                        @error('power')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="location">LOKASI:</label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ $frekuensi->location }}">
                        @error('location')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">STATUS:</label>
                        <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ $frekuensi->status }}">
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="unit">SATUAN KERJA:</label>
                        <input type="text" class="form-control @error('unit') is-invalid @enderror" id="unit" name="unit" value="{{ $frekuensi->unit }}">
                        @error('unit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="divisi_code">DIVISI:</label>
                        <input type="text" class="form-control @error('divisi_code') is-invalid @enderror" id="divisi_code" name="divisi_code" value="{{ $frekuensi->divisi_code }}">
                        @error('divisi_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection