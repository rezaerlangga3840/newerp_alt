@extends('dashboard.master.main')
@section('title', 'Daftar Lembaga Pendidikan')
@section('pageheadertitle')
 Daftar Lembaga Pendidikan
 <small></small>
@endsection
@section('breadcrumb')
<li class="active"><a><i class="fa fa-fw fa-university"></i> Daftar Lembaga Pendidikan</a></li>
@endsection
@section('content')
<div class="box">
  <div class="box-header">
    @if(session('result')=='success')
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i> Alert!</h4>
      Data berhasil disimpan
    </div>
    @endif
  </div>
  <div class="box-body table-responsive">
    <table class="table table-head-fixed table-bordered table-hover datatable">
      <thead>
        <tr>
          <th>NAMA LEMBAGA PENDIDIKAN</th>
          <th>DATA LEMBAGA PENDIDIKAN</th>
          <th>AKREDITASI</th>
          <th>NARAHUBUNG</th>
          <th>STATUS</th>
          <th>OPSI</th>
        </tr>
      </thead>
      <tbody>
      @foreach($sklh as $sk)
      <tr>
        <td>{{$sk->name}}</td>
        <td>
          <table>
            <tr>
              <td><i class="fa fa-map-pin"></i></td><td width="5pt"></td><td>
                @if($sk->kabko_sklh=='provinsilainnya')
                Provinsi Lainnya
                @else
                {{$sk->kabko_sklh}}
                @endif
              </td>
            </tr>
            <tr>
              <td><i class="fa fa-phone"></i></td><td width="5pt"></td><td>{{$sk->telp_sklh}}</td>
            </tr>
            <tr>
              <td><i class="fa fa-envelope"></i></td><td width="5pt"></td><td>{{$sk->email}}</td>
            </tr>
          </table>
        </td>
        <td>
          @if($sk->akreditasi_sklh=='a')
          Unggul (A)
          @elseif($sk->akreditasi_sklh=='b')
          Baik Sekali (B)
          @elseif($sk->akreditasi_sklh=='c')
          Baik (C)
          @endif
          <br><a target="_blank" href="{{url('syst/storage/app/public/scan_surat_akreditasi_sklh/'.$sk->scan_surat_akreditasi_sklh)}}">Surat akreditasi</a><!--$sk->no_akreditasi_sklh-->
        </td>
        <td>
          <table>
            <tr>
              <td><i class="fa fa-user"></i></td><td width="5pt"></td><td>{{$sk->nama_narahubung}}</td>
            </tr>
            <tr>
              <td><i class="fa fa-venus-mars"></i></td><td width="5pt"></td><td>@if($sk->jenis_kelamin_narahubung=='pria') Pria @elseif($sk->jenis_kelamin_narahubung=='wanita') Wanita @endif</td>
            </tr>
            <tr>
              <td><i class="fa fa-briefcase"></i></td><td width="5pt"></td><td>{{$sk->jabatan_narahubung}}</td>
            </tr>
            <tr>
              <td><i class="fa fa-phone"></i></td><td width="5pt"></td><td>{{$sk->handphone_narahubung}}</td>
            </tr>
          </table>
        </td>
        <td>
          @if($sk->akun_diverifikasi=='belum')
          Belum diverifikasi
          @elseif($sk->akun_diverifikasi=='sudah')
          Sudah diverifikasi
          @elseif($sk->akun_diverifikasi=='suspended')
          Ditangguhkan
          @endif
        </td>
        <td>
          @if($sk->akun_diverifikasi=='belum')
          <button type="button" class="btn btn-sm btn-success btn-verify" data-toggle="modal" data-target="#verify_{{$sk->id}}"><i class="fa fa-fw fa-check"></i></button>
          @elseif($sk->akun_diverifikasi=='sudah')
          <button type="button" class="btn btn-sm btn-danger btn-suspend" data-toggle="modal" data-target="#suspend_{{$sk->id}}"><i class="fa fa-fw fa-times"></i></button>
          @elseif($sk->akun_diverifikasi=='suspended')
          <button type="button" class="btn btn-sm btn-primary btn-unlock" data-toggle="modal" data-target="#unlock_{{$sk->id}}"><i class="fa fa-fw fa-unlock-alt"></i></button>
          @endif
          <button type="button" class="btn btn-sm btn-primary btn-reset" data-toggle="modal" data-target="#reset_{{$sk->id}}">Reset Password</button>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@foreach($sklh as $sk)
@include('dashboard.pages.admin.master_sklh.verify')
@include('dashboard.pages.admin.master_sklh.reset')
@endforeach
@endsection