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
	        	<li class="nav-item active"><a href="{{route('menu_p')}}" class="nav-link">Menu</a></li>
	        	<li class="nav-item"><a href="{{route('promocion_p')}}" class="nav-link">Promociones</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
@endsection

@section('contenido')

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/pizzeria/images/menus.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Menú</h1>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section">
	
    	<div class="container">
        <div class="ftco-search">
					<div class="row">
           <div class="col-md-12 nav-link-wrap">
	            <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Recomendacion del Chef</a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Las Aclamadas</a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Nuestras Tradiciones</a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Del Mar</a>

	              <a class="nav-link ftco-animate" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Vegetarianas</a>

	            </div>
	        </div>
	        	
	          <div class="col-md-12 tab-wrap">
	        	
	          	
	            <div class="tab-content" id="v-pills-tabContent">

					    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
					    @foreach ($productos as $producto)
					    @if($producto->category==="chef")
					              	<div class="row no-gutters d-flex align-items-stretch">
					              	
	
				        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
				        		
				        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
				        			
				              <div class="menu-img img" style="background-image: url(/imagenes/{{$producto->image}});"></div>
				              <div class="text d-flex align-items-center">
												<div>
					              	<div class="d-flex">
					              		
						                <div class="one-half">
						                  <h3>{{$producto->name}}</h3>
						                </div>
						                <div class="one-forth">
						                  <span class="price">{{$producto->priceS}}</span>
						                  <span class="price">{{$producto->priceM}}</span>
						                  <span class="price">{{$producto->priceL}}</span>
						                </div>
						              </div>
						              <p>
						              @foreach($prodings as $proding)
						              	@if($proding->prod_id == $producto->id)
						              		
						              		@foreach($ingredientes as $ingredient)
						              			@if($ingredient->id == $proding->ingred_id)
						              			<span>{{$ingredient->name}}</span>,
						              			@endif
						              		@endforeach
						              		
						              	@endif
						              @endforeach
						              </p>
						              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
					              </div>
				              </div>
				            </div>
				        	</div>
				        	
				        </div>
				        @endif
				        @endforeach
					    </div>


			              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
			            @foreach ($productos as $producto)
					    @if($producto->category==="aclamadas")
			              	<div class="row no-gutters d-flex align-items-stretch">
			              	
							        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
							        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
							              <div class="menu-img img" style="background-image: url(/imagenes/{{$producto->image}});"></div>
							              <div class="text d-flex align-items-center">
															<div>
								              	<div class="d-flex">
								              		
									                <div class="one-half">
									                  <h3>{{$producto->name}}</h3>
									                </div>
									                <div class="one-forth">
									                  <span class="price">{{$producto->priceS}}</span>
									                  <span class="price">{{$producto->priceM}}</span>
									                  <span class="price">{{$producto->priceL}}</span>
									                </div>
									              </div>
									                <p>
										              @foreach($prodings as $proding)
										              	@if($proding->prod_id == $producto->id)
										              		
										              		@foreach($ingredientes as $ingredient)
										              			@if($ingredient->id == $proding->ingred_id)
										              			<span>{{$ingredient->name}}</span>,
										              			@endif
										              		@endforeach
										              		
										              	@endif
										              @endforeach
										              </p>
									              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
								              </div>
							              </div>
							            </div>
							        	</div>
							        		
							    </div>
							       @endif
				       			 @endforeach
			              </div>


			               <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
			               	@foreach ($productos as $producto)
					    	@if($producto->category==="tradicional")
	              				<div class="row no-gutters d-flex align-items-stretch">
						        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
						        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
						              <div class="menu-img img order-md-last" style="background-image: url(/imagenes/{{$producto->image}});"></div>
						              <div class="text d-flex align-items-center">
														<div>
							              	<div class="d-flex">
								                <div class="one-half">
								                  <h3>{{$producto->name}}</h3>
								                </div>
								                <div class="one-forth">
								                  <span class="price">{{$producto->priceS}}</span>
									               <span class="price">{{$producto->priceM}}</span>
									               <span class="price">{{$producto->priceL}}</span>
								                </div>
								              </div>
								              <p>
										         @foreach($prodings as $proding)
										              	@if($proding->prod_id == $producto->id)
										              		
										              		@foreach($ingredientes as $ingredient)
										              			@if($ingredient->id == $proding->ingred_id)
										              			<span>{{$ingredient->name}}</span>,
										              			@endif
										              		@endforeach
										              		
										              	@endif
										         @endforeach
										        </p>
								              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
							              </div>
						              </div>
						            </div>
					        		</div>
					        	</div>
					        	  @endif
				       			 @endforeach
	              			</div>


				            <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
				            	@foreach ($productos as $producto)
					    	@if($producto->category==="mar")
				              	<div class="row no-gutters d-flex align-items-stretch">
				              		<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
								        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
								              <div class="menu-img img" style="background-image: url(/imagenes/{{$producto->image}});"></div>
								              <div class="text d-flex align-items-center">
																<div>
									              	<div class="d-flex">
										                <div class="one-half">
										                  <h3>{{$producto->name}}</h3>
										                </div>
										                <div class="one-forth">
										                  <span class="price">{{$producto->priceS}}</span>
									                  <span class="price">{{$producto->priceM}}</span>
									                  <span class="price">{{$producto->priceL}}</span>
										                </div>
										              </div>
										              <p>
										              @foreach($prodings as $proding)
										              	@if($proding->prod_id == $producto->id)
										              		
										              		@foreach($ingredientes as $ingredient)
										              			@if($ingredient->id == $proding->ingred_id)
										              			<span>{{$ingredient->name}}</span>,
										              			@endif
										              		@endforeach
										              		
										              	@endif
										              @endforeach
										              </p>
										              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
									              </div>
								              </div>
								            </div>
								        	</div> 	
								        </div>
								 @endif
				       			 @endforeach
				            </div>

				            <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-day-5-tab">
				            	@foreach ($productos as $producto)
					    	@if($producto->category==="vegeta")
	              			<div class="row no-gutters d-flex align-items-stretch">
	              				<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(/imagenes/{{$producto->image}});"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>4 Vegetales</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">{{$producto->priceS}}</span>
									          <span class="price">{{$producto->priceM}}</span>
									          <span class="price">{{$producto->priceL}}</span>
							                </div>
							              </div>
							              <p>
										     @foreach($prodings as $proding)
										              	@if($proding->prod_id == $producto->id)
										              		
										              		@foreach($ingredientes as $ingredient)
										              			@if($ingredient->id == $proding->ingred_id)
										              			<span>{{$ingredient->name}}</span>,
										              			@endif
										              		@endforeach
										              		
										              	@endif
										     @endforeach
										   </p>
							              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	
					        </div>
					         @endif
				       			 @endforeach
	              			</div>  
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
            <h2 class="mb-4">Bebidas</h2>
          </div>
        </div>		
					<div class="row no-gutters d-flex align-items-stretch">
	              				<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(assets/pizzeria/images/bebidas1.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Bebida de 1.5 Ltrs</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$1800</span>
							                </div>
							              </div>
							              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(assets/pizzeria/images/bebidas2.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Bebida de 500 CC</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$1000</span>
							                </div>
							              </div>
							              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(assets/pizzeria/images/te.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Té</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$600</span>
							                </div>
							              </div>
							              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(assets/pizzeria/images/cafe.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Café</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$600</span>
							                </div>
							              </div>
							              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>

					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(assets/pizzeria/images/jugo1.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Jugos Naturales</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$1800</span>
							                </div>
							              </div>
							              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(assets/pizzeria/images/jugo2.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Jugos Naturales con Leche</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$2200</span>
							                </div>
							              </div>
							              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	
					        </div>
				
			</div>
</section>

<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
            <h2 class="mb-4">Agregados a tu Pizza (C/U)</h2>
          </div>
        </div>		
					<div class="row no-gutters d-flex align-items-stretch">
	              				<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(assets/pizzeria/images/carne.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Carne</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$900</span>
							                  <span class="price">$1100</span>
							                  <span class="price">$1400</span>
							                </div>
							              </div>
							              <p><span>Tocino</span>, <span>Salame</span>, <span>Chorizo español</span>, <span>Pollo</span>, <span>Choricillo</span>, <span>Carne</span>, <span>Jamón</span>, <span>Queso</span>, <span>Crema</span>, <span>Anchoa</span></p>
							              <p><a href="https://www.facebook.com/Edus.Pizzeria/" class="btn btn-primary">¡Pide ya!</a></p>
						              </div>
					              </div>
					            </div>
					        	</div>
					        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
					        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
					              <div class="menu-img img" style="background-image: url(assets/pizzeria/images/vegetales.jpg);"></div>
					              <div class="text d-flex align-items-center">
													<div>
						              	<div class="d-flex">
							                <div class="one-half">
							                  <h3>Vegetales</h3>
							                </div>
							                <div class="one-forth">
							                  <span class="price">$800</span>
							                  <span class="price">$1100</span>
							                  <span class="price">$1300</span>
							                </div>
							              </div>
							              <p><span>Palta</span>, <span>Palmito</span>, <span>Alcachofa</span>, <span>Cebolla</span>, <span>Choclo</span>, <span>Piña</span>, <span>Champiñon</span>, <span>Tomate</span>, <span>Cebolla morada</span>, <span>Pimentón</span>, <span>Tomate cherry</span></p>
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