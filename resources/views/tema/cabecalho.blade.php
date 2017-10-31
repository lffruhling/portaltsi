<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini"><b>PortalTSI</b></span>
        <span class="logo-lg"><b>PortalTSI</b></span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Menu</span>
        </a>

        <div class="navbar-custom-menu">    
            <ul class="nav navbar-nav">
                
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="#" class="user-image" alt="{{ Auth::user()->nome }}">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
          
                    <ul class="dropdown-menu">
                         <li class="user-header">            
                            <img src="#" class="img-circle" alt="{{ Auth::user()->name }}">
                            <p>
                                {{ Auth::user()->name }}
                                <small>Usuário desde: {{ Auth::user()->created_at }}</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                                            Sair
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </li>
                        
                        
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>