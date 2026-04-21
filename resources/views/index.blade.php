<!DOCTYPE html>
<html>
<head>
    <title>Data Produk Skincare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: #ffe6f0;">

<div class="container mt-5">
    <h2 class="text-center mb-4 text-danger">💄 Data Produk Skincare</h2>

    <a href="/produk/create" class="btn btn-danger mb-3">+ Tambah Produk</a>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-danger">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>Rp {{ number_format($item->harga) }}</td>
                        <td>{{ $item->stok }}</td>
                        <td>
                            <a href="/produk/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                            <form action="/produk/{{ $item->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

</body>
</html>