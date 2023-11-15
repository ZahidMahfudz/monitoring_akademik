@extends('layoutsmahasiswa.main')

@section('main_content')
<form class="form-detail" role="form" action="/mahasiswa/update" method="post" id="myform">
    @csrf
    @method('PUT')
    <div class="form-left">
        <h2> Update Informasi Mahasiswa</h2>
        <div class="form-row">
            <label for="nama">NAMA</label>
            <input type="text" name="nama" id="nama" class="input-text" value="{{$mahasiswa->nama}}" disabled>
        </div>
        <div class="form-row">
            <label for="nim">NIM</label>
            <input type="text" name="nim" class="nim" id="nim" value="{{$mahasiswa->NIM}}" disabled>
        </div>
        <div class="form-row">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="alamat" id="alamat" value="" required>
        </div>
        <div class="form-row">
            <label for="kab_kota">Kab/Kota</label>
            <input type="text" name="kab_kota" class="kab_kota" id="kab_kota" value="" required>
        </div>
        <div class="form-row">
            <label for="provinsi">Provinsi</label>
            <input type="text" name="provinsi" class="provinsi" id="provinsi" value="" required>
        </div>
        <div class="form-row">
            <label for="angkatan">ANGKATAN</label>
            <input type="text" name="angkatan" class="angkatan" id="angkatan" placeholder="{{$mahasiswa->angkatan}}" disabled>
        </div>
        <div class="form-row">
            <label for="jalur_masuk">Jalur_Masuk</label>
            <select name="jalur_masuk" id="jalur_masuk" required>
                <option value="">Jalur Masuk</option>
                <option value="SNMPTN">SNMPTN</option>
                <option value="SBMPTN">SBMPTN</option>
                <option value="MANDIRI">MANDIRI</option>
                <option value="LAINNYA">LAINNYA</option>
            </select>
        </div>
        <div class="form-group">
            <div class="form-row form-row-3">
                <label for="email">Email</label>
                <input type="email" name="email" class="email" id="email" value="" placeholder="name@gmail.com" >
            </div>
            <div class="form-row form-row-4">
                <label for="no_telp">No_Telepon</label>
                <input type="text" name="no_telp" class="no_telp" id="no_telp" placeholder="No telp" required>
            </div>
        </div>
        <div class="form-row">
            <label for="status">STATUS</label>
            <input type="text" name="status" class="status" id="status" value="{{$mahasiswa->status}}" disabled>
        </div>
    </div>
    <div class="form-right">
        <div class="form-row-last">
            <input type="submit" name="submit" class="submit" value="Submit">
        </div>
        <div>
            <a href="/afterupdate/mahasiswa">Skip</a>
        </div>
    </div>
</form>
@endsection

