<form method="POST" class="ajax-form" data-endpoint="{{route('permohonan_magang.delete',['id' => $proposal_masuk->id])}}">
  <div class="modal modal-danger fade" id="delete_{{$proposal_masuk->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus permohonan</h4>
        </div>
        <div class="modal-body">
          <p>Yakin ingin menghapus permohonan ini?</p>
          @csrf
          {{method_field('DELETE')}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-danger" onclick="submitForm(this)">OK</button>
        </div>
      </div>
    </div>
  </div>
</form>