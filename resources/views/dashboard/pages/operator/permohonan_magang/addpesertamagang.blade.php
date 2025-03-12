<form class="ajax-form" data-endpoint="{{route('permohonan_magang.savepesertamagang',['id'=>$proposal_masuk->id])}}" enctype="multipart/form-data" method="POST">
  <div class="modal modal-success fade" id="addPesertaMagang_{{$proposal_masuk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Peserta Magang Baru</h4>
        </div>
        <div class="modal-body">
          @csrf
          <div class="form-group">
            <input type="hidden" name="id" value="{{$proposal_masuk->id}}">
          </div>
          <div class="form-group form-label-group">
            <label for="iNamaPeserta">Nama Peserta</label>
            <input type="text" name="nama_peserta" class="form-control {{$errors->has('nama_peserta')?'is-invalid':''}}" value="{{old('nama_peserta')}}" id="iNamaPeserta" placeholder="contoh : Hyuuga Uzuki" required>
            @if($errors->has('nama_peserta'))
            <span class="help-block">{{$errors->first('nama_peserta')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iSifatNotaDinas">Jenis kelamin</label>
            <select class="form-control {{$errors->has('jenis_kelamin')?'is-invalid':''}}" id="iSifatNotaDinas" name="jenis_kelamin">
              <option value="pria">Pria</option>
              <option value="wanita">Wanita</option>
            </select>
            @if($errors->has('jenis_kelamin'))
            <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iNikPeserta">NIK Peserta</label>
            <input type="number" name="nik_peserta" class="form-control {{$errors->has('nik_peserta')?'is-invalid':''}}" value="{{old('nik_peserta')}}" id="iNikPeserta" placeholder="contoh : 0123456789123456" required>
            @if($errors->has('nik_peserta'))
            <span class="help-block">{{$errors->first('nik_peserta')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iNisPeserta">NIS/NIM Peserta</label>
            <input type="text" name="nis_peserta" class="form-control {{$errors->has('nis_peserta')?'is-invalid':''}}" value="{{old('nis_peserta')}}" id="iNisPeserta" placeholder="contoh : 1234567891" required>
            @if($errors->has('nis_peserta'))
            <span class="help-block">{{$errors->first('nis_peserta')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iProgramStudi">Program Studi</label>
            <input type="text" name="program_studi" class="form-control {{$errors->has('program_studi')?'is-invalid':''}}" value="{{old('program_studi')}}" id="iProgramStudi" placeholder="contoh : Teknik Mesin" required>
            @if($errors->has('program_studi'))
            <span class="help-block">{{$errors->first('program_studi')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iNomorHandphone">Nomor Handphone</label>
            <input type="number" name="no_handphone_peserta" class="form-control {{$errors->has('no_handphone_peserta')?'is-invalid':''}}" value="{{old('no_handphone_peserta')}}" id="iNomorHandphone" placeholder="contoh : 0812345678910" required>
            @if($errors->has('no_handphone_peserta'))
            <span class="help-block">{{$errors->first('no_handphone_peserta')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iEmailPeserta">Email Peserta</label>
            <input type="email" name="email_peserta" class="form-control {{$errors->has('email_peserta')?'is-invalid':''}}" value="{{old('email_peserta')}}" id="iEmailPeserta" placeholder="contoh : 0812345678910" required>
            @if($errors->has('email_peserta'))
            <span class="help-block">{{$errors->first('email_peserta')}}</span>
            @endif
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">OK</button>
        </div>
      </div>
    </div>
  </div>
</form>