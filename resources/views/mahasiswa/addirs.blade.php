@extends('layoutsmahasiswa.main')
@section('main_content')
<h1>IRS Mahasiswa</h1>
<form action="/mahasiswa/addirs" method="POST">
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
        <label for="sks">SKS:</label>
        <input type="number" name="sks" class="form-control" value="{{ old('sks') }}" required>
    </div>

    <div class="form-group">
        <label for="scanirs">Scan IRS:</label>
        <input type="file" name="scanirs" accept=".pdf">
    </div>

    <button type="submit" class="btn btn-primary">Unggah Data</button>

</form>

<a href="/afterupdate/mahasiswa">kembali</a>

<?php
$koneksi = mysqli_connect("localhost","root","","monitoring-akademik");

if(isset($_POST['proses'])) {

$direktori = "berkasppl/";
$file_name = $_FILES['scanirs']['name'];
move_uploaded_file($_FILES['scanirs']['tmp_name'],$direktori.$file_name);

mysqli_query($koneksi, "insert into dokumen set file='$file_name'");

echo "<b>File berhasil diupload";
}

?>
@endsection

<head>
    <title>Pengambilan IRS</title>
</head>
