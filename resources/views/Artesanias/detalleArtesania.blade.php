{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/detailCraft.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/> 
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Qhatu</title>
</head>
<body> --}}
    {{-- este es el cuerpo --}}
@extends('Layouts.header')
@section('content')
    <div class="col-12 d-flex 
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
                       {{-- este div contiene el titulo y el icono feo del carrito :( --}}
                      <div class="col-12
                                  d-flex
                                  flex-wrap">
                         <div class="col-9 d-flex justify-content-stard pl-5 align-items-center text-break">
                            <h1>MANILLA ARTESANAL</h1>
                         </div>
                         <div class="col-3  d-flex justify-content-end p-0">
                            <img src="../img/icono_compra.png" class="img-fluid" width="100px" alt="">
                         </div>
                      </div>
                      {{-- este div contiene la informacion de la artesania y fotos con la compra --}}
                      <div class="col-12 d-flex flex-wrap row  mt-2">
                          <div class="col-6">
                                 {{-- esta es la carta que contiene la descripcion de la artesania foto del indigena y la cantidad de unidades --}}
                                 <div class="border rounded-2 shadow-lg p-2">
                                        {{-- este div contiene la foto del indigena su nombre , calificacion y iconos --}}
                                        <div class="col-12 d-flex row p-0">
                                            {{-- foto de perfil --}}
                                            <div class="d-flex col-2 p-0 justify-content-center">
                                                <img src="../img/foto-indigena.jpeg" class=" rounded-circle" height="50px" width="50px" alt="">
                                            </div>
                                            {{-- nombre del indigena --}}
                                            <div class="col-5 p-0 d-flex align-items-center pb-3 text-break">
                                                @foreach ($artesania->Indigena as $nombre)
                                                  <p>{{$nombre->nombre}}</p>
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
                                                <p class="m-0">Cantidad disponible.</p>
                                            </div>
                                            <div class="col-1 p-0 pt-2 d-flex ">
                                                <div class="w-100 p-0 d-flex bg-secondary rounded-3 justify-content-center align-items-center">
                                                    
                                                    <p>{{$artesania->cantidad}}</p>
                                                </div>
                                            </div>

                                            <div class="col-1 d-flex align-items-end p-0">
                                                <p>UND</p>
                                            </div>
                                        </div>
                                 </div>


                          </div>
                          {{-- este div contiene las imagenes de la artesanias   colores y cantidades a comprar --}}
                          <div class="col-6  ">
                                <div class="col-12 d-flex justify-content-center fs-2 gap-2">
                                    <p>Añadir a Favoritos</p><i class="bi bi-bookmark-fill"></i>
                                </div>
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
                                    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel px-5">
                                        <div class="carousel-inner">
                                            @foreach ($imagenes as $img)
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
                                <div class="col-12 d-flex justify-content-center fs-2 text-break text-secondary">
                                    <p>Colores Disponibles</p>
                                </div>
                                <div class="col-10 m-auto  border rounded-2 d-flex flex-row fs-3 gap-3 justify-content-center shadow-lg p-3">
                                    <a class="bi bi-circle-fill text-danger" href="#"></a>
                                    <a class="bi bi-circle-fill text-info" href="#"></a>
                                    <a class="bi bi-circle-fill text-danger" href="#"></a>
                                    <a class="bi bi-circle-fill text-warning" href="#"></a>
                                    <a class="bi bi-circle-fill text-white" href="#"></a>
                                </div>
                                <div class="col-12  mt-2 d-flex flex-row">
                                    <div class="col-2 p-2  m-auto">
                                        <div class="border border-warning rounded-3 d-flex justify-content-center shadow-lg bg-transparent">
                                              <h1>1</h1>
                                        </div>
                                    </div>
                                    <div class="col-2 d-flex flex-column gap-1 ">
                                               <button class="btn btn-secondary fs-4 p-0">+</button>
                                               <button class="btn btn-secondary fs-4 p-0">-</button>
                                    </div>
                                    <div class="col-7 d-flex justify-content-center align-items-center">
                                        <button class="btn btn-warning border border-white fs-3 shadow-lg">Comprar</button>
                                    </div>
                                </div>
                            </div>      
                    <div class="col-12 flex-column mt-5">
                        <div class="col-12 d-flex p-0 ">
                            <div class="col-5 border border-bottom-0 rounded-top bg-white fs-1">
                                <p class="m-auto text-secondary">Productos de interes</p>
                            </div>
                            <div class="col-7 border-bottom"></div>
                        </div>

                        <div class="col-12 border border-top-0 shadow-lg d-flex flex-row gap-3 p-4 mb-5">
                            @foreach ($artesanias as $a) 
                                <div class="card" style="width: 22rem;">
                                    @foreach ($array as $y)
                                       @foreach ($y as $item)
                                            @if ($item->artesania_id == $a->id_artesania)
                                                <img src="{{$item->imagen}}" class="card-img-top" alt="img" height="150" width="20">
                                            @endif 
                                       @endforeach
                                    @endforeach

                                   <div class="card-body">
                                        <h5 class="card-title">{{$a->nombre}}</h5>
                                        {{-- <p class="card-text">{{$a->descripcion}}</p> --}}
                                        <a href="#" class="btn btn-primary">Ver detalle</a>
                                    </div>
                                </div>
                            @endforeach
                            

                        </div>
                    </div>

                </section>


          </div>
    </div>
@endsection
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
{{-- </body>
</html> --}}