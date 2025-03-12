@extends('dashboard.master.main')
@section('title', 'Lengkapi data!')
@section('pageheadertitle')
 Lengkapi data!
 <small></small>
@endsection
@section('breadcrumb')
<li class="active"><a><i class="fa fa-fw fa-envelope"></i> Lengkapi data!</a></li>
@endsection
@section('content')
<form role="form" method="post" enctype="multipart/form-data" action="{{route('user.savesklh')}}">
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
        <div class="box-header with-border">
          <h3 class="box-title" style="font-size: 30px">Data Lembaga Pendidikan</h3>
        </div>
        <div class="box-body">
          <div class="form-group form-label-group">
            <label for="iJenisSklh">Jenis</label>
            <select class="form-control {{$errors->has('jenis_sklh')?'is-invalid':''}}" id="iJenisSklh" name="jenis_sklh">
              <option value="sma">SMA/SMK/Madrasah Aliyah</option>
              <option value="pgt">Perguruan Tinggi</option>
              <option value="lpd">Lembaga Pendidikan</option>
              <option value="upt">UPT BLK Disnaker Prov. Jatim</option>
            </select>
            @if($errors->has('jenis_sklh'))
            <span class="help-block">{{$errors->first('jenis_sklh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iAlamatSklh">Alamat Lembaga Pendidikan</label>
            <input type="text" name="alamat_sklh" class="form-control {{$errors->has('alamat_sklh')?'is-invalid':''}}" value="{{old('alamat_sklh')}}" id="iAlamatSklh" placeholder="Apabila diluar wilayah Jawa Timur, cukup diisi nama kabupaten/kota dan provinsi" required>
            @if($errors->has('alamat_sklh'))
            <span class="help-block">{{$errors->first('alamat_sklh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iKabKoSklh">Kabupaten/Kota</label>
            <select class="form-control {{$errors->has('kabko_sklh')?'is-invalid':''}}" id="iKabKoSklh" name="kabko_sklh">
              <option value="provinsilainnya">Provinsi lainnya</option>
              <option value="Kabupaten Bangkalan">Kabupaten Bangkalan</option><!--Kabupaten Bangkalan-->
              <option value="Kabupaten Banyuwangi">Kabupaten Banyuwangi</option><!--Kabupaten Banyuwangi-->
              <option value="Kabupaten Blitar">Kabupaten Blitar</option><!--Kabupaten Blitar-->
              <option value="Kabupaten Bojonegoro">Kabupaten Bojonegoro</option><!--Kabupaten Bojonegoro-->
              <option value="Kabupaten Bondowoso">Kabupaten Bondowoso</option><!--Kabupaten Bondowoso-->
              <option value="Kabupaten Gresik">Kabupaten Gresik</option><!--Kabupaten Gresik-->
              <option value="Kabupaten Jember">Kabupaten Jember</option><!--Kabupaten Jember-->
              <option value="Kabupaten Jombang">Kabupaten Jombang</option><!--Kabupaten Jombang-->
              <option value="Kabupaten Kediri">Kabupaten Kediri</option><!--Kabupaten Kediri-->
              <option value="Kabupaten Lamongan">Kabupaten Lamongan</option><!--Kabupaten Lamongan-->
              <option value="Kabupaten Lumajang">Kabupaten Lumajang</option><!--Kabupaten Lumajang-->
              <option value="Kabupaten Madiun">Kabupaten Madiun</option><!--Kabupaten Madiun-->
              <option value="Kabupaten Magetan">Kabupaten Magetan</option><!--Kabupaten Magetan-->
              <option value="Kabupaten Malang">Kabupaten Malang</option><!--Kabupaten Malang-->
              <option value="Kabupaten Mojokerto">Kabupaten Mojokerto</option><!--Kabupaten Mojokerto-->
              <option value="Kabupaten Nganjuk">Kabupaten Nganjuk</option><!--Kabupaten Nganjuk-->
              <option value="Kabupaten Ngawi">Kabupaten Ngawi</option><!--Kabupaten Ngawi-->
              <option value="Kabupaten Pacitan">Kabupaten Pacitan</option><!--Kabupaten Pacitan-->
              <option value="Kabupaten Pamekasan">Kabupaten Pamekasan</option><!--Kabupaten Pamekasan-->
              <option value="Kabupaten Pasuruan">Kabupaten Pasuruan</option><!--Kabupaten Pasuruan-->
              <option value="Kabupaten Ponorogo">Kabupaten Ponorogo</option><!--Kabupaten Ponorogo-->
              <option value="Kabupaten Probolinggo">Kabupaten Probolinggo</option><!--Kabupaten Probolinggo-->
              <option value="Kabupaten Sampang">Kabupaten Sampang</option><!--Kabupaten Sampang-->
              <option value="Kabupaten Sidoarjo">Kabupaten Sidoarjo</option><!--Kabupaten Sidoarjo-->
              <option value="Kabupaten Situbondo">Kabupaten Situbondo</option><!--Kabupaten Situbondo-->
              <option value="Kabupaten Sumenep">Kabupaten Sumenep</option><!--Kabupaten Sumenep-->
              <option value="Kabupaten Trenggalek">Kabupaten Trenggalek</option><!--Kabupaten Trenggalek-->
              <option value="Kabupaten Tuban">Kabupaten Tuban</option><!--Kabupaten Tuban-->
              <option value="Kabupaten Tulungagung">Kabupaten Tulungagung</option><!--Kabupaten Tulungagung-->
              <option value="Kota Batu">Kota Batu</option><!--Kota Batu-->
              <option value="Kota Blitar">Kota Blitar</option><!--Kota Blitar-->
              <option value="Kota Kediri">Kabupaten Kediri</option><!--Kota Kediri-->
              <option value="Kota Madiun">Kota Madiun</option><!--Kota Madiun-->
              <option value="Kota Malang">Kota Malang</option><!--Kota Malang-->
              <option value="Kota Mojokerto">Kota Mojokerto</option><!--Kota Mojokerto-->
              <option value="Kota Pasuruan">Kota Pasuruan</option><!--Kota Pasuruan-->
              <option value="Kota Probolinggo">Kota Probolinggo</option><!--Kota Probolinggo-->
              <option value="Kota Surabaya">Kota Surabaya</option><!--Kota Surabaya-->
            </select>
          </div>
          <div class="form-group form-label-group">
            <label for="iTelpSklh">No. Telepon Lembaga Pendidikan</label>
            <input type="number" name="telp_sklh" class="form-control {{$errors->has('telp_sklh')?'is-invalid':''}}" value="{{old('telp_sklh')}}" id="iTelpSklh" placeholder="Nomor telepon Lembaga Pendidikan">
            @if($errors->has('telp_sklh'))
            <span class="help-block">{{$errors->first('telp_sklh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iAkreditasiSklh">Jenis Akreditasi</label>
            <select class="form-control {{$errors->has('akreditasi_sklh')?'is-invalid':''}}" id="iAkreditasiSklh" name="akreditasi_sklh">
              <option value="a">Unggul (A)</option>
              <option value="b">Baik Sekali (B)</option>
              <option value="c">Baik (C)</option>
            </select>
            @if($errors->has('akreditasi_sklh'))
            <span class="help-block">{{$errors->first('akreditasi_sklh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iNoAkreditasiSklh">No. Akreditasi Lembaga Pendidikan</label>
            <input type="text" name="no_akreditasi_sklh" class="form-control {{$errors->has('no_akreditasi_sklh')?'is-invalid':''}}" value="{{old('no_akreditasi_sklh')}}" id="iNoAkreditasiSklh" placeholder="Nomor akreditasi">
            @if($errors->has('no_akreditasi_sklh'))
            <span class="help-block">{{$errors->first('no_akreditasi_sklh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iFileSuratAkreditasi">File Surat Akreditasi (.jpg/.pdf, max. 10MB)</label>
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
            <input type="text" name="nama_narahubung" class="form-control {{$errors->has('nama_narahubung')?'is-invalid':''}}" value="{{old('nama_narahubung')}}" id="iNamaNarahubung" placeholder="Masukkan nama narahubung disini">
            @if($errors->has('nama_narahubung'))
            <span class="help-block">{{$errors->first('nama_narahubung')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iJenisKelaminNarahubung">Jenis Kelamin</label>
            <select class="form-control {{$errors->has('jenis_kelamin_narahubung')?'is-invalid':''}}" id="iJenisKelaminNarahubung" name="jenis_kelamin_narahubung">
              <option value="pria">Pria</option>
              <option value="wanita">Wanita</option>
            </select>
            @if($errors->has('jenis_kelamin_narahubung'))
            <span class="help-block">{{$errors->first('jenis_kelamin_narahubung')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iJabatanNarahubung">Jabatan</label>
            <input type="text" name="jabatan_narahubung" class="form-control {{$errors->has('jabatan_narahubung')?'is-invalid':''}}" value="{{old('jabatan_narahubung')}}" id="iJabatanNarahubung" placeholder="Masukkan jabatan narahubung disini">
            @if($errors->has('jabatan_narahubung'))
            <span class="help-block">{{$errors->first('jabatan_narahubung')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iNotelNarahubung">Telepon</label>
            <input type="number" name="handphone_narahubung" class="form-control {{$errors->has('handphone_narahubung')?'is-invalid':''}}" value="{{old('handphone_narahubung')}}" id="iNotelNarahubung" placeholder="Masukkan nomor handphone narahubung disini">
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