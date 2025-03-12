<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\master_sklh;
use App\Models\proposal_masuk;
use App\Models\master_psrt;
use App\Models\User;

use Hash;
use Auth;
use File;

class PermohonanMagangController extends Controller
{
    public function daftar(){
        $pmhnmgng=proposal_masuk::join('master_sklh','master_sklh.id','master_mgng.id_sklh')->join('users','users.id','master_sklh.id_user')->select('master_mgng.*','id_user','name','alamat_sklh','kabko_sklh','telp_sklh','email','akreditasi_sklh','no_akreditasi_sklh','nama_narahubung','jenis_kelamin_narahubung','jabatan_narahubung','handphone_narahubung','name','email','akun_diverifikasi')->where('id_user',Auth::user()->id)->where('status_surat_balasan','belum')->orderBy('created_at','desc')->get();
        $psrtmgng=master_psrt::join('master_mgng','master_mgng.id','master_psrt.id_mgng')->join('master_sklh','master_sklh.id','master_mgng.id_sklh')->join('users','users.id','master_sklh.id_user')->select('master_psrt.*','id_user','name','alamat_sklh','kabko_sklh','telp_sklh','email','akreditasi_sklh','no_akreditasi_sklh','nama_narahubung','jenis_kelamin_narahubung','jabatan_narahubung','handphone_narahubung','name','email','akun_diverifikasi')->orderBy('created_at','desc')->get();
        return view('dashboard.pages.operator.permohonan_magang.daftar',['pmhnmgng'=>$pmhnmgng,'psrtmgng'=>$psrtmgng]);
    }
    public function add(){
        return view('dashboard.pages.operator.permohonan_magang.add');
    }
    public function save(Request $req){
        $sklh=master_sklh::where('id_user',Auth::user()->id)->first();
        $validated=$req->validate([
            'nomor_surat_permintaan'=>'required|unique:master_mgng,nomor_surat_permintaan',
            'tanggal_surat_permintaan'=>'required',
            'perihal_surat_permintaan'=>'required',
            'ditandatangani_oleh'=>'required',
            'scan_surat_permintaan'=>'required|max:10000|mimes:pdf,doc,docx',
            'scan_proposal_magang'=>'required|max:10000|mimes:pdf,doc,docx',
        ]);
        $id_sklh=$sklh->id;
        $nomor_surat_permintaan=$req->input('nomor_surat_permintaan');
        $tanggal_surat_permintaan=$req->input('tanggal_surat_permintaan');
        $perihal_surat_permintaan=$req->input('perihal_surat_permintaan');
        $ditandatangani_oleh=$req->input('ditandatangani_oleh');
        $scan_surat_permintaan_a=$req->file('scan_surat_permintaan');
        $scan_surat_permintaan=time()."_".$scan_surat_permintaan_a->getClientOriginalName();
        $sasklhd='public/storage/scan_surat_permintaan';
        $scan_surat_permintaan_a->move($sasklhd,$scan_surat_permintaan);
        $scan_proposal_magang_a=$req->file('scan_proposal_magang');
        $scan_proposal_magang=time()."_".$scan_proposal_magang_a->getClientOriginalName();
        $sasklhd='public/storage/scan_proposal_magang';
        $scan_proposal_magang_a->move($sasklhd,$scan_proposal_magang);
        proposal_masuk::create([
            'id_sklh'=>$id_sklh,
            'nomor_surat_permintaan'=>$nomor_surat_permintaan,
            'tanggal_surat_permintaan'=>$tanggal_surat_permintaan,
            'perihal_surat_permintaan'=>$perihal_surat_permintaan,
            'ditandatangani_oleh'=>$ditandatangani_oleh,
            'scan_surat_permintaan'=>$scan_surat_permintaan,
            'scan_proposal_magang'=>$scan_proposal_magang,
        ]);
        return redirect()->route('permohonan_magang.daftar');
    }
    public function view($id){
        $proposal_masuk=proposal_masuk::join('master_sklh','master_sklh.id','master_mgng.id_sklh')->join('users','users.id','master_sklh.id_user')->select('master_mgng.*','id_user','name','alamat_sklh','kabko_sklh','telp_sklh','email','akreditasi_sklh','no_akreditasi_sklh','nama_narahubung','jenis_kelamin_narahubung','jabatan_narahubung','handphone_narahubung','akun_diverifikasi')->findOrFail($id);
        $master_psrt=master_psrt::join('master_mgng','master_mgng.id','master_psrt.id_mgng')->join('master_sklh','master_sklh.id','master_mgng.id_sklh')->join('users','users.id','master_sklh.id_user')->select('master_psrt.*','id_user','name','alamat_sklh','kabko_sklh','telp_sklh','email','akreditasi_sklh','no_akreditasi_sklh','nama_narahubung','jenis_kelamin_narahubung','jabatan_narahubung','handphone_narahubung','name','email','akun_diverifikasi','status_surat_permintaan')->where('id_mgng',$id)->get();
        return view('dashboard.pages.operator.permohonan_magang.view',['proposal_masuk'=>$proposal_masuk,'master_psrt'=>$master_psrt]);
    }
    public function update($id, Request $req){
        $validated=$req->validate([
            'nomor_surat_permintaan'=>'required|unique:master_mgng,nomor_surat_permintaan,'.$id,
            'tanggal_surat_permintaan'=>'required',
            'perihal_surat_permintaan'=>'required',
            'ditandatangani_oleh'=>'required',
            'scan_surat_permintaan'=>'nullable|max:10000|mimes:pdf,doc,docx',
            'scan_proposal_magang'=>'nullable|max:10000|mimes:pdf,doc,docx',
        ]);
        $proposal_masuk = proposal_masuk::find($id);
        $proposal_masuk->nomor_surat_permintaan=$req->input('nomor_surat_permintaan');
        $proposal_masuk->tanggal_surat_permintaan=$req->input('tanggal_surat_permintaan');
        $proposal_masuk->perihal_surat_permintaan=$req->input('perihal_surat_permintaan');
        $proposal_masuk->ditandatangani_oleh=$req->input('ditandatangani_oleh');
        if($req->file('scan_surat_permintaan')!=null){
            $scan_surat_permintaan_1=$req->file('scan_surat_permintaan');
            $scan_surat_permintaan=time()."_".$scan_surat_permintaan_1->getClientOriginalName();
            $sspd='public/storage/scan_surat_permintaan';
            $scan_surat_permintaan_1->move($sspd,$scan_surat_permintaan);
            if($proposal_masuk->scan_surat_permintaan!=null){
                File::delete('public/storage/scan_surat_permintaan/'.$proposal_masuk->scan_surat_permintaan);
            }
            $proposal_masuk->scan_surat_permintaan=$scan_surat_permintaan;
        }
        if($req->file('scan_proposal_magang')!=null){
            $scan_proposal_magang_1=$req->file('scan_proposal_magang');
            $scan_proposal_magang=time()."_".$scan_proposal_magang_1->getClientOriginalName();
            $spmd='public/storage/scan_proposal_magang';
            $scan_proposal_magang_1->move($spmd,$scan_proposal_magang);
            if($proposal_masuk->scan_proposal_magang!=null){
                File::delete('public/storage/scan_proposal_magang/'.$proposal_masuk->scan_proposal_magang);
            }
            $proposal_masuk->scan_proposal_magang=$scan_proposal_magang;
        }
        $proposal_masuk->save();
        return redirect()->back();
    }
    public function delete($id){
        $proposal_masuk = proposal_masuk::find($id);
        $proposal_masuk->delete();
        return redirect()->back()->with('deleted','Permintaan telah dibatalkan');
    }
    public function savepesertamagang($id, Request $req){
        $validated=$req->validate([
            'nama_peserta'=>'required',
            'jenis_kelamin'=>'required',
            'nik_peserta'=>'required|unique:master_psrt,nik_peserta',
            'nis_peserta'=>'required|unique:master_psrt,nis_peserta',
            'program_studi'=>'required',
            'no_handphone_peserta'=>'required|unique:master_psrt,no_handphone_peserta',
            'email_peserta'=>'required|unique:master_psrt,email_peserta',
        ]);
        $id_mgng=$id;
        $nama_peserta=$req->input('nama_peserta');
        $jenis_kelamin=$req->input('jenis_kelamin');
        $nik_peserta=$req->input('nik_peserta');
        $nis_peserta=$req->input('nis_peserta');
        $program_studi=$req->input('program_studi');
        $no_handphone_peserta=$req->input('no_handphone_peserta');
        $email_peserta=$req->input('email_peserta');
        master_psrt::create([
            'id_mgng'=>$id_mgng,
            'nama_peserta'=>$nama_peserta,
            'jenis_kelamin'=>$jenis_kelamin,
            'nik_peserta'=>$nik_peserta,
            'nis_peserta'=>$nis_peserta,
            'program_studi'=>$program_studi,
            'no_handphone_peserta'=>$no_handphone_peserta,
            'email_peserta'=>$email_peserta,
        ]);
        
        return redirect()->back();
    }
    public function updatepesertamagang($id, Request $req){
        $validated=$req->validate([
            'nama_peserta'=>'required',
            'jenis_kelamin'=>'required',
            'nik_peserta'=>'required|unique:master_psrt,nik_peserta,'.$id,
            'nis_peserta'=>'required|unique:master_psrt,nis_peserta,'.$id,
            'program_studi'=>'required',
            'no_handphone_peserta'=>'required|unique:master_psrt,no_handphone_peserta,'.$id,
            'email_peserta'=>'required|unique:master_psrt,email_peserta,'.$id,
        ]);
        $master_psrt=master_psrt::findOrFail($id);
        $master_psrt->nama_peserta=$req->input('nama_peserta');
        $master_psrt->jenis_kelamin=$req->input('jenis_kelamin');
        $master_psrt->nik_peserta=$req->input('nik_peserta');
        $master_psrt->nis_peserta=$req->input('nis_peserta');
        $master_psrt->program_studi=$req->input('program_studi');
        $master_psrt->no_handphone_peserta=$req->input('no_handphone_peserta');
        $master_psrt->email_peserta=$req->input('email_peserta');
        $master_psrt->save();
        return redirect()->back();
        
    }
    public function deletepesertamagang($id){
        $master_psrt = master_psrt::find($id);
        $master_psrt->delete();
        return redirect()->back()->with('deleted','Peserta telah dihapus');
    }
}
