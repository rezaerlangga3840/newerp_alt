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
        @include('dashboard.master.sidebar.items.operator')
        <!--verifikasi-->
        @else
        @include('dashboard.master.sidebar.items.admin')
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>