<!doctype html>
<head>
    <title> Edit Homestay</title>
</head>
<body>
<div class="container">
<div class="mt-5">
    <h1>Edit Homestay</h1>
    <div class="container">
        <div class="mt-5">
        @foreach($homestay as $p)
	    <form action="/homestay/update" method="post">
	    	{{ csrf_field() }}
            <table>
                <tr>
                    <td> Nama Homestay </td>
                    <td> <input type="text" name="homestay_nama" required="required" value="{{ $p->homestay_nama }}"> </td>
                </tr>
                <tr>
                    <td> Alamat </td>
                    <td><textarea name="homestay_alamat" required="required" >{{ $p->homestay_alamat }}</textarea></td>
                </tr>
                <tr>
                    <td> Kota </td>
                    <td><input type="text" name="homestay_kota" required="required" value="{{ $p->homestay_kota }}"></td>
                </tr>
                <tr>
                    <td> Pemilik </td>
                    <td><input type="text" name="homestay_pemilik" required="required" value="{{ $p->homestay_pemilik }}"></td>
                </tr>
                <tr>
                    <td> Jumlah Kamar </td>
                    <td><input type="number" name="homestay_jumlah_kamar" required="required" value="{{ $p->homestay_jumlah_kamar }}"></td>
                </tr>
                <tr>
                    <td> Harga Tertinggi </td>
                    <td><input type="number" name="homestay_harga_tertinggi" required="required" value="{{ $p->homestay_harga_tertinggi }}"></td>
                </tr>
                <tr>
                    <td> Harga Terendah </td>
                    <td><input type="number" name="homestay_harga_terendah" required="required" value="{{ $p->homestay_harga_terendah }}"></td>
                </tr>
                <tr>
                    <td> Foto </td>
                    <td><input type="file" name="homestay_foto" required="required" value="{{ $p->homestay_foto }}"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>
            </form>
	        @endforeach  
        </div>
    </div>
    </div>
    </div>
</body>
</html>