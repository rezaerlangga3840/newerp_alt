<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\master_sklh;
use App\Models\master_psrt;
use App\Models\proposal_masuk;
use App\Models\proposal_keluar;
use App\Models\laporan;
use App\Models\laporan_item;
use App\Models\nota_dnas;
use App\Models\nota_dnas_item;
use App\Models\User;

use Hash;
use Auth;
use File;

class DataSklhController extends Controller
{
    public function addsklh(){
        return view('dashboard.pages.operator.data_sklh.addsklh');
    }
    public function savesklh(Request $req){
        $validated=$req->validate([
            'jenis_sklh'=>'required',
            'alamat_sklh'=>'required',
            'kabko_sklh'=>'required',
            'telp_sklh'=>'required|unique:master_sklh,telp_sklh',
            'akreditasi_sklh'=>'required',
            'no_akreditasi_sklh'=>'required|unique:master_sklh,no_akreditasi_sklh',
            'nama_narahubung'=>'required',
            'jenis_kelamin_narahubung'=>'required',
            'jabatan_narahubung'=>'required',
            'handphone_narahubung'=>'required|unique:master_sklh,handphone_narahubung',
            'scan_surat_akreditasi_sklh'=>'required|max:10000|mimes:pdf,doc,docx',
        ]);
        $id_user=Auth::user()->id;
        $jenis_sklh=$req->input('jenis_sklh');
        $alamat_sklh=$req->input('alamat_sklh');
        $kabko_sklh=$req->input('kabko_sklh');
        $telp_sklh=$req->input('telp_sklh');
        $akreditasi_sklh=$req->input('akreditasi_sklh');
        $no_akreditasi_sklh=$req->input('no_akreditasi_sklh');
        $file_akreditasi_a=$req->file('scan_surat_akreditasi_sklh');
        $scan_surat_akreditasi_sklh=time()."_".$file_akreditasi_a->getClientOriginalName();
        $sasklhd='public/storage/scan_surat_akreditasi_sklh';
        $file_akreditasi_a->move($sasklhd,$scan_surat_akreditasi_sklh);
        $nama_narahubung=$req->input('nama_narahubung');
        $jenis_kelamin_narahubung=$req->input('jenis_kelamin_narahubung');
        $jabatan_narahubung=$req->input('jabatan_narahubung');
        $handphone_narahubung=$req->input('handphone_narahubung');
        master_sklh::create([
            'id_user'=>$id_user,
            'jenis_sklh'=>$jenis_sklh,
            'alamat_sklh'=>$alamat_sklh,
            'kabko_sklh'=>$kabko_sklh,
            'telp_sklh'=>$telp_sklh,
            'akreditasi_sklh'=>$akreditasi_sklh,
            'no_akreditasi_sklh'=>$no_akreditasi_sklh,
            'scan_surat_akreditasi_sklh'=>$scan_surat_akreditasi_sklh,
            'nama_narahubung'=>$nama_narahubung,
            'jenis_kelamin_narahubung'=>$jenis_kelamin_narahubung,
            'jabatan_narahubung'=>$jabatan_narahubung,
            'handphone_narahubung'=>$handphone_narahubung,
        ]);
        return redirect()->route('dashboard');
    }
    public function viewsklh(){
        $sklh=master_sklh::where('id_user',Auth::user()->id)->join('users','users.id','master_sklh.id_user')->first();
        return view('dashboard.pages.operator.data_sklh.viewsklh',['sklh'=>$sklh]);
    }
    public function editsklh(){
        $sklh=master_sklh::where('id_user',Auth::user()->id)->first();
        return view('dashboard.pages.operator.data_sklh.editsklh',['sklh'=>$sklh]);
    }
    public function updatesklh(Request $req){
        $sklh=master_sklh::where('id_user',Auth::user()->id)->first();
        $idsklh=$sklh->id;
        $validated=$req->validate([
            'jenis_sklh'=>'required',
            'alamat_sklh'=>'required',
            'kabko_sklh'=>'required',
            'telp_sklh'=>'required|unique:master_sklh,telp_sklh,'.$sklh->id,
            'akreditasi_sklh'=>'required',
            'no_akreditasi_sklh'=>'required|unique:master_sklh,no_akreditasi_sklh,'.$sklh->id,
            'nama_narahubung'=>'required',
            'jenis_kelamin_narahubung'=>'required',
            'jabatan_narahubung'=>'required',
            'handphone_narahubung'=>'required|unique:master_sklh,handphone_narahubung,'.$sklh->id,
            'scan_surat_akreditasi_sklh'=>'nullable|max:10000|mimes:pdf,doc,docx',
        ]);
        $master_sklh=master_sklh::findOrFail($idsklh);
        $master_sklh->jenis_sklh = $req->input('jenis_sklh');
        $master_sklh->alamat_sklh = $req->input('alamat_sklh');
        $master_sklh->kabko_sklh = $req->input('kabko_sklh');
        $master_sklh->telp_sklh = $req->input('telp_sklh');
        $master_sklh->akreditasi_sklh = $req->input('akreditasi_sklh');
        $master_sklh->no_akreditasi_sklh = $req->input('no_akreditasi_sklh');
        if($req->file('scan_surat_akreditasi_sklh')!=null){
            $scan_surat_akreditasi_sklh_1=$req->file('scan_surat_akreditasi_sklh');
            $scan_surat_akreditasi_sklh=time()."_".$scan_surat_akreditasi_sklh_1->getClientOriginalName();
            $sasklhd='public/storage/scan_surat_akreditasi_sklh';
            $scan_surat_akreditasi_sklh_1->move($sasklhd,$scan_surat_akreditasi_sklh);
            if($master_sklh->scan_surat_akreditasi_sklh!=null){
                File::delete('public/storage/scan_surat_akreditasi_sklh/'.$master_sklh->scan_surat_akreditasi_sklh);
            }
            $master_sklh->scan_surat_akreditasi_sklh=$scan_surat_akreditasi_sklh;
        }
        $master_sklh->nama_narahubung = $req->input('nama_narahubung');
        $master_sklh->jenis_kelamin_narahubung = $req->input('jenis_kelamin_narahubung');
        $master_sklh->jabatan_narahubung = $req->input('jabatan_narahubung');
        $master_sklh->handphone_narahubung = $req->input('handphone_narahubung');
        $master_sklh->save();
        return redirect()->back();
    }
}
