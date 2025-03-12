@extends('dashboard.master.main')
@section('title', 'Blank Page')
@section('pageheadertitle')
        Blank page
        <small>it all starts here</small>
@endsection
@section('breadcrumb')
<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
@endsection
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Selamat datang!</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
            <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="form-group form-label-group">
            <label for="iTanggalSaatIni">Tanggal saat ini</label>
            <h3 id="iTanggalSaatIni">
                {{Carbon\Carbon::now()->translatedFormat('d F Y')}}
            </h3>
        </div>
    </div>
</div>
@endsection