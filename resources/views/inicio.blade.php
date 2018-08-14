<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/grid.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">

    		@guest
    	    <form method="POST" action="{{ route('login') }}" class="form-inline my-2 my-lg-0" aria-label="{{ __('Login') }}">
            @csrf
                <input id="email" type="email" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mr-sm-2" name="email" value="{{ old('email') }}" required autofocus>
	                @if ($errors->has('email'))
    	                <span class="invalid-feedback" role="alert">
        	                <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif    			
                <input id="password" type="password" placeholder="Contrase&ntilde;a" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} mr-sm-2" name="password" required>
	                @if ($errors->has('password'))
    	                <span class="invalid-feedback" role="alert">
        	                <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif      			
      			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">{{ __('Login') }}</button>    
      			<a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Recuperar') }}</a>
      			<a class="nav-link" href="{{ url('register') }}">Registrarse</a>
		    </form>
		    @else
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span></a>
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            	    document.getElementById('logout-form').submit();">{{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
		    @endguest
		    
            <div class="content">
                <div class="title m-b-md">
                    <h1>Articulos</h1>
                </div>
 				<div class="row">
    				<div class="col-2 bg-info">Nombre</div>
    				<div class="col-2 bg-info">Seccion</div>
    				<div class="col-2 bg-info">Precio</div>
    			</div>	               
                <div>
                	@foreach($articulos as $val)
                	<div class="row">
                		<div class="col-2">{{ $val->nombre }}</div>
    					<div class="col-2">{{ $val->seccion }}</div>
    					<div class="col-2">{{ $val->precio }}</div>
    					<a href="https://comprar" class="nav-link">Comprar</a>
                	</div>	
                	@endforeach
                </div>

            </div>
        </div>
    </body>
</html>
