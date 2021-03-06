 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) 
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

-->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Menu Principal</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ route('usuarios.index') }}"><i class="fa fa-user"></i> <span>Usuários</span></a></li>

        <li><a href="{{ route('categorias.index') }}"><i class="fa fa-bars"></i> <span>Categorias</span></a></li>

        <li><a href="{{ route('noticias.index') }}"><i class="fa fa-edit"></i> <span>Notícias</span></a></li>

        <li><a href="{{ route('eventos.index') }}"><i class="fa fa-calendar"></i> <span>Eventos</span></a></li>

        <li><a href="/sobre"><i class="fa fa-info-circle"></i> <span>Sobre</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>