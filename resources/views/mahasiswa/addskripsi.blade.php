
<head>
    <title>Add Skripsi</title>
</head>
<body>
    <h1>Tambah skripsi</h1>
    <form action="/mahasiswa/addskripsi" method="POST">
        @csrf
        <div class="form-group">
            <label for="status">Status Skripsi:</label>
            <select name="status" class="form-control">
                <option value="BELUM AMBIL">belum ambil</option>
                <option value="SEDANG AMBIL">sedang ambil</option>
                <option value="LULUS">lulus</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nilaiskripsi">nilai skripsi:</label>
            <input type="number" name="nilaiskripsi" class="form-control" value="{{ old('nilaiskripsi') }}">
        </div>

        <div class="form-group">
            <label for="lamastudi">lama studi:</label>
            <input type="number" name="lamastudi" class="form-control" value="{{ old('lamastudi') }}">
        </div>

        <div class="form-group">
            <label for="tgllulussidang">tanggal lulus sidang:</label>
            <input type="date" name="tgllulussidang" class="form-control" value="{{ old('tgllulussidang') }}">
        </div>

        <div class="form-group">
            <label for="scanberita">scan berita acara sidang:</label>
            <input type="file" name="scanberita" class="form-control" value="{{ old('scanberita') }}" accept=".pdf">
        </div>

        <button type="submit" class="btn btn-primary">submit</button>

    </form>
</body>
</html>
