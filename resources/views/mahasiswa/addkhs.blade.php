@extends('layoutsmahasiswa.main')

@section('main_content')
    <h1>Input KHS Mahasiswa</h1>
    <form action="/mahasiswa/storekhs" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
        </div>

        <div class="form-group">
            <label for="NIM">NIM:</label>
            <input type="string" name="NIM" class="form-control" value="{{ $mahasiswa->NIM }}">
        </div>

        <div class="form-group">
            <label for="semester">Semester:</label>
            <input type="number" name="semester" class="form-control" value="{{ old('semester') }}" required>
        </div>

        <div class="form-group">
            <label for="sks_semester">SKS:</label>
            <input type="number" name="sks_semester" class="form-control" value="{{ old('sks_semester') }}" required>
        </div>

        <div class="form-group">
            <label for="sks_kumulatif">SKS Kumulatif:</label>
            <input type="number" name="sks_kumulatif" class="form-control" value="{{ old('sks_kumulatif') }}" required>
        </div>

        <div class="form-group">
            <label for="ip">IP semester:</label>
            <input type="number" name="ip" class="form-control" value="{{ old('ip') }}" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="scankhs">Scan KHS:</label>
            <input type="file" name="scankhs">
        </div>

        <div>
            <label for="doswal">Dosen Wali:</label>
            <select name="doswal" id="doswal" class="form-control">
                    <option value="1">PAK ARIS</option>
                    <option value="2">PAK Malik</option>
                    <option value="3">PAK Edi</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Unggah Data</button>

    </form>

    <a href="/afterupdate/mahasiswa">kembali</a>
@endsection

<head>
    <title>Input KHS</title>
</head>
