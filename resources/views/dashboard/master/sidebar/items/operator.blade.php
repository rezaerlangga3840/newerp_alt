<li class="header"><span>DATA LEMBAGA PENDIDIKAN</span></li>
@if(\App\Models\master_sklh::where('id_user',Auth::user()->id)->count()==0)
<li><a href="{{route('user.addsklh')}}"><i class="fa fa-fw fa-plus"></i><span>Lengkapi data!</span></a></li>
@else
<li><a href="{{route('user.viewsklh')}}"><i class="fa fa-fw fa-eye"></i><span>Detail Data</span></a></li>
<li><a href="{{route('user.editsklh')}}"><i class="fa fa-fw fa-pencil"></i><span>Edit Data</span></a></li>
@endif
@if(Auth::user()->akun_diverifikasi=='sudah')
<li class="header"><span>DATA PERMOHONAN</span></li>
<li><a href="{{route('permohonan_magang.add')}}"><i class="fa fa-fw fa-plus"></i><span>Buat Permohonan</span></a></li><!--route('user.buatproposalmagang')-->
<li><a href="{{route('permohonan_magang.daftar')}}"><i class="fa fa-fw fa-envelope"></i><span>Daftar Permohonan</span></a></li><!--route('user.daftarpermohonankeluar')-->
<li><a href="#"><i class="fa fa-fw fa-inbox"></i><!--route('user.daftarpermohonanmasuk')-->
  <span>Daftar Diterima</span>
  <span class="pull-right-container">
    @if(\App\Models\master_mgng::join('master_sklh','master_sklh.id','master_mgng.id_sklh')->join('users','users.id','master_sklh.id_user')->where('id_user',Auth::user()->id)->where('status_surat_balasan','terkirim')->where('status_baca_surat_balasan','belum')->count()>0)
    <small class="label pull-right bg-green">{{\App\Models\master_mgng::join('master_sklh','master_sklh.id','master_mgng.id_sklh')->join('users','users.id','master_sklh.id_user')->where('id_user',Auth::user()->id)->where('status_surat_balasan','terkirim')->where('status_baca_surat_balasan','belum')->count()}}</small>
    @endif

    @if(\App\Models\master_mgng::join('master_sklh','master_sklh.id','master_mgng.id_sklh')->join('users','users.id','master_sklh.id_user')->where('id_user',Auth::user()->id)->where('status_surat_balasan','terkirim')->where('status_baca_surat_balasan','belumbacaupdate')->count()>0)
    <small class="label pull-right bg-red">{{\App\Models\master_mgng::join('master_sklh','master_sklh.id','master_mgng.id_sklh')->join('users','users.id','master_sklh.id_user')->where('id_user',Auth::user()->id)->where('status_surat_balasan','terkirim')->where('status_baca_surat_balasan','belumbacaupdate')->count()}}</small>
    @endif
  </span>
  </a>
</li>
<li><a href="#"><i class="fa fa-fw fa-file"></i><span>Daftar Laporan</span></a></li><!--route('user.daftarlaporan')-->
@endif