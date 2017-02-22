<!-- Copy Aja dari file tambah.blade.php -->
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Update Satuan</title>
    </head>
    <body>
        <h2>Form Update Satuan</h2>
        <br />
        <!-- Arahkan action ke /satuan/simpan_update dengan method post -->
        <form action="{{url('/satuan/simpan_update')}}" method="post">
            {{ csrf_field() }}
            <!-- Disini kita masukan input type hidden untuk menyimpan id satuannya -->
            <input type="hidden" name="apaaja" value="{{$satuan->id}}">
            <!-- untuk tipe jenis input bisa di search di google teh, itu standar html.  -->
            <table>
                <tr>
                    <td>Satuan</td>
                    <td>:</td>
                    <!-- Isi dengan variabel yang diparsing -->
                    <!--  -->
                    <td><input type="text" name="satuan" placeholder="Input Satuan" value="{{$satuan->satuan}}"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <!-- Kalo Text Area Bukan di properti value teh, tapi didalam markup textarea -->
                    <td><textarea name="desc_satuan"  rows="4">{{$satuan->desc_satuan}}</textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>        
    </body>
</html>
