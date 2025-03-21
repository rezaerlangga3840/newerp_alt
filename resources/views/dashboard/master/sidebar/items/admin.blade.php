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