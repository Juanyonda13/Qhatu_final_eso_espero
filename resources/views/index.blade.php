@extends('Layouts.header')
@section('content')
        <section class="cuerpo_index ">
            <section class="container-fluid d-flex">
                <article class="texto container col-12  col-md-6  col-xxl-6">
                    <h2>Artesanias Indigenas</h2>
                    <h4>Descubre los tesoros artesanales escondidos en el cauca</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit saepe laboriosam iure
                        voluptatibus hic rem, cupiditate provident ex sapiente debitis fugiat, vel deserunt earum ipsa quam
                        distinctio, aut maiores excepturi?
                        Dignissimos blanditiis mollitia consectetur expedita deserunt aspernatur ipsa, fuga ab tempora
                        obcaecati fugiat repudiandae atque! Doloremque, laborum! Odio iusto quis dolore voluptate earum
                        soluta, sapiente sit, distinctio aliquid porro laudantium?
                        Nisi, impedit. Voluptatibus impedit consequuntur, illum laudantium nam commodi porro cumque, sequi.
                    </p>
                </article>
                <section id="carouselExampleControls" class="carrusel carousel col-12  col-md-6  col-xxl"
                    data-bs-ride="carousel">
                    <article class="carousel-inner">
                        <article class="carousel-item active">
                            <img src="img/Fondo1.jpg" class="d-block w-100" alt="img" height="350px" width="150px">
                        </article>
                        <article class="carousel-item">
                            <img src="img/Fondo2.jpg" class="d-block w-100" alt="img" height="350px" width="150px">
                        </article>
                        <article class="carousel-item">
                            <img src="img/Fondo3.png" class="d-block w-100" alt="img" height="350px" width="150px">
                        </article>
                        <article class="carousel-item">
                            <img src="img/Fondo4.png" class="d-block w-100" alt="img" height="350px" width="150px">
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



            <div class="carta d-flex flex-wrap">
                @foreach ($artesania as $artesania)
                    <div class=" container p-4 rounded-2 colorContainer " style="width: 20rem; height: 25rem; margin-left: 3; margin-top: 8vh; margin-bottom: 8vh  ">
                        <a href="{{ route('detalleArtesania', $artesania->id_artesania) }}">

                            @foreach ($array as $y)
                                @foreach ($y as $item)
                                    @if ($item->artesania_id == $artesania->id_artesania)
                                        <img src="{{ $item->imagen }}" class="card-img-top mt-3 rounded-2 " alt="img" height="250"
                                            width="200">
                                    @endif
                                @endforeach
                            @endforeach
                            <div class="m-3">
                                <h5 class="card-title">{{ $artesania->name }}</h5>
                                <h6 class="text-success">{{ $artesania->price }}</h6>
                            </div>
                    </div>
                @endforeach
                </a>
            </div>
        </section>
        
@endsection
