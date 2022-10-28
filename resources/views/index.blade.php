@extends('Layouts.header')
@section('content')
<div class="col-12 row p-0">
    {{-- cuerpo de todo el index :) --}}
    {{-- <div class="col-12 row">
            <div class="col-7 row">
                <p class="titulo_grande column">Artesanias Indigenas</p>
                <div class="col-12">
                    <div class="fs-3 col-10 p-0"> Descubre los tesoros
                        <p class="fs-3 col-10 p-0 m-0">artesanales </p>
                         escondidos en el cauca
                    </div>
                </div>
            </div>
            <div class="col-5 row ">
                <div class="col-6 p-0 d">
                    <img src="../img/mochila.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-6 p-0">
                    <img src="../img/indigena-col.jpg" alt=""  class="img-fluid">
                </div>
                <div id="wrapper">
                    <div id="div1">
                        <img src="../img/mochila.jpg" alt="" class="img-fluid">
                    </div>
             
                    <div id="div2">
                        <img src="../img/indigena-col.jpg" alt=""  class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-6"></div>
    </div> --}}
    <section class="fondo cuerpo_index p-0">
        <section class="container-fluid d-flex justify-content-evenly">
            <article class="texto col-12  col-md-6  col-xxl-6">
                <h1>Artesanias Indigenas</h1>
                <h2>Descubre los tesoros artesanales escondidos en el cauca</h2>
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit saepe laboriosam iure voluptatibus hic rem, cupiditate provident ex sapiente debitis fugiat, vel deserunt earum ipsa quam distinctio, aut maiores excepturi?
                Dignissimos blanditiis mollitia consectetur expedita deserunt aspernatur ipsa, fuga ab tempora obcaecati fugiat repudiandae atque! Doloremque, laborum! Odio iusto quis dolore voluptate earum soluta, sapiente sit, distinctio aliquid porro laudantium?
                Nisi, impedit. Voluptatibus impedit consequuntur, illum laudantium nam commodi porro cumque, sequi explicabo rem saepe quisquam omnis vel asperiores dicta alias! Cupiditate at officiis ipsam provident maxime corrupti unde earum!
                Autem nisi veritatis nobis illum. Blanditiis officia ipsa placeat numquam at suscipit sunt fuga et animi maxime veniam expedita dolorem maiores illo atque deleniti ut, asperiores natus hic eius inventore.
                </p>
            </article>
            <section id="carouselExampleControls" class="carrusel  carousel slide col-12  col-md-6  col-xxl-6" data-bs-ride="carousel">
                <article class="carousel-inner">
                    <article class="carousel-item active">
                        <img src="img/Fondo1.jpg" class="d-block w-100" alt="img" height="400px" width="400px">
                    </article>
                    <article class="carousel-item">
                        <img src="img/Fondo2.jpg" class="d-block w-100" alt="img" height="400px" width="400px">
                    </article>
                    <article class="carousel-item">
                        <img src="img/Fondo3.png" class="d-block w-100" alt="img" height="400px" width="400px">
                    </article>
                    <article class="carousel-item">
                        <img src="img/Fondo4.png" class="d-block w-100" alt="img" height="400px" width="400px">
                    </article>
                </article>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </section>
        </section>
    
        <section class="col-12 flex-wrap d-flex"> 
                <section class=" col-12 d-flex flex-wrap">
                    @foreach ($artesanias as $artesania)
                    <article class="col">
                        <a href="{{route('detalleArtesania',$artesania->id_artesania)}}"class="card p-4 pt-5 mt-5 shadow-lg p-3 mb-5 rounded-4" style="width: 22rem;"
                        style="width: 22rem;">
                            @foreach ($array as $y)
                                @foreach ($y as $item)
                                    @if ($item->artesania_id == $artesania->id_artesania)
                                    <img src="{{$item->imagen}}" class="card-img-top" alt="img" height="300" width="200">
                                    @endif 
                                @endforeach
                            @endforeach
                            <article class="card-body">
                                <section class="d-flex justify-content-between">
                                        <h5 class="card-title">{{ $artesania->nombre }}</h5>
                                        <img class="member-avatar rounded-circle" src="{{ $artesania->imagen }}" height="40"
                                            width="40">
                                </section>
                                <h6 class="text-success"> $ {{$artesania->precio }}</h6>
                            </article>
                        </a>
                    </article>
                    @endforeach
            {{-- <a href="{{ url('detail_craft') }}"class=" card p-4 pt-5 mt-5 shadow-lg p-3 mb-5 rounded-4 text-decoration-none"
                style="width: 22rem;">
                <img src="https://placeimg.com/640/480/arch" class="card-img-top" alt="img" height="300"
                    width="200">
                <article class="card-body">
                    <section class="d-flex justify-content-between">
                        @foreach ($artesanias as $artesanias)
                            <h5 class="card-title">{{ $artesanias->nombre }}</h5>
                            <img class="member-avatar rounded-circle" src="{{ $artesanias->imagen }}" height="40"
                                width="40">
                    </section>
                    <h6 class="text-success"> $ {{$artesanias->precio }}</h6>
                    @endforeach
                </article>
            </a> --}}
    
    
    
    
    
    
    
    
    
        <br>
    
    </section>
</div>

@endsection