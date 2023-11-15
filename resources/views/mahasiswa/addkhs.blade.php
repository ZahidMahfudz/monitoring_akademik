@extends('layoutsmahasiswa.main')

@section('main_content')
    <h1>Input KHS Mahasiswa</h1>
    <form action="/mahasiswa/storekhs" method="POST">
        @csrf

        <div class="form-group">
            <label for="semester">Semester:</label>
            <select name="semester" id="semester" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
            </select>
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

        <button type="submit" class="btn btn-primary">Unggah Data</button>

    </form>

    <a href="/afterupdate/mahasiswa">kembali</a>
@endsection

<head>
    <title>Input KHS</title>
</head>
