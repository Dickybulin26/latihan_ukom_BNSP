@include('layouts.main')

<div class="container">

    <div class="content-header d-flex justify-content-center align-items-center my-5">
        <h1 class="text-center">Data barang</h1>
    </div>

    <div class="buttonTambahBarang">
        <a href="{{ route('barang.tambah') }}" class="btnTambah btn btn-success my-3">Tambah</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>nama barang</th>
                <th>harga</th>
                <th>stok</th>
                <th>foto</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        <div class="mb-3">
                            {{ $item->id_barang }}
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            {{ $item->nama_barang }}
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            {{ $item->harga }}
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            {{ $item->stok }}
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <img src="{{ asset('images/' . $item->foto) }}" alt="{{ $item->foto }}"
                                style="width: 5rem">
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <a href="{{ route('barang.detail', $item->id_barang) }}" class="btn btn-primary"
                                type="button">Detail</a>
                            <a href="{{ route('barang.edit', $item->id_barang) }}" class="btn btn-warning"
                                type="button">Edit</a>
                            <a href="{{ route('barang.hapus', $item->id_barang) }}" class="btn btn-danger"
                                type="button" onclick="return confirm('apakah anda yakin hapus data?')">Hapus</a>
                        </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
