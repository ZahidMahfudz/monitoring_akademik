@extends('layoutsmahasiswa.main')
@section('main_content')
<form action="/mahasiswa/storepkl" method="POST">
    @csrf

    <h1>Tambah PKL</h1>

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
    </div>

    <div class="form-group">
        <label for="NIM">NIM:</label>
        <input type="text" name="NIM" class="form-control" value="{{ $mahasiswa->NIM }}">
    </div>

    <div class="form-group">
        <label for="status">Status PKL:</label>
        <select name="status" class="form-control">
            <option value="BELUM AMBIL">belum ambil</option>
            <option value="SEDANG AMBIL">sedang ambil</option>
            <option value="LULUS">lulus</option>
        </select>
    </div>

    <div class="form-group">
        <label for="nilaipkl">nilai pkl:</label>
        <input type="text" name="nilaipkl" class="form-control" value="{{ old('nilaipkl') }}">
    </div>

    <div class="form-group">
        <label for="scanberita">scan berita acara seminar:</label>
        <input type="file" name="scanberita" class="form-control" value="{{ old('scanberita') }}" accept=".pdf">
    </div>

    <div>
        <label for="doswal">Dosen Wali:</label>
        <select name="doswal" id="doswal" class="form-control">
                <option value="1">PAK ARIS</option>
                <option value="2">PAK Malik</option>
                <option value="3">PAK EDI</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">submit</button>

</form>

<a href="/afterupdate/mahasiswa">kembali</a>
@endsection

<head>
    <title>Tambah PKL</title>
</head>
