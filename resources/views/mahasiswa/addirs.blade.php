<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengambilan IRS</title>
</head>

<body>
    <h1>IRS Mahasiswa</h1>
    <form action="{{ route('mahasiswa.addirs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
        </div>

        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="string" name="nim" class="form-control" value="{{ old('nim') }}" required>
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

        <input type="submit" name="proses" value="Upload">

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