<header class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">
	  	<img src="{{asset('img/ICAPVAL.png')}}" width="60" height="60" alt=""> Laravel ICAPEVAL.
	</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{asset('/Usuario')}}">Inicio <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Usuarios
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="{{asset('/Usuario/Form')}}">Crear Nuevo</a>
	          <a class="dropdown-item" href="{{asset('/Usuario/List')}}">Mostrar todos</a>

	        </div>
	      </li>
	      
	    </ul>
	    
	  </div>
	</nav>
</header>