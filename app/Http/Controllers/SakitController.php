<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Models\Kamar;
use App\Models\Pasien;

class SakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamar = Kamar::select('pasiens.nama', 'pasiens.alamat','dokter.namad', 'dokter.jabatan')->join('pasiens', 'id_pasien', '=', 'pasiens.id')->join('dokter', 'id_dokter','=', 'dokter.id')->get();
        return view('0098index', ['kamar' => $kamar]);
    }
    public function filter()
    {
        $kamar = Kamar::select('pasiens.nama', 'pasiens.alamat','dokter.namad', 'dokter.jabatan')->join('pasiens', 'id_pasien', '=', 'pasiens.id')->join('dokter', 'id_dokter','=', 'dokter.id')->where('pasiens.alamat', 'Surabaya')->get();
        return view('0098index', ['kamar' => $kamar]);
    }
    public function filter2()
    {
        $kamar = Kamar::select('pasiens.nama', 'pasiens.alamat','dokter.namad', 'dokter.jabatan')->join('pasiens', 'id_pasien', '=', 'pasiens.id')->join('dokter', 'id_dokter','=', 'dokter.id')->where('pasiens.alamat', 'Sidoarjo')->get();
        return view('0098index', ['kamar' => $kamar]);
    }
    public function all1()
    {
        $kamar = Kamar::select('pasiens.nama', 'pasiens.alamat','dokter.namad', 'dokter.jabatan')->join('pasiens', 'id_pasien', '=', 'pasiens.id')->join('dokter', 'id_dokter','=', 'dokter.id')->get();
        return view('0098index', ['kamar' => $kamar]);
    }

    public function filter3()
    {
        $pasien = Pasien::select('nama', 'alamat')->where('alamat', 'Surabaya')->get();
        return view('0098pasien', ['pasien' => $pasien]);
    }

    public function filter4()
    {
        $pasien = Pasien::select('nama', 'alamat')->where('alamat', 'Sidoarjo')->get();
        return view('0098pasien', ['pasien' => $pasien]);
    }
    public function all2()
    {
        $pasien = Pasien::all();
        return view('0098pasien', ['pasien' => $pasien]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('0098tambah');
    }

    public function pasien()
    {
      $pasien = Pasien::all();
      return view('0098pasien', ['pasien' => $pasien]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request){
      DB::table('pasiens')->insert([
          'nama'=>$request->nama,
          'alamat'=>$request->alamat,
      ]);
      return redirect('0098pasien');
  }
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pasien = Pasien::where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('0098edit',['pasiens' => $pasien]);

	}
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		Pasien::where('id',$request->id)->update([
			'nama' => $request->nama,
			'alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/0098pasien');
	}
   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		$pasien=Pasien::where('id',$id)->delete();
		// alihkan halaman ke halaman pegawai
		return redirect('/0098pasien');
	}
}
