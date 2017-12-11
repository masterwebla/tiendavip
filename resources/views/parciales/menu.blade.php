<div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
	<div class="container">
		<nav id="mainMenu" class="main-menu mega-menu">
			<ul class="main-menu nav nav-pills">
				<li><a href="/"><i class="fa fa-home"></i></a></li>
				
				<!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Acceder</a></li>
                    <li><a href="{{ route('register') }}">Registrarse</a></li>
                @else
	                <li><a href="{{ route('perfiles.index') }}">Perfiles</a></li>
					<li><a href="{{ route('categorias.index') }}">Categorias</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
			</ul>
		</nav>
	</div>
</div>