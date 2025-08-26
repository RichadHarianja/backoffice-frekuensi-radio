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
                Tambah data
            </div>
            <div class="card-body">
                <form action="{{ route('tnial.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="type_code" class="form-label">JENIS FREKUENSI:</label>
                        <select class="form-select @error('type_code') is-invalid @enderror" id="type_code" name="type_code" value="{{ old('type_code') }}">
                                <option value="">--SELECT--</option>
                                <option value="HF">HF</option>
                                <option value="SHF">SHF</option>
                                <option value="UHF">UHF</option>
                                <option value="VHF">VHF</option>
                        </select>
                        @error('type_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="frekuensi">FREKUENSI [MHz]:</label>
                        <input step="any"  type="number" class="form-control @error('frekuensi') is-invalid @enderror" id="frekuensi" name="frekuensi" value="{{ old('frekuensi') }}">
                        @error('frekuensi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="bandwith">BANDWITH [KHz]:</label>
                        <input step="any"  type="number" class="form-control @error('bandwith') is-invalid @enderror" id="bandwith" name="bandwith" value="{{ old('bandwith') }}">
                        @error('bandwith')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="type" class="form-label">JENIS PENGGUNAAN:</label>
                        <select class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}">
                                <option value="">--SELECT--</option>
                                <option value="VOICE">VOICE</option>
                                <option value="DATA">DATA</option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="service" class="form-label">JENIS LAYANAN:</label>
                        <select class="form-control @error('service') is-invalid @enderror" id="service" name="service" value="{{ old('service') }}">
                                <option value="">--SELECT--</option>
                                <option value="TETAP">TETAP</option>
                                <option value="BERGERAK">BERGERAK</option>
                                <option value="TETAP/ BERGERAK">TETAP/ BERGERAK</option>
                        </select>
                        @error('service')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="power">POWER [W]:</label>
                        <input step="any" type="number" class="form-control @error('power') is-invalid @enderror" id="power" name="power" value="{{ old('power') }}">
                        @error('power')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="location">LOKASI:</label>
                        <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location') }}">
                        @error('location')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="unit">SATUAN KERJA:</label>
                        <input type="text" class="form-control @error('unit') is-invalid @enderror" id="unit" name="unit" value="{{ old('unit') }}">
                        @error('unit')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="divisi_code">DIVISI :</label>
                        <input type="text" class="form-control @error('divisi_code') is-invalid @enderror" id="divisi_code" name="divisi_code" value="{{ $divisiCode->divisi_code }}" readonly>
                        @error('divisi_code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status" class="form-label">STATUS :</label>
                        <select class="form-select @error('status') is-invalid @enderror"  id="status" name="status" value="{{ old('status') }}">
                                <option value="">--SELECT--</option>
                                <option value="AKTIF">AKTIF</option>
                                <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection 