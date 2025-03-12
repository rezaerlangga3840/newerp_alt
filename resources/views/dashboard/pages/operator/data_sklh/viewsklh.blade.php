@extends('dashboard.master.main')
@section('title', 'Detail Data')
@section('pageheadertitle')
 Detail Data
 <small></small>
@endsection
@section('breadcrumb')
<li class="active"><a><i class="fa fa-fw fa-university"></i> Detail Data</a></li>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-body">
        <a class="btn btn-sm btn-success" href="{{route('user.editsklh')}}"><i class="fa fa-fw fa-pencil-square-o"></i></a><!---->
        @if(session('result')=='update')
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            Data berhasil diperbaharui
        </div>
        @endif
        @if(session('result')=='fail-delete')
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            Data gagal dihapus
        </div>
        @endif
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title" style="font-size: 30px">Data Lembaga Pendidikan</h3>
      </div>
      <div class="box-body">
        <table style="font-size: 12pt; border-collapse: separate; border-spacing: 0 15px">
          <tr>
            <td>Nama</td><td width="20pt" align="center">:</td><td>{{$sklh->name}}</td>
          </tr>
          <tr>
            <td>Alamat</td><td width="20pt" align="center">:</td><td>{{$sklh->alamat_sklh}}</td>
          </tr>
          <tr>
            <td>Kabupaten/Kota</td><td width="20pt" align="center">:</td><td>@if($sklh->kabko_sklh!='provinsilainnya'){{$sklh->kabko_sklh}}@else Provinsi Lainnya @endif</td>
          </tr>
          <tr>
            <td>Telepon</td><td width="20pt" align="center">:</td><td>{{$sklh->telp_sklh}}</td>
          </tr>
          <tr>
            <td>Email</td><td width="20pt" align="center">:</td><td>{{$sklh->email}}</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title" style="font-size: 30px">Data Akreditasi</h3>
      </div>
      <div class="box-body">
        <table style="font-size: 12pt; border-collapse: separate; border-spacing: 0 15px">
          <tr>
            <td>Akreditasi</td><td width="20pt" align="center">:</td><td>@if($sklh->akreditasi_sklh=='a') Unggul (A) @elseif($sklh->akreditasi_sklh=='b') Baik sekali (B) @elseif($sklh->akreditasi_sklh=='c') Baik (C) @endif</td>
          </tr>
          <tr>
            <td>Nomor Akreditasi</td><td width="20pt" align="center">:</td><td>{{$sklh->no_akreditasi_sklh}}</td>
          </tr>
          <tr>
            <td>File surat Akreditasi</td><td width="20pt" align="center">:</td><td><a href="{{url('syst/storage/app/public/scan_surat_akreditasi_sklh/'.$sklh->scan_surat_akreditasi_sklh)}}">{{$sklh->scan_surat_akreditasi_sklh}}</a></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title" style="font-size: 30px">Narahubung</h3>
      </div>
      <div class="box-body">
        <table style="font-size: 12pt; border-collapse: separate; border-spacing: 0 15px">
          <tr>
            <td>Nama</td><td width="20pt" align="center">:</td><td>{{$sklh->nama_narahubung}}</td>
          </tr>
          <tr>
            <td>Jenis kelamin</td><td width="20pt" align="center">:</td><td>@if($sklh->jenis_kelamin_narahubung=='pria') Pria @elseif($sklh->jenis_kelamin_narahubung=='wanita') Wanita @endif</td>
          </tr>
          <tr>
            <td>Jabatan</td><td width="20pt" align="center">:</td><td>{{$sklh->jabatan_narahubung}}</td>
          </tr>
          <tr>
            <td>No. Handphone</td><td width="20pt" align="center">:</td><td>{{$sklh->handphone_narahubung}}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection