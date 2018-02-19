<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use App\Surat;
use App\Jenis;
use Response;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\SuratRequest;

use App\Karyawan;
use App\Http\Requests\KaryawanRequest;
use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Support\Facades\Auth;
use PDF;
use DB;

class Admin_GL extends Controller
{

  public function __construct()
  {
   $this->middleware('auth');
  }

    public function index(){
      return view('admin.index');
    }

    public function daftar_surat(){
      $surat = Surat::with('jenis', 'client')->get();
      // $surat2 = Surat::where('id_jenis', 1)->with('Jenis')->get();
      // $clients = Client::All();
      // $jenis = Jenis::All();
      return view('admin.daftar_surat',compact('surat'));
    }

    public function form_surat(){
      $clients = Client::All();
      $macam = Jenis::All();
      $bln = array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
      $rmw_bln = array(1=>"I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
      return view('admin.form_surat',compact('clients','macam','bln','rmw_bln'));
    }

    public function asalClient(Request $request){
      $asal = Client::All()->where('id',$request->id)->first();
      return response()->json($asal);
    }

    public function isiSurat(Request $request){
      $isi=Jenis::All()->where('kode',$request->kode)->first();
      return response()->json($isi);
    }

    public function save_surat(Request $request){
      $idjenis = Jenis::select('id')->where('kode',$request->jenis_surat)->first();
      $ang_bln = array("I"=>'01',"II"=>'02',"III"=>'03', "IV"=>'04', "V"=>'05',"VI"=>'06',"VII"=>'07',"VIII"=>'08',"IX"=>'09',"X"=>'10', "XI"=>'11', "XII"=>'12');
      Surat::create([
        'nomor_surat' => $request->nomor_surat,
        'id_jenis' => $idjenis->id,
        'id_client' => $request->client,
        'perihal' => $request->perihal,
        'lampiran' => $request->lampiran,
        'tanggal' => $request->tahun.'-'.$ang_bln[$request->bulan].'-'.$request->tanggal,
        'isi_surat' => $request->isi_surat,
        ]);
        $request->session()->flash('message', 'Data Surat telah berhasil disimpan');
        return redirect()->back();
    }

    public function daftar_karyawan(){
      $karyawans = Karyawan::All();
      return view('admin.daftar_karyawan', compact('karyawans'));
    }

    public function form_karyawan(){
      return view('admin.form_karyawan');
    }

    public function save_karyawan(KaryawanRequest $request){
      Karyawan::create([
      'nama' => $request->nama,
      'nip' => $request->nip,
      'jabatan' => $request->jabatan,
      'alamat' => $request->alamat,
    ]);
    $request->session()->flash('message', 'Data Karyawan telah berhasil disimpan');
    return redirect()->back();
    }

    public function edit_karyawan(Karyawan $karyawan){
      return view('admin.edit_karyawan', compact('karyawan'));
    }

    public function update_karyawan(KaryawanRequest $request, Karyawan $karyawan){
      $request->karyawan->update([
        'nama' => $request->nama,
        'nip' => $request->nip,
        'jabatan' => $request->jabatan,
        'alamat' => $request->alamat,
      ]);
      $request->session()->flash('message', 'Data Karyawan telah berhasil Diperbaharui');
      return redirect()->route('daftar_karyawan');
    }

    public function delete_karyawan(Request $request, Karyawan $karyawan){
      $request->karyawan->delete();
      $request->session()->flash('message', 'Data Karyawan telah berhasil Dihapus');
      return redirect()->to('/gl/daftar_karyawan');
    }

    public function daftar_client(){
      $clients = Client::All();
      return view('admin.daftar_client', compact('clients'))->with('client',$clients);
    }

    public function form_client(){
      return view('admin.form_client');
    }

    public function save_client(ClientRequest $request){
      Client::create([
      'nama' => $request->nama,
      'tanggal_lahir' => $request->tanggal_lahir,
      'jenis_kelamin' => $request->jenis_kelamin,
      'agama' => $request->agama,
      'no_identitas' => $request->no_identitas,
      'alamat' => $request->alamat,
      'no_telp' => $request->no_telp,
      'email' => $request->email,
      'instansi' => $request->instansi,
      'jabatan' => $request->jabatan,
      'alamat_instansi' => $request->alamat_instansi,
    ]);
    $request->session()->flash('message', 'Data Client telah berhasil disimpan');
    return redirect()->back();
    }

    public function edit_client(Client $client){
      return view('admin.edit_client', compact('client'));
    }

    public function show_client($client_id){
          $client = Client::find($client_id);
          return Response::json($client);
    }

    public function update_client(ClientRequest $request, Client $client){
      $request->client->update([
        'nama' => $request->nama,
        'instansi' => $request->instansi,
        'alamat' => $request->alamat,
        'no_telp' => $request->no_telp,
        'email' => $request->email,
      ]);
      $request->session()->flash('message', 'Data Client telah berhasil Diperbaharui');
      return redirect()->route('daftar_client');
    }

    public function delete_client(Request $request, Client $client){
      $request->client->delete();
      $request->session()->flash('message', 'Data Client telah berhasil Dihapus');
      return redirect()->to('/gl/daftar_client');
    }

    public function print_surat(Surat $surat){
      $items = DB::table("surat")->get();
         view()->share('surat',$surat);

      $pdf = PDF::loadView('admin.print_surat');
      return $pdf->stream('print_surat.pdf');
      // return view('admin.print_surat', compact('surat'));
    }
}
