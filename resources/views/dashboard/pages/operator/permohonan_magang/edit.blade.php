<form method="POST" class="ajax-form" data-endpoint="{{route('permohonan_magang.update',['id' => $proposal_masuk->id])}}">
  <div class="modal modal-danger fade" id="editProposalMasuk_{{$proposal_masuk->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus peserta</h4>
        </div>
        <div class="modal-body">
          @csrf
          {{method_field('PUT')}}
          <div class="form-group">
            <input type="hidden" name="id" value="{{$proposal_masuk->id}}">
          </div>
          <div class="form-group form-label-group">
            <label for="iNomorSuratPermintaan">Nomor Surat</label>
            <input type="text" name="nomor_surat_permintaan" class="form-control {{$errors->has('nomor_surat_permintaan')?'is-invalid':''}}" value="{{old('nomor_surat_permintaan',$proposal_masuk->nomor_surat_permintaan)}}" id="iNomorSuratPermintaan" placeholder="Masukkan nomor surat disini">
            @if($errors->has('nomor_surat_permintaan'))
            <span class="help-block">{{$errors->first('nomor_surat_permintaan')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iTanggalSuratPermintaan">Tanggal surat</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" name="tanggal_surat_permintaan" class="form-control {{$errors->has('tanggal_surat_permintaan')?'is-invalid':''}}" value="{{old('tanggal_surat_permintaan',$proposal_masuk->tanggal_surat_permintaan)}}" id="iTanggalSuratPermintaan" required>
              @if($errors->has('tanggal_surat_permintaan'))
              <span class="help-block">{{$errors->first('tanggal_surat_permintaan')}}</span>
              @endif
            </div>
          </div>
          <div class="form-group form-label-group">
            <label for="iPerihalSuratPermintaan">Perihal</label>
            <input type="text" name="perihal_surat_permintaan" class="form-control {{$errors->has('perihal_surat_permintaan')?'is-invalid':''}}" value="{{old('perihal_surat_permintaan',$proposal_masuk->perihal_surat_permintaan)}}" id="iPerihalSuratPermintaan" placeholder="Masukkan perihal disini">
            @if($errors->has('perihal_surat_permintaan'))
            <span class="help-block">{{$errors->first('perihal_surat_permintaan')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iDitandatanganiOleh">Ditandatangani oleh</label>
            <input type="text" name="ditandatangani_oleh" class="form-control {{$errors->has('ditandatangani_oleh')?'is-invalid':''}}" value="{{old('ditandatangani_oleh',$proposal_masuk->ditandatangani_oleh)}}" id="iDitandatanganiOleh" placeholder="Catatan : diisi jabatan, bukan nama orangya">
            @if($errors->has('ditandatangani_oleh'))
            <span class="help-block">{{$errors->first('ditandatangani_oleh')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iScanSuratPermintaan">Scan surat permintaan (format : .jpg, .pdf, max. 10MB)</label>
            <br>File saat ini : {{$proposal_masuk->scan_surat_permintaan}}</br>
            <input type="file" name="scan_surat_permintaan" class="form-control {{$errors->has('scan_surat_permintaan')?'is-invalid':''}}" id="iScanSuratPermintaan" placeholder="Masukkan lampiran">
            @if($errors->has('scan_surat_permintaan'))
            <span class="help-block">{{$errors->first('scan_surat_permintaan')}}</span>
            @endif
          </div>
          <div class="form-group form-label-group">
            <label for="iScanSuratProposalMagang">Scan proposal magang (format : .jpg, .pdf, max. 10MB)</label>
            <br>File saat ini : {{$proposal_masuk->scan_proposal_magang}}</br>
            <input type="file" name="scan_proposal_magang" class="form-control {{$errors->has('scan_proposal_magang')?'is-invalid':''}}" id="iScanSuratProposalMagang" placeholder="Masukkan lampiran">
            @if($errors->has('scan_proposal_magang'))
            <span class="help-block">{{$errors->first('scan_proposal_magang')}}</span>
            @endif
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger" onclick="submitForm(this)">OK</button>
        </div>
      </div>
    </div>
  </div>
</form>