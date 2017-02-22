<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Satuan;

class MasterController extends Controller
{
    public function index_satuan()
    {
        //inisialisasi variabel data satuan
        //yang ini teh, yang teteh mah satuan::all() bisa ga..? haha..
        $data_satuan = Satuan::all();
        //kita coba redirect pake json
        //return json_encode($data_satuan);
        //inject variabel data satuan ke halaman index
        //parsing harus pake array, dengan tanda [deklarasi variabel => variabelnya]
        //iya teh, parsing dari controller, dari controller, komunikasi dengan model satuan
        //ngerti teh ngerti a. bentar a atu coba yaa pake yg atu
        //okay teh
        return view('satuan.index', ['coba'=>$data_satuan]);
    }

    
    public function form_tambah_satuan()
    {
        return view('satuan.tambah');
    }

    public function simpan_satuan(Request $request)
    {
        // return json_encode(Satuan::all()); 
        
        $satuan = new Satuan();
        $satuan->satuan = $request->input('satuan');
        $satuan->desc_satuan = $request->input('desc_satuan');

        if($satuan->save()){
            //kembalikan nilai dengan redirect ke index
            return redirect('satuan');
        }
    }

    //function yang di routing pada halaman /satuan/update 
    //$id adalah parameter yang diambil dari {id}, inget kurungnya hanya 1
    public function update_satuan($id){
        //Kita Ambil data satuan dengan id dari parameternya
        //itu metode mengambil object dengan id di laravel, mudah kan
        $satuan = Satuan::find($id);

        //sesudah object dari database didapatkan, sekarang kira render ke halaman /satuan/update 
        return view('satuan.update', ['satuan'=>$satuan]);
    }

    //Sekarang kita buat fungsi simpan_update_satuan yang di route ke /satuan/simpan_update
    //Dengan Parameter Request
    public function simpan_update_satuan(Request $request){
        
        //Ambil data dari database, 
        $satuan = Satuan::find($request->input('apaaja'));
        //Ambil data dari input text dengan name satuan
        $satuan->satuan = $request->input('satuan');
        //Ambil data dari textarea dengan name desc_satuan
        $satuan->desc_satuan= $request->input('desc_satuan');

        //Jika Satuan berhasil disimpan kedalam database, maka kembalikan nilai ke redirect('/satuan')
        //redirect itu mengarahkan ke halaman dengan url
        if($satuan->save()){
            return redirect('/satuan');
        }

        //teh adam kerumah dulu ya bentar, :)
        //siap a. laptopnya mah masih nyala kan a. :)

        //Begitu teh... :) kalo ada yang bingung nanya aja teh engga a. alhamdulillah mengerti
        
        
        
        //request mana teh...? yang buat simpan Update a
        //oo, yang itu, request itu adalah fungsi untuk mengambil data2 yang direquest dari view teh, yang 
        //diambil dari input name form 


        //ingat, konsep MODEL-VIEW-CONTROLLER oke sip teh,
        //udah ngerti teh..?
        //udah a,ini dikit lagi beres ngetiknya a. :D 

    }
    
    //buat fungsi yang dibuat di route hapus barusan
    public function hapus_satuan($id)
    {
        //ambil data satuan di database
        $satuan = Satuan::find($id);

        //Jika satuan berhasil dihapus, kembalikan nilai redirect('satuan')
        //gimana teh udah bisa..?
        //sudah bisa a. tidak ada error :)
         //mau lanjut cara run di server ngga teh..?
         //minggu depan aja a, takutnya skrng a sadam kan mau ada bisnis
         //nanti jadi nya udah isya teh, makannya nawarin... :D 
         //ooo iya yg run di server bareng" sama anak" yang lain aja a. :)
         //wokeh sipp teh,,latihan aja yang rajin teh, coba pake tabel yang banyak atribute nya,
         //kan inimah cuma 3 atribut, id, satuan, desc_satuan
         //siap a. 
         //yaudah disconnect in aja teh, mau liat quick count dulu... :D
         //oke a. maksih banyak a buat belajar hari ini.  base64_decodeerk
        if($satuan->delete()){
            return redirect('/satuan');
        }
    }
}
