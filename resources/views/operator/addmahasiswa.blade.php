<form method="POST" action="/mahasiswa/store">
    @csrf

    <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" name="nim" class="form-control" value="{{ old('nim') }}" required>
    </div>

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
    </div>

    <div class="form-group">
        <label for="angkatan">Angkatan:</label>
        <input type="text" name="angkatan" class="form-control" value="{{ old('angkatan') }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Unggah Data</button>
</form>
