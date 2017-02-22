<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tambah Satuan</title>
    </head>
    <body>
        <h2>Form Tambah Satuan</h2>
        <br />
        <form action="{{url('/satuan/simpan')}}" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Satuan</td>
                    <td>:</td>
                    <td><input type="text" name="satuan" placeholder="Input Satuan"></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td>:</td>
                    <td><textarea name="desc_satuan"  rows="4"></textarea></td>
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
