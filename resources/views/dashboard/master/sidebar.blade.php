<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          @if(Auth::user()->privilege=='operator')
          <img src="{{url('admin_assets/img/kemendikbud.png')}}" alt="User Image">
          @else
          <img src="{{url('admin_assets/img/jatim.png')}}" alt="User Image">
          @endif
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        @if(Auth::user()->privilege=='operator')<!--cek login privilege operator atau admin-->
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
        @endif<!--verifikasi-->
        @else
        <li><a href="{{route('master_sklh')}}"><i class="fa fa-fw fa-university"></i><!---->
          <span>Lembaga Pendidikan</span>
          <span class="pull-right-container">
            @if(\App\Models\master_sklh::join('users','users.id','master_sklh.id_user')->where('akun_diverifikasi','belum')->count()>0)
            <small class="label pull-right bg-red">{{\App\Models\master_sklh::join('users','users.id','master_sklh.id_user')->where('akun_diverifikasi','belum')->count()}}</small>
            @endif
          </span>
          </a>
        </li>
        <li><a href="#"><i class="fa fa-fw fa-inbox"></i><!---->
          <span>Permohonan Magang</span>
          <span class="pull-right-container">
            @if(\App\Models\master_mgng::where('status_surat_permintaan','terkirim')->where('status_baca_surat_permintaan','belum')->count()>0)
            <small class="label pull-right bg-green">{{\App\Models\master_mgng::where('status_surat_permintaan','terkirim')->where('status_baca_surat_permintaan','belum')->count()}}</small>
            @endif
            @if(\App\Models\master_mgng::where('status_surat_permintaan','terkirim')->whereNull('nomor_surat_balasan')->count()>0)
            <small class="label pull-right bg-red">{{\App\Models\master_mgng::where('status_surat_permintaan','terkirim')->whereNull('nomor_surat_balasan')->count()}}</small>
            @endif
          </span>
          </a>
        </li>
        <li><a href="#"><i class="fa fa-fw fa-paper-plane"></i><span>Balasan Magang</span></a></li><!--route('proposal_keluar')-->
        <li><a href="#"><i class="fa fa-fw fa-book"></i><span>Nota Dinas Magang</span></a></li><!--route('nota_dnas')-->
        <li><a href="#"><i class="fa fa-fw fa-certificate"></i><span>Laporan & Sertifikat</span></a></li><!--route('proposal_final')-->
        <li><a href="#"><i class="fa fa-fw fa-users"></i><span>Kelola Penilai</span></a></li><!--route('master_petugas')-->
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>