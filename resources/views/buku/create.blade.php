<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <div class="container mx-5">
        <h4>Tambah Buku</h4>
        <form method="POST" action="{{route('buku.store')}}">
            @csrf
            <div>
                Judul
                <input type="text" name="judul">
            </div>

            <div>
                Penulis
                <input type="text" name="penulis">
            </div>

            <div>
                Harga
                <input type="text" name="harga">
            </div>

            <div>
                Tanggal Terbit
                <input type="text" name="tgl_terbit">
            </div>

            <div>
                <button type="submit">Simpan</button>
                <button><a href="/buku">Batal</a></button>
            </div>
        </form>
    </div>
