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
	        	<li class="nav-item active"><a href="{{route('inicio')}}" class="nav-link">Inicio</a></li>
	        	<li class="nav-item "><a href="{{route('nosotros')}}" class="nav-link">Nosotros</a></li>
	        	<li class="nav-item"><a href="{{route('menu_p')}}" class="nav-link">Menu</a></li>
	        	<li class="nav-item"><a href="{{route('promocion_p')}}" class="nav-link">Promociones</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
@endsection

@section('contenido')
<section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(assets/pizzeria/images/inicio1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
                <span class="subheading">Edu's Pizzeria</span>
              <h1 class="mb-4">La Mejor Pizza a la Piedra</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(assets/pizzeria/images/inicio2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
                <span class="subheading">Edu's Pizzeria</span>
              <h1 class="mb-4">Producto Ariqueño</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(assets/pizzeria/images/inicio3.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-12 col-sm-12 text-center ftco-animate">
                <span class="subheading">Edu's Pizzeria</span>
              <h1 class="mb-4">Ingredientes frescos</h1>
            </div>

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

		<section class="ftco-section bg-light">
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

		<section class="ftco-section">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Especiales</span>
            <h2 class="mb-4">Menú</h2>
          </div>
        </div>
        <div class="row no-gutters d-flex align-items-stretch">
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(assets/pizzeria/images/barbacoa.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Barbacoa</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$5200</span>
		                  <span class="price">$9200</span>
		                  <span class="price">$11600</span>
		                </div>
		              </div>
		              <p><span>Salsa de Tomate</span>, <span>Queso</span>, <span>Carne</span>, <span>Pollo</span>, <span>Pimentón</span>, <span>Cebolla</span>, <span>SalsaBBQ</span></p>
		              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Burguer</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$5900</span>
		                  <span class="price">$8800</span>
		                  <span class="price">$11400</span>
		                </div>
		              </div>
		              <p><span>Salsa de Tomate</span>, <span>Queso</span>, <span>Cebolla Morada</span>, <span>Hamburguesa</span>, <span>Queso Cheddar</span>, <span>Pepinillo</span>, <span>Aceituna</span></p>
		              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(images/breakfast-3.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Capricho del Chef</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$6100</span>
		                  <span class="price">$9200</span>
		                  <span class="price">$11600</span>
		                </div>
		              </div>
		              <p><span>Salsa de Tomate</span>, <span>Champiñon</span>, <span>Queso</span>, <span>Choricillo</span>, <span>Tomate Cherry</span>, <span>Ingrediente a Elección</span></p>
		              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(images/breakfast-5.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Pizza Edu's</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$6100</span>
		                  <span class="price">$9200</span>
		                  <span class="price">$11900</span>
		                </div>
		              </div>
		              <p><span>Salsa de Tomate</span>, <span>Champiñon</span>, <span>Queso</span>, <span>Tocino</span>, <span>Chorizo Español</span>, <span>Pollo</span>, <span>Cebolla</span>, <span>Aceituna</span></p>
		              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
	              </div>
              </div>
            </div>
        	</div>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/breakfast-6.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Pizzaiolo</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$6100</span>
		                  <span class="price">$9300</span>
		                  <span class="price">$11600</span>
		                </div>
		              </div>
		              <p><span>Salsa de Tomate</span>, <span>Queso</span>, <span>Cebolla Morada</span>, <span>Carne</span>, <span>Huevo</span>, <span>Papas Hilo</span>, <span>Aceituna</span></p>
		              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
	              </div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3>Camaron</h3>
		                </div>
		                <div class="one-forth">
		                  <span class="price">$6300</span>
		                  <span class="price">$9200</span>
		                  <span class="price">$11800</span>
		                </div>
		              </div>
		              <p><span>Salsa de Tomate</span>, <span>Queso</span>, <span>Champiñón</span>, <span>Camarón</span>, <span>Aceituna</span></p>
		              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
	              </div>
              </div>
            </div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Medios de Pago</span>
            <h2 class="mb-4">Presencial y Delivery</h2>
          </div>
        </div>		
					<div class="row justify-content-center mb-5 pb-2">
							<img src="assets/pizzeria/images/medios-pago.jpg" class="img-fluid" alt="Responsive image">
							<div class="text pt-4">
								<!-- <p>A small river named Duden flows by their place and supplies</p> -->
							</div>
						
					</div>
				
			</div>
		</section>

@endsection