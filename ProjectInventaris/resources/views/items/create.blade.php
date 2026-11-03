<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Barang</title>
</head>
<body>
    <h2>Formulir Tambah Barang Inventaris Kantor</h2>

    {{--Panggil kondisi bawaan laravel jika data berhasil di simpan muncul pesan succes--}}
    @if(session('success'))
        <div>{{session('success')}}
    @endif

    {{--formulir mengarah ke route store milik item--}}
    <form action="{{ route('items.store') }}" method="POST">
        @csrf {{--wajib ada di form laravel--}}
        <label>Kode Barang:</label>
        <input type="text" name="code" required placeholder="Contoh: Inv-001">
        <br>

        <label>Nama Barang:</label>
        <input type="text" name="item_nama" required placeholder="Contoh: Laptop">
        <br>

        <label>Katgori:</label>
        <input type="text" name="category" required placeholder="Contoh: Elektronik">
        <br>
        
        <label>Stok:</label>
        <input type="number" name="stoc" required value="12">
        <br>

        <label>Kondisi:</label>
        <select name="condition">
            <option value="baik">Baik</option>
            <option value="rusak ringan">Rusak Ringan</option>
            <option value="rusak parah">Rusak Parah</option>
        </select>
        <br>

        <label>Lokasi Ruangan:</label>
        <input type="text" name="room_location" required holder="Contoh: Ruang IT Lt 3">
        <br>

        <button type="submit">Simpan Barang</button>
        <br>
    </form>    
</body>
</html>