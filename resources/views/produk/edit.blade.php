<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #ffe6f0;">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark text-center">
            <h4>✏️ Edit Produk Skincare</h4>
        </div>

        <div class="card-body">
            <form action="/produk/{{ $data->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama Produk</label>
                    <input type="text" name="nama" value="{{ $data->nama }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control">{{ $data->deskripsi }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" value="{{ $data->harga }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" name="stok" value="{{ $data->stok }}" class="form-control">
                </div>

                <button class="btn btn-warning">Update</button>
                <a href="/produk" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>