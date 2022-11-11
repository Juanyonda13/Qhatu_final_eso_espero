@extends('Layouts.header')
@section('content')
    <div class="cuerpo_detalle col-12 d-flex 
                justify-content-center 
                pt-3 d-flex 
                flex-wrap">
          {{-- este es el fondo con el background-img --}}
          <div class="col-12 col-md-11  
                      font-deatila-craft 
                      p-2
                      ">
                {{-- este es el cuerpo donde  se pone el contenido --}}
                <section class="col-11  
                                d-flex 
                                flex-wrap">
                      {{-- este div contiene la informacion de la artesania y fotos con la compra --}}
                      <div class="col-12 d-flex flex-wrap row  mt-2">
                          <div class="col-6">
                                 {{-- esta es la carta que contiene la descripcion de la artesania foto del indigena y la cantidad de unidades --}}
                                 <div class="border rounded-2 shadow-lg p-3 mt-5">
                                        {{-- este div contiene la foto del indigena su nombre , calificacion y iconos --}}
                                        <div class="col-12 d-flex row p-0">
                                            {{-- foto de perfil --}}
                                            <div class="d-flex col-2 p-0 justify-content-center">
                                                @foreach ($artesania->Indigena as $foto)
                                                   <img src="{{$foto->foto}}" class=" rounded-circle" height="50px" width="50px" alt="">
                                                @endforeach 
                                            </div>
                                            {{-- nombre del indigena --}}
                                            <div class="col-5 p-0 d-flex align-items-center pb-3 text-break">
                                                @foreach ($artesania->Indigena as $nombre)
                                                  <p class="nombre">{{$nombre->nombres}}</p>
                                                @endforeach  
                                            </div>
                                            {{-- estrellas --}}
                                            <div class="col-3 d-flex flex-row align-items-center pb-2 gap-2 p-0 pb-4">
                                                <i class="bi bi-star-fill text-warning" style="font-size: 76%"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 76%"></i>
                                                <i class="bi bi-star-fill text-warning" style="font-size: 76%"></i>
                                                <i class="bi bi-star text-warning" style="font-size: 76%"></i>
                                                <i class="bi bi-star text-warning" style="font-size: 76%"></i>
                                            </div>
                                            {{-- redes sociales --}}
                                            <div class="col-2 d-flex flex-column p-0 pl-5">
                                                <a href="#" class="bi bi-instagram text-dark"></a>
                                                <a href="#" class="bi bi-twitter text-dark"></a>
                                                <a href="#" class="bi bi-facebook text-dark"></a>
                                            </div>
                                        </div>
                                         {{-- este div contiene el titulo y la descripcion del titulo --}}
                                        <div class="col-12  d-flex flex-column justify-content-center">
                                                <div class="col-12 justify-content-center d-flex text-break">
                                                    <h1>{{$artesania->nombre}}</h1>
                                                </div>
                                                <div class="d-flex justify-content-center text-break" style="height:40vh;">
                                                         <p>{{$artesania->descripcion}}</p>                         
                                                </div>
                                        </div>
                                        {{-- este div contiene las unidades disponibles --}}
                                        <div class="col-12 border-warning border  rounded-2 shadow-lg d-flex flex-wrap p-1">
                                            <div class="col-9 d-flex  justify-content-end text-break" style="font-size:5vh">
                                                <p class="cantidadd">Cantidad disponible.</p>
                                            </div>
                                            <div class="col-1 p-0 pt-2 d-flex ">
                                                <div class="w-100 d-flex">      
                                                    <p class="cantidad">{{$artesania->cantidad}}</p>
                                                </div>
                                            </div>

                                            <div class="col-1 d-flex align-items-end p-0">
                                                <p class="unidad">UND</p>
                                            </div>
                                        </div>
                                 </div>


                          </div>
                          {{-- este div contiene las imagenes de la artesanias   colores y cantidades a comprar --}}
                          <div class="col-6 mt-5 ">
                                <div class="col-12 d-flex justify-content-center fs-3 gap-2">
                                    <p>Añadir a Favoritos</p><i class="bi bi-bookmark-fill"></i>
                                </div>
                                <div id="carouselExampleControls" class="carousel slide mb-10" data-bs-ride="carousel" >
                                    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel px-5">
                                        <div class="carousel-inner">
                                            @foreach ($imagen as $img)
                                              <div class="carousel-item active px-5 ">
                                                <img src="{{$img->imagen}}" class="d-block w-50 rounded-4 m-auto"style="height: 30vh;width:10vw; " alt="...">
                                              </div> 
                                            @endforeach
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                          <span class="carousel-control-next-icon alert-dark text-dark" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                        </button>
                                      </div>
                                   </div>
                                </div>
                                <div  class="compra col-12  d-flex justify-content-evenly">
                                    <div class="col-12 d-flex justify-content-center ">
                                        <button type="button" class="botoncom">Comprar ahora</button>
                                    </div>
                                </div>

                                
                                <div  class="carrito col-12  d-flex justify-content-evenly">
                                    <div class="col-12 d-flex justify-content-center ">
                                        <button type="button" class="botoncar ">Agregar al carrito</button>
                                    </div>
                                </div>
                            </div>      
                    <div class="col-12 flex-column mt-5 mb-5">
                        <div class="col-12 d-flex p-0 ">
                            <div class="col-5 border border-bottom-0 bg-white rounded-top fs-1">
                                <p class="m-auto text-secondary">Productos de interes</p>
                            </div>
                            <div class="col-7 border-bottom"></div>
                        </div>
                        <div class="d-flex flex-row border border-top-0 bg-white">
                            @foreach ($artesanias as $artesania)
                                <div class="card container-fluid rounded-4 ml-3 mr-2 mt-5 mb-3" style="width: 15rem;">
                                    <a href="{{ route('detalleArtesania', $artesania->id_artesania) }}">
                                        @foreach ($array as $y)
                                                @if ($y->artesania_id == $artesania->id_artesania)
                                                    <img src="{{ $y->imagen }}" class="card-img-top mt-4 " alt="img" height="150"
                                                        width="20">
                                                @endif
                                        @endforeach
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $artesania->nombre }}</h5>
                                            <a href="{{ route('detalleArtesania', $artesania->id_artesania) }}" class="btn btn-primary">Ver detalle</a>
                                        </div>
                                        
                                        <br>
            
                                </div>
                            @endforeach
                            </a>
                        </div>
                    </div>
                </section>


          </div>
    </div>
@endsection
