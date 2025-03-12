<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\master_sklh;
use App\Models\User;

use Hash;
use Auth;
use File;

class MasterSklhController extends Controller
{
    public function daftar(Request $req){
        $sklh=master_sklh::join('users','users.id','master_sklh.id_user')->select('master_sklh.*','name','email','akun_diverifikasi')->get();
        return view('dashboard.pages.admin.master_sklh.daftar',['sklh'=>$sklh]);
    }
    public function verification($id, Request $req){
        $master_sklh=master_sklh::findOrFail($id);
        $akun_sklh=User::findOrFail($master_sklh->id_user);
        if($akun_sklh->akun_diverifikasi!='sudah'){
            $akun_sklh->akun_diverifikasi='sudah';
        }else{
            $akun_sklh->akun_diverifikasi='suspended';
        }
        $akun_sklh->save();
        return redirect()->back()->with('result','update');
    }
    public function resetting($id, Request $req){
        $master_sklh=master_sklh::findOrFail($id);
        $akun_sklh=User::findOrFail($master_sklh->id_user);
        $akun_sklh->password=bcrypt('123456');
        $akun_sklh->save();
        return redirect()->back()->with('result','update');
    }
}
