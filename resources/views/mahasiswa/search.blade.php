<link rel="stylesheet" href="css\srs8.css">
<form action="{{ route('mahasiswa.search') }}" method="GET">
    <label for="mahasiswa">Cari Mahasiswa:</label>
    <input type="text" name="mahasiswa" id="mahasiswa" placeholder="Masukkan NIM or Nama" required>
    <button type="submit">Cari</button>
</form>
