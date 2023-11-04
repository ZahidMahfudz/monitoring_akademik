<form method="POST" action="/operator/addmahasiswa">
<link href="/css/srs1.css" rel="stylesheet">
    @csrf
    <div class="form-group">
        <label for="nim">NIM:</label>
        <input type="text" name="NIM" class="form-control" value="{{ old('NIM') }}" required>
    </div>

    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
    </div>

    <div class="form-group">
        <label for="angkatan">Angkatan:</label>
        <input type="text" name="angkatan" class="form-control" value="{{ old('angkatan') }}" required>
    </div>

    <div class="form-group">
        <label for="status">Status:</label>
        <select name="status" class="form-control">
            <option value="Aktif">Aktif</option>
            <option value="Cuti">Cuti</option>
            <option value="Mangkir">Mangkir</option>
            <option value="DO">DO</option>
            <option value="Undur Diri">Undur Diri</option>
            <option value="Lulus">Lulus</option>
            <option value="Meninggal Dunia">Meninggal Dunia</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Unggah Data</button>
</form>
