@extends('dashboard.master.main')
@section('title', 'Detail Permohonan')
@section('pageheadertitle')
<a href="{{route('permohonan_magang.daftar')}}" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-arrow-left"></i></a>
 Detail Permohonan
 <small></small>
@endsection
@section('breadcrumb')
<li><a href="{{route('permohonan_magang.daftar')}}"><i class="fa fa-fw fa-file"></i> Daftar permohonan</a></li>
<li class="active"><a> Detail Permohonan</a></li>
@endsection
@section('content')
@if($proposal_masuk->status_surat_permintaan=='belum')
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-body">
        <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#editProposalMasuk_{{$proposal_masuk->id}}"><i class="fa fa-fw fa-pencil-square-o"></i> Edit</button><!--'user.viewpermohonankeluar',['id'=>$proposal_masuk->id]-->
        @if(\App\Models\master_psrt::where('id_mgng',$proposal_masuk->id)->count()>0)
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-send"></i> Kirim</button>
        @endif
      </div>
    </div>
  </div>
</div>
@endif
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
<!--end toolbar-->
<div class="row">
  <div class="col-md-12">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title" style="font-size: 30px">Mohon Diperhatikan!</h3>
      </div>
      <div class="box-body">
        <div class="form-group form-label-group">
          <ul>
            <li>Pihak lembaga pendidikan wajib menambahkan peserta terlebih dahulu sebelum bisa mengirim permohonan</li>
            <li>Pastikan data yang Anda kirimkan benar. Dikarenakan data yang terkirim tidak bisa diedit lagi</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title" style="font-size: 30px">Informasi Dasar</h3>
      </div>
      <div class="box-body">
        <table style="font-size: 12pt; border-collapse: separate; border-spacing: 0 15px">
          <tr>
            <td>Nomor Surat Permintaan</td><td width="20px" align="center">:</td><td>{{$proposal_masuk->nomor_surat_permintaan}}</td>
          </tr>
          <tr>
            <td>Tanggal Surat Permintaan</td><td width="20px" align="center">:</td><td>{{Carbon\Carbon::parse($proposal_masuk->tanggal_surat_permintaan)->translatedFormat('d F Y')}}</td>
          </tr>
          <tr>
            <td>Perihal Surat Permintaan</td><td width="20px" align="center">:</td><td>{{$proposal_masuk->perihal_surat_permintaan}}</td>
          </tr>
          <tr>
            <td>Ditandatangani oleh</td><td width="20px" align="center">:</td><td>{{$proposal_masuk->ditandatangani_oleh}}</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title" style="font-size: 30px">File Pendukung</h3>
      </div>
      <div class="box-body">
        <table style="font-size: 12pt; border-collapse: separate; border-spacing: 0 15px">
          <tr>
            <td>File Scan Surat Permintaan</td><td width="20px" align="center">:</td><td><a href="{{url('syst/storage/app/public/scan_surat_permintaan/'.$proposal_masuk->scan_surat_permintaan)}}">{{$proposal_masuk->scan_surat_permintaan}}</a></td>
          </tr>
          <tr>
            <td>File Scan Proposal Magang</td><td width="20px" align="center">:</td><td><a href="{{url('syst/storage/app/public/scan_proposal_magang/'.$proposal_masuk->scan_proposal_magang)}}">{{$proposal_masuk->scan_proposal_magang}}</a></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="box box-primary">
      @if($proposal_masuk->status_surat_permintaan=='belum')
      <div class="box-header with-border">
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addPesertaMagang_{{$proposal_masuk->id}}">
          <i class="fa fa-fw fa-plus"></i> Buat Data Peserta Baru
        </button>
        @include('dashboard.pages.operator.permohonan_magang.addpesertamagang')
      </div>
      @endif
      <div class="box-body table-responsive">
        <table class="table table-head-fixed table-bordered table-hover datatable">
          <thead>
            <tr>
              <th colspan="4" style="text-align: center; font-size: 30px">DAFTAR PESERTA</th>
            </tr>
            <tr>
              <th>NAMA PESERTA</th>
              <th>NIS/NIM PESERTA</th>
              <th>PROGRAM STUDI</th>
              <th>OPSI</th>
            </tr>
          </thead>
          <tbody>
            @foreach($master_psrt as $psrt)
            @if($psrt->id_mgng==$proposal_masuk->id)
            <tr>
              <td>{{$psrt->nama_peserta}}</td>
              <td>{{$psrt->nis_peserta}}</td>
              <td>{{$psrt->program_studi}}</td>
              <td>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#lihatAtauEditPesertaMagang_{{$psrt->id}}"><i class="fa fa-fw fa-eye"></i></button>
                @if($proposal_masuk->status_surat_permintaan=='belum')
                <button type="button" class="btn btn-sm btn-danger btn-trash" data-toggle="modal" data-target="#deletePesertaMagang_{{$psrt->id}}"><i class="fa fa-fw fa-trash"></i></button>
                @endif
              </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@include('dashboard.pages.operator.permohonan_magang.edit')
@foreach($master_psrt as $psrt)
@include('dashboard.pages.operator.permohonan_magang.editpesertamagang')
@include('dashboard.pages.operator.permohonan_magang.deletepesertamagang')
@endforeach
@endsection