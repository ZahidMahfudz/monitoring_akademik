<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengambilan IRS</title>
</head>

<body>
    <h1>IRS Mahasiswa</h1>
    <form action="/mahasiswa/addirs" method="POST">
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
            <label for="sks">SKS:</label>
            <input type="number" name="sks" class="form-control" value="{{ old('sks') }}" required>
        </div>

        <div class="form-group">
            <label for="scanirs">Scan IRS:</label>
            <input type="file" name="scanirs">
        </div>

        <div>
            <label for="doswal">Dosen Wali:</label>
            <select name="doswal" id="doswal" class="form-control">
                    <option value="1">APW</option>
                    <option value="2">Malik</option>
                    <option value="3">Eng</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Unggah Data</button>

    </form>

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

</body>
</html>
