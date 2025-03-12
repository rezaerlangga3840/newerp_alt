<form data-endpoint="{{route('master_sklh.verification',['id'=>$sk->id])}}" method="POST" class="ajax-form">
  <div class="modal modal-success fade" id="verify_{{$sk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Verifikasi Lembaga Pendidikan</h4>
        </div>
        <div class="modal-body">
          @csrf
          {{method_field('PUT')}}
          <p>Yakin ingin memverifikasi lembaga pendidikan ini?</p>
          <div class="form-group">
            <input type="hidden" name="id" value="{{$sk->id}}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
          <button type="button" onclick="submitForm(this)" class="btn btn-success">OK</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal modal-danger fade" id="suspend_{{$sk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Blokir Lembaga Pendidikan</h4>
        </div>
        <div class="modal-body">
          @csrf
          {{method_field('PUT')}}
          <p>Yakin ingin blokir lembaga pendidikan ini?</p>
          <div class="form-group">
            <input type="hidden" name="id" value="{{$sk->id}}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <button type="button" onclick="submitForm(this)" class="btn btn-danger">OK</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal modal-primary fade" id="unlock_{{$sk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Buka Blokir Lembaga Pendidikan</h4>
        </div>
        <div class="modal-body">
          @csrf
          {{method_field('PUT')}}
          <p>Yakin ingin buka blokir lembaga pendidikan ini?</p>
          <div class="form-group">
            <input type="hidden" name="id" value="{{$sk->id}}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
          <button type="button" onclick="submitForm(this)" class="btn btn-primary">OK</button>
        </div>
      </div>
    </div>
  </div>
</form>