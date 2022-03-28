@extends("theme.pizzeria.layout")

@section('titulo')
Inicio
@endsection

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Edu's Pizzeria</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Nosotros
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="{{route('inicio')}}" class="nav-link">Inicio</a></li>
	        	<li class="nav-item active"><a href="{{route('nosotros')}}" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item"><a href="{{route('menu_p')}}" class="nav-link">Menu</a></li>
	        	<li class="nav-item"><a href="{{route('promocion_p')}}" class="nav-link">Promociones</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
@endsection

@section('contenido')

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/pizzeria/images/nosotros.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Acerca de Nosotros</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-4" style="background-image: url(assets/pizzeria/images/wall-edu.png);"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">Nosotros</span>
	            <h2 class="mb-4">Edu's Pizzeria</h2>
	          </div>
	          <p>Con mas de 10 años de experiencia, permítenos deleitarte con las mejores Pizzas  de la ciudad de Arica.
				No lo decimos nosotros, nuestros exigentes clientes avalan nuestro servicio.</p>
						<pc class="time">
							<span>Lunes - Sabado <strong>18:00 - 01:00</strong></span>
							<span><a href="#">+569 74057355</a></span>
						</p>
					</div>
				</div>
			</div>
	</section>

	 <section class="ftco-section ftco-wrap-about bg-light">
			<div class="container">
					<div class="row no-gutters justify-content-center mb-5 pb-2">
		          <div class="col-md-12 text-center heading-section ftco-animate">
		            <h2 class="mb-4">¿Donde estamos?</h2>
		          </div>
		        </div>
				<div class="row">
					<div class="col-md-7 d-flex">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.087106441957!2d-70.32285478558163!3d-18.47971318743279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915aa993aee4e263%3A0xa8f3c74b7ec194a0!2sEdu&#39;s%20Pizzer%C3%ADa!5e0!3m2!1ses-419!2scl!4v1575510271515!5m2!1ses-419!2scl" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	            <h2 class="mb-4">En la calle Colon 132, cerca de la Catedral de San Marcos </h2>
	          </div>
					</div>
				</div>
			</div>
	</section>

	<section class="ftco-section ">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Servicios</span>
            <h2 class="mb-4">Varios Servicios</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-cake"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Servicio en Restaurante</h3>
                <p>Siempre felices y dispuestos de atender a nuestros clientes en nuestro local.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Servicio a Domicilio</h3>
                <p>Haremos llegar nuestras deliciosas pizzas en cualquier parte de Arica, a través de Facebook, por telefono o la app "Pedidos Ya".Con cualquier medio de pago, incluído Sodexo para los universitarios.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-tray"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Pedidios Especiales</h3>
                <p>¿Necesitas de nuestros servicios en algún evento? ¿Reuniones con tus amigos o familia? ¿Arrendar el Local para alguna ocasión especial? ¡No dudes en llamarnos!</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

@endsection