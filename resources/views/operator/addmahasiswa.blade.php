<form method="POST" action="/mahasiswa/store">
<link href="/css/srs1.css" rel="stylesheet">
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
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}" required>
    </div>

    <div class="form-group">
        <label for="kabkota">Kab/Kota:</label>
        <input type="text" name="kabkota" class="form-control" value="{{ old('kabkota') }}" required>
    </div>

    <div class="form-group">
        <label for="provinsi">Provinsi:</label>
        <input type="text" name="provinsi" class="form-control" value="{{ old('provinsi') }}" required>
    </div>

    <div class="form-group">
        <label for="angkatan">Angkatan:</label>
        <input type="text" name="angkatan" class="form-control" value="{{ old('angkatan') }}" required>
    </div>

    <div class="form-group">
        <label for="jalur_masuk">Jalur Masuk:</label>
        <select name="jalur_masuk" class="form-control">
            <option value="SNMPTN">SNMPTN</option>
            <option value="SBMPTN">SBMPTN</option>
            <option value="Mandiri">Mandiri</option>
            <option value="Lainnya">Lainnya</option>
        </select>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
    </div>

    <div class="form-group">
        <label for="handphone">Handphone:</label>
        <input type="text" name="handphone" class="form-control" value="{{ old('handphone') }}" required>
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

    <div class="form-group">
        <label for="foto">Foto Mahasiswa:</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Unggah Data</button>
</form>