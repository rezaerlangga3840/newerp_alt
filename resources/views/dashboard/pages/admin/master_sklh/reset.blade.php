<form data-endpoint="{{route('master_sklh.resetting',['id'=>$sk->id])}}" method="POST" class="ajax-form">
  <div class="modal modal-primary fade" id="reset_{{$sk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Reset Password</h4>
        </div>
        <div class="modal-body">
          @csrf
          {{method_field('PUT')}}
          <p>Ingin melakukan reset password untuk lembaga pendidikan ini?</p>
          <div class="form-group">
            <input type="hidden" name="id" value="{{$sk->id}}">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary" onclick="submitForm(this)">OK</button>
        </div>
      </div>
    </div>
  </div>
</form>