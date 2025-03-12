@extends('dashboard.master.main')
@section('title', 'Form Permohonan Magang')
@section('pageheadertitle')
 Form Permohonan Magang
 <small></small>
@endsection
@section('breadcrumb')
<li class="active"><a><i class="fa fa-fw fa-university"></i> Form Permohonan Magang</a></li>
@endsection
@section('content')
<form role="form" method="post" enctype="multipart/form-data" action="{{route('permohonan_magang.save')}}">
  @csrf
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
          <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-body">
          <div class="form-group form-label-group">
            <label for="iNomorSuratPermintaan">Nomor Surat</label>
            <input type="text" name="nomor_surat_permintaan" class="form-control {{$errors->has('nomor_surat_permintaan')?'is-invalid':''}}" value="{{old('nomor_surat_permintaan')}}" id="iNomorSuratPermintaan" placeholder="Masukkan nomor surat disini">
            @if($errors->has('nomor_surat_permintaan'))
            <span class="help-block">{{$errors->first('nomor_surat_permintaan')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iTanggalSuratPermintaan">Tanggal Surat</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" name="tanggal_surat_permintaan" class="form-control {{$errors->has('tanggal_surat_permintaan')?'is-invalid':''}}" value="{{old('tanggal_surat_permintaan')}}" id="iTanggalSuratPermintaan" required>
              @if($errors->has('tanggal_surat_permintaan'))
              <span class="help-block">{{$errors->first('tanggal_surat_permintaan')}}</span>
              @endif
            </div>
          </div>
          <div class="form-group form-label-group">
            <label for="iPerihalSuratPermintaan">Perihal</label>
            <input type="text" name="perihal_surat_permintaan" class="form-control {{$errors->has('perihal_surat_permintaan')?'is-invalid':''}}" value="{{old('perihal_surat_permintaan')}}" id="iPerihalSuratPermintaan" placeholder="Masukkan perihal disini">
            @if($errors->has('perihal_surat_permintaan'))
            <span class="help-block">{{$errors->first('perihal_surat_permintaan')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iDitandatanganiOleh">Ditandatangani Oleh</label>
            <input type="text" name="ditandatangani_oleh" class="form-control {{$errors->has('ditandatangani_oleh')?'is-invalid':''}}" value="{{old('ditandatangani_oleh')}}" id="iDitandatanganiOleh" placeholder="Catatan : diisi jabatan, bukan nama orangya">
            @if($errors->has('ditandatangani_oleh'))
            <span class="help-block">{{$errors->first('ditandatangani_oleh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iScanSuratPermintaan">Scan Surat Permintaan (format .jpg, .pdf, max. 10MB)</label>
            <input type="file" name="scan_surat_permintaan" class="form-control {{$errors->has('scan_surat_permintaan')?'is-invalid':''}}" id="iScanSuratPermintaan" placeholder="Masukkan lampiran">
            @if($errors->has('scan_surat_permintaan'))
            <span class="help-block">{{$errors->first('scan_surat_permintaan')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iScanSuratProposalMagang">Scan Proposal Magang (format .jpg, .pdf, max. 10MB)</label>
            <input type="file" name="scan_proposal_magang" class="form-control {{$errors->has('scan_proposal_magang')?'is-invalid':''}}" id="iScanSuratProposalMagang" placeholder="Masukkan lampiran">
            @if($errors->has('scan_proposal_magang'))
            <span class="help-block">{{$errors->first('scan_proposal_magang')}}</span>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection