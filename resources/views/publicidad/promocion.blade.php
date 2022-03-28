@extends("theme.pizzeria.layout")

@section('titulo')
Inicio
@endsection

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Edu's Pizzeria</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="{{route('inicio')}}" class="nav-link">Inicio</a></li>
	        	<li class="nav-item "><a href="{{route('nosotros')}}" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item"><a href="{{route('menu_p')}}" class="nav-link">Menu</a></li>
	        	<li class="nav-item active"><a href="{{route('promocion_p')}}" class="nav-link">Promociones</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
@endsection

@section('contenido')
<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/pizzeria/images/promociones.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Promociones</h1>
          </div>

        </div>
      </div>
  </section>

<section class="ftco-section">
			<div class="container">
        			@foreach ($datas as $data)
					<div class="row">

	              				<div class="col-md-9 offset-md-2">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(storage/imagenes/promociones/{{$data->foto}});"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>{{$data->titulo}}</h3>
							                </div>
							                <div class="one-forth">
							                </div>
							              </div>
							              <p><span>{{$data->descripcion}}</span></p>
							              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        </div>
					 @endforeach
				
			</div>
</section>




@endsection