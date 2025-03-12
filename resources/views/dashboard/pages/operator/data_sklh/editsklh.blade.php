@extends('dashboard.master.main')
@section('title', 'Edit Data')
@section('pageheadertitle')
<a href="{{route('user.viewsklh')}}" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-arrow-left"></i></a>
 Edit Data
 <small></small>
@endsection
@section('breadcrumb')
<li><a href="{{route('user.viewsklh')}}"><i class="fa fa-fw fa-university"></i> Detail Data</a></li>
<li class="active"><a> Edit Data</a></li>
@endsection
@section('content')
<form role="form" method="post" enctype="multipart/form-data" action="{{route('user.updatesklh')}}">
  @csrf
  {{method_field('PUT')}}
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
        <div class="box-header with-border">
          <h3 class="box-title" style="font-size: 30px">Data Lembaga Pendidikan</h3>
        </div>
        <div class="box-body">
          <div class="form-group form-label-group">
            <?php
              $val=old('jenis_sklh',$sklh->jenis_sklh);
            ?>
            <label for="iJenisSklh">Jenis</label>
            <select class="form-control {{$errors->has('jenis_sklh')?'is-invalid':''}}" id="iJenisSklh" name="jenis_sklh">
              <option value="sma" {{$val=="sma"?'selected':''}}>SMA/SMK/Madrasah Aliyah</option>
              <option value="pgt" {{$val=="pgt"?'selected':''}}>Perguruan Tinggi</option>
              <option value="lpd" {{$val=="lpd"?'selected':''}}>Lembaga Pendidikan</option>
              <option value="upt" {{$val=="upt"?'selected':''}}>UPT BLK Disnaker Prov. Jatim</option>
            </select>
            @if($errors->has('jenis_sklh'))
            <span class="help-block">{{$errors->first('jenis_sklh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iAlamatSklh">Alamat Sekolah/Kampus</label>
            <input type="text" name="alamat_sklh" class="form-control {{$errors->has('alamat_sklh')?'is-invalid':''}}" value="{{old('alamat_sklh',$sklh->alamat_sklh)}}" id="iAlamatSklh" placeholder="Apabila diluar wilayah Jawa Timur, cukup diisi nama kabupaten/kota dan provinsi" required>
            @if($errors->has('alamat_sklh'))
            <span class="help-block">{{$errors->first('alamat_sklh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <?php
              $val=old('kabko_sklh',$sklh->kabko_sklh);
            ?>
            <label for="iKabKoSklh">Kabupaten/Kota</label>
            <select class="form-control {{$errors->has('kabko_sklh')?'is-invalid':''}}" id="iKabKoSklh" name="kabko_sklh">
              <option value="provinsilainnya" {{$val=="provinsilainnya"?'selected':''}}>Provinsi lainnya</option>
              <option value="Kabupaten Bangkalan" {{$val=="Kabupaten Bangkalan"?'selected':''}}>Kabupaten Bangkalan</option><!--Kabupaten Bangkalan-->
              <option value="Kabupaten Banyuwangi" {{$val=="Kabupaten Banyuwangi"?'selected':''}}>Kabupaten Banyuwangi</option><!--Kabupaten Banyuwangi-->
              <option value="Kabupaten Blitar" {{$val=="Kabupaten Blitar"?'selected':''}}>Kabupaten Blitar</option><!--Kabupaten Blitar-->
              <option value="Kabupaten Bojonegoro" {{$val=="Kabupaten Bojonegoro"?'selected':''}}>Kabupaten Bojonegoro</option><!--Kabupaten Bojonegoro-->
              <option value="Kabupaten Bondowoso" {{$val=="Kabupaten Bondowoso"?'selected':''}}>Kabupaten Bondowoso</option><!--Kabupaten Bondowoso-->
              <option value="Kabupaten Gresik" {{$val=="Kabupaten Gresik"?'selected':''}}>Kabupaten Gresik</option><!--Kabupaten Gresik-->
              <option value="Kabupaten Jember" {{$val=="Kabupaten Jember"?'selected':''}}>Kabupaten Jember</option><!--Kabupaten Jember-->
              <option value="Kabupaten Jombang" {{$val=="Kabupaten Jombang"?'selected':''}}>Kabupaten Jombang</option><!--Kabupaten Jombang-->
              <option value="Kabupaten Kediri" {{$val=="Kabupaten Kediri"?'selected':''}}>Kabupaten Kediri</option><!--Kabupaten Kediri-->
              <option value="Kabupaten Lamongan" {{$val=="Kabupaten Lamongan"?'selected':''}}>Kabupaten Lamongan</option><!--Kabupaten Lamongan-->
              <option value="Kabupaten Lumajang" {{$val=="Kabupaten Lumajang"?'selected':''}}>Kabupaten Lumajang</option><!--Kabupaten Lumajang-->
              <option value="Kabupaten Madiun" {{$val=="Kabupaten Madiun"?'selected':''}}>Kabupaten Madiun</option><!--Kabupaten Madiun-->
              <option value="Kabupaten Magetan" {{$val=="Kabupaten Magetan"?'selected':''}}>Kabupaten Magetan</option><!--Kabupaten Magetan-->
              <option value="Kabupaten Malang" {{$val=="Kabupaten Malang"?'selected':''}}>Kabupaten Malang</option><!--Kabupaten Malang-->
              <option value="Kabupaten Mojokerto" {{$val=="Kabupaten Mojokerto"?'selected':''}}>Kabupaten Mojokerto</option><!--Kabupaten Mojokerto-->
              <option value="Kabupaten Nganjuk" {{$val=="Kabupaten Nganjuk"?'selected':''}}>Kabupaten Nganjuk</option><!--Kabupaten Nganjuk-->
              <option value="Kabupaten Ngawi" {{$val=="Kabupaten Ngawi"?'selected':''}}>Kabupaten Ngawi</option><!--Kabupaten Ngawi-->
              <option value="Kabupaten Pacitan" {{$val=="Kabupaten Pacitan"?'selected':''}}>Kabupaten Pacitan</option><!--Kabupaten Pacitan-->
              <option value="Kabupaten Pamekasan" {{$val=="Kabupaten Pamekasan"?'selected':''}}>Kabupaten Pamekasan</option><!--Kabupaten Pamekasan-->
              <option value="Kabupaten Pasuruan" {{$val=="Kabupaten Pasuruan"?'selected':''}}>Kabupaten Pasuruan</option><!--Kabupaten Pasuruan-->
              <option value="Kabupaten Ponorogo" {{$val=="Kabupaten Ponorogo"?'selected':''}}>Kabupaten Ponorogo</option><!--Kabupaten Ponorogo-->
              <option value="Kabupaten Probolinggo" {{$val=="Kabupaten Probolinggo"?'selected':''}}>Kabupaten Probolinggo</option><!--Kabupaten Probolinggo-->
              <option value="Kabupaten Sampang" {{$val=="Kabupaten Sampang"?'selected':''}}>Kabupaten Sampang</option><!--Kabupaten Sampang-->
              <option value="Kabupaten Sidoarjo" {{$val=="Kabupaten Sidoarjo"?'selected':''}}>Kabupaten Sidoarjo</option><!--Kabupaten Sidoarjo-->
              <option value="Kabupaten Situbondo" {{$val=="Kabupaten Situbondo"?'selected':''}}>Kabupaten Situbondo</option><!--Kabupaten Situbondo-->
              <option value="Kabupaten Sumenep" {{$val=="Kabupaten Sumenep"?'selected':''}}>Kabupaten Sumenep</option><!--Kabupaten Sumenep-->
              <option value="Kabupaten Trenggalek" {{$val=="Kabupaten Trenggalek"?'selected':''}}>Kabupaten Trenggalek</option><!--Kabupaten Trenggalek-->
              <option value="Kabupaten Tuban" {{$val=="Kabupaten Tuban"?'selected':''}}>Kabupaten Tuban</option><!--Kabupaten Tuban-->
              <option value="Kabupaten Tulungagung" {{$val=="Kabupaten Tulungagung"?'selected':''}}>Kabupaten Tulungagung</option><!--Kabupaten Tulungagung-->
              <option value="Kota Batu" {{$val=="Kota Batu"?'selected':''}}>Kota Batu</option><!--Kota Batu-->
              <option value="Kota Blitar" {{$val=="Kota Blitar"?'selected':''}}>Kota Blitar</option><!--Kota Blitar-->
              <option value="Kota Kediri" {{$val=="Kota Kediri"?'selected':''}}>Kabupaten Kediri</option><!--Kota Kediri-->
              <option value="Kota Madiun" {{$val=="Kota Madiun"?'selected':''}}>Kota Madiun</option><!--Kota Madiun-->
              <option value="Kota Malang" {{$val=="Kota Malang"?'selected':''}}>Kota Malang</option><!--Kota Malang-->
              <option value="Kota Mojokerto" {{$val=="Kota Mojokerto"?'selected':''}}>Kota Mojokerto</option><!--Kota Mojokerto-->
              <option value="Kota Pasuruan" {{$val=="Kota Pasuruan"?'selected':''}}>Kota Pasuruan</option><!--Kota Pasuruan-->
              <option value="Kota Probolinggo" {{$val=="Kota Probolinggo"?'selected':''}}>Kota Probolinggo</option><!--Kota Probolinggo-->
              <option value="Kota Surabaya" {{$val=="Kota Surabaya"?'selected':''}}>Kota Surabaya</option><!--Kota Surabaya-->
            </select>
          </div>
          <div class="form-group form-label-group">
            <label for="iTelpSklh">No. Telepon Sekolah/Kampus</label>
            <input type="number" name="telp_sklh" class="form-control {{$errors->has('telp_sklh')?'is-invalid':''}}" value="{{old('telp_sklh',$sklh->telp_sklh)}}" id="iTelpSklh" placeholder="Nomor telepon sekolah/kampus">
            @if($errors->has('telp_sklh'))
            <span class="help-block">{{$errors->first('telp_sklh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <?php
              $val=old('akreditasi_sklh',$sklh->akreditasi_sklh);
            ?>
            <label for="iAkreditasiSklh">Jenis Akreditasi</label>
            <select class="form-control {{$errors->has('akreditasi_sklh')?'is-invalid':''}}" id="iAkreditasiSklh" name="akreditasi_sklh">
              <option value="c" {{$val=="c"?'selected':''}}>Baik (C)</option>
              <option value="b" {{$val=="b"?'selected':''}}>Baik Sekali (B)</option>
              <option value="a" {{$val=="a"?'selected':''}}>Unggul (A)</option>
            </select>
            @if($errors->has('akreditasi_sklh'))
            <span class="help-block">{{$errors->first('akreditasi_sklh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iNoAkreditasiSklh">No. Akreditasi Sekolah/Kampus</label>
            <input type="text" name="no_akreditasi_sklh" class="form-control {{$errors->has('no_akreditasi_sklh')?'is-invalid':''}}" value="{{old('no_akreditasi_sklh',$sklh->no_akreditasi_sklh)}}" id="iNoAkreditasiSklh" placeholder="Nomor akreditasi">
            @if($errors->has('no_akreditasi_sklh'))
            <span class="help-block">{{$errors->first('no_akreditasi_sklh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iFileSuratAkreditasi">File Surat Akreditasi (.jpg/.pdf, max. 10MB)</label><br>
            File saat ini : <a href="{{url('syst/storage/app/public/scan_surat_akreditasi_sklh/'.$sklh->scan_surat_akreditasi_sklh)}}">{{$sklh->scan_surat_akreditasi_sklh}}</a>
            <input type="file" name="scan_surat_akreditasi_sklh" class="form-control {{$errors->has('scan_surat_akreditasi_sklh')?'is-invalid':''}}" id="iFileSuratAkreditasi" placeholder="Masukkan lampiran">
            @if($errors->has('scan_surat_akreditasi_sklh'))
            <span class="help-block">{{$errors->first('scan_surat_akreditasi_sklh')}}</span>
            @endif
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title" style="font-size: 30px">Data Narahubung</h3>
        </div>
        <div class="box-body">
          <div class="form-group form-label-group">
            <label for="iNamaNarahubung">Nama</label>
            <input type="text" name="nama_narahubung" class="form-control {{$errors->has('nama_narahubung')?'is-invalid':''}}" value="{{old('nama_narahubung',$sklh->nama_narahubung)}}" id="iNamaNarahubung" placeholder="Masukkan nama narahubung disini">
            @if($errors->has('nama_narahubung'))
            <span class="help-block">{{$errors->first('nama_narahubung')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <?php
              $val=old('jenis_kelamin_narahubung',$sklh->jenis_kelamin_narahubung);
            ?>
            <label for="iJenisKelaminNarahubung">Jenis Kelamin</label>
            <select class="form-control {{$errors->has('jenis_kelamin_narahubung')?'is-invalid':''}}" id="iJenisKelaminNarahubung" name="jenis_kelamin_narahubung">
              <option value="pria" {{$val=="pria"?'selected':''}}>Pria</option>
              <option value="wanita" {{$val=="wanita"?'selected':''}}>Wanita</option>
            </select>
            @if($errors->has('jenis_kelamin_narahubung'))
            <span class="help-block">{{$errors->first('jenis_kelamin_narahubung')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iJabatanNarahubung">Jabatan</label>
            <input type="text" name="jabatan_narahubung" class="form-control {{$errors->has('jabatan_narahubung')?'is-invalid':''}}" value="{{old('jabatan_narahubung',$sklh->jabatan_narahubung)}}" id="iJabatanNarahubung" placeholder="Masukkan jabatan narahubung disini">
            @if($errors->has('jabatan_narahubung'))
            <span class="help-block">{{$errors->first('jabatan_narahubung')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iNotelNarahubung">Telepon</label>
            <input type="number" name="handphone_narahubung" class="form-control {{$errors->has('handphone_narahubung')?'is-invalid':''}}" value="{{old('handphone_narahubung',$sklh->handphone_narahubung)}}" id="iNotelNarahubung" placeholder="Masukkan nomor handphone narahubung disini">
            @if($errors->has('handphone_narahubung'))
            <span class="help-block">{{$errors->first('handphone_narahubung')}}</span>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@endsection