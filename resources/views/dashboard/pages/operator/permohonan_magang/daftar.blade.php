@extends('dashboard.master.main')
@section('title', 'Daftar permohonan')
@section('pageheadertitle')
 Daftar permohonan
 <small></small>
@endsection
@section('breadcrumb')
<li class="active"><a><i class="fa fa-fw fa-file"></i> Daftar Permohonan</a></li>
@endsection
@section('content')
<div class="box">
  <div class="box-body table-responsive">
    <table id="example1" class="table table-head-fixed table-bordered table-hover datatable">
      <thead>
        <tr>
          <th rowspan="2">DATA SURAT PERMINTAAN</th>
          <th colspan="4" style="text-align:center">PESERTA</th>
          <th rowspan="2" style="text-align:center">STATUS</th>
          <th rowspan="2" style="text-align:center">OPSI</th>
        </tr> 
        <tr>
          <th style="text-align: center">NIS/NIM</th>
          <th style="text-align: center">NAMA</th>
          <th style="text-align: center">PROGRAM STUDI</th>
          <th style="text-align: center">OPSI PESERTA</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pmhnmgng as $proposal_masuk)
        <tr>
          <td>
            <table>
              <tr>
                <td><i class="fa fa-sort-numeric-desc"></i></td><td width="5pt"></td><td>{{$proposal_masuk->nomor_surat_permintaan}}</td>
              </tr>
              <tr>
                <td><i class="fa fa-calendar"></i></td><td width="5pt"></td><td>{{Carbon\Carbon::parse($proposal_masuk->tanggal_surat_permintaan)->translatedFormat('d F Y')}}</td>              
              </tr>
              <tr>
                <td><i class="fa fa-info"></i></td><td width="5pt"></td><td>{{$proposal_masuk->perihal_surat_permintaan}}</td>
              </tr>
              <tr>
                <td><i class="fa fa-envelope"></i></td><td width="5pt"></td><td><a href="{{url('syst/storage/app/public/scan_surat_permintaan/'.$proposal_masuk->scan_surat_permintaan)}}">Surat Permohonan</a></td>
              </tr>
              <tr>
                <td><i class="fa fa-file"></i></td><td width="5pt"></td><td><a href="{{url('syst/storage/app/public/scan_proposal_magang/'.$proposal_masuk->scan_proposal_magang)}}">Proposal Magang</a></td>
              </tr>
            </table>
          </td>
          <td style="text-align: center">
            @foreach($psrtmgng as $psrt)
            @if($psrt->id_mgng==$proposal_masuk->id)
            {{$psrt->nis_peserta}}<br>
            @endif
            @endforeach
          </td>
          <td style="text-align: center">
            @foreach($psrtmgng as $psrt)
            @if($psrt->id_mgng==$proposal_masuk->id)
            {{$psrt->nama_peserta}}<br>
            @endif
            @endforeach
          </td>
          <td style="text-align: center">
            @foreach($psrtmgng as $psrt)
            @if($psrt->id_mgng==$proposal_masuk->id)
            {{$psrt->program_studi}}<br>
            @endif
            @endforeach
          </td>
          <td style="text-align: center">
            @foreach($psrtmgng as $psrt)
            @if($psrt->id_mgng==$proposal_masuk->id)
            <a href="#"><!--route('user.editpesertamagang',['id'=>$psrt->id])-->
              @if($proposal_masuk->status_surat_permintaan=='belum')
              Edit Peserta
              @else
              Lihat Peserta
              @endif
            </a><br>
            @endif
            @endforeach
          </td>
          <td style="text-align: center">
            @if($proposal_masuk->status_surat_permintaan=='belum')
            Belum Terkirim
            @else
            Menunggu Persetujuan
            @endif
          </td>
          <td style="text-align: center">
            <a href="{{route('permohonan_magang.view',['id'=>$proposal_masuk->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-fw fa-eye"></i></a><!---->
            @if($proposal_masuk->status_surat_permintaan=='belum')
            <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#addPesertaMagang_{{$proposal_masuk->id}}"><i class="fa fa-fw fa-user-plus"></i></button><!--route('user.addpesertamagang', ['id'=>$proposal_masuk->id])-->
            
            @endif
            <button type="button" class="btn btn-sm btn-danger btn-trash" data-toggle="modal" data-target="#delete_{{$proposal_masuk->id}}"><i class="fa fa-fw fa-trash"></i></button>
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@foreach($pmhnmgng as $proposal_masuk)
@include('dashboard.pages.operator.permohonan_magang.addpesertamagang')
@include('dashboard.pages.operator.permohonan_magang.delete')
@endforeach
@endsection