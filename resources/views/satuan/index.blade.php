<html>
    <head>
        <title>Data Satuan</title>
    </head>
    <body>
        <h2>Tabel Data Satuan</h2>
        <br />
        <a href="{{url('/satuan/tambah')}}">Tambah</a>
        
        <!-- Tabel Satuan (List Data Satuan) -->

        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Satuan</th>
                    <th>Deskripsi</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <!-- 
                    Setelah di parsing dari controller index_satuan
                    sekarang kita tampilkan data kedalam tabel
                    dengan menggunakan forelse
                 -->
                 <?php 
                    //deklarasi variabel untuk nomor urut
                    $i = 0;
                 ?>
                 <!-- 
                    Data yang diparsing itu akan berupa aray teh,
                    jadi menggunakan perulangan forelse,
                    kenapa pake for else, karena didalam memunculkan data, 
                    ada juga data yang masih kosong didalam database
                  -->
                 @forelse ($coba as $satuan)
                    <!-- Jika Tabel Satuan Ada Datanya -->
                     <tr>
                        <td>{{$i+1}}</td>
                        <td>{{$satuan->satuan}}</td>
                        <td>{{$satuan->desc_satuan}}</td>
                        <td>
                            <!-- Linkan ke link yang ada di Route -->
                            <a href="{{ url('/satuan/update') .'/'.$satuan->id }}">Update</a> &nbsp;
                            <!-- 
                                - Sekarang kita bikin dulu link nya di route 
                                - begitu teh..ada yang bingung..?
                                - tidak ada a. laravel buat hapusnya simpel yaa tinggal tulis delete aja. :D 
                                -iya teh.. :D . coba dulu di teteh, bisa ngga.
                                -oke a
                            -->
                            <a href="{{ url('/satuan/hapus').'/'.$satuan->id }}">Hapus</a>
                        </td>
                     </tr>
                     <?php 
                        //increment penomoran
                        $i++;
                     ?>
                 @empty
                     <!-- Jika Tabel Satuan Tidak Ada Data -->
                     <tr>
                        <td colspan="4" align="center">Tidak Ada Data</td>
                     </tr>
                 @endforelse
                 <!-- Gitu teh, manfaat dari forelsenya blade.. :) -->

            </tbody>
        </table>
    </body>
</html>