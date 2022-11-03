@extends('Layouts.header')
@section('content')
   

        <section class="cuerpo_index ">
            <section class="container-fluid d-flex cabeza">
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
                            <img src="img/Fondo1.jpg" class="d-block w-100" alt="img" height="350px" width="180px">
                        </article>
                        <article class="carousel-item">
                            <img src="img/Fondo2.jpg" class="d-block w-100" alt="img" height="350px" width="200px">
                        </article>
                        <article class="carousel-item">
                            <img src="img/Fondo3.png" class="d-block w-100" alt="img" height="350px" width="200px">
                        </article>
                        <article class="carousel-item">
                            <img src="img/Fondo4.png" class="d-block w-100" alt="img" height="350px" width="200px">
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


            {{-- <section class=" col-12 d-flex flex-wrap">
                    @foreach ($artesanias as $artesania)
                        <article class="col">
                            <a href="{{ route('detalleArtesania', $artesania->id_artesania) }}"class="card p-4 pt-5 mt-5 shadow-lg p-3 mb-5 rounded-4"
                                style="width: 22rem;" >
                                @foreach ($array as $y)
                                    @foreach ($y as $item)
                                        @if ($item->artesania_id == $artesania->id_artesania)
                                            <img src="{{ $item->imagen }}" class="card-img-top" alt="img"
                                                height="300" width="200">
                                        @endif
                                    @endforeach
                                @endforeach
                                <article class="card-body">
                                    <section class="d-flex justify-content-between">
                                        <h5 class="card-title">{{ $artesania->nombre }}</h5>
                                    </section>
                                    <h6 class="text-success"> $ {{ $artesania->precio }}</h6>
                                </article>
                            </a>
                        </article>
                    @endforeach
                    <br>

                </section> --}}




            <div class="carta d-flex flex-wrap mt-6 mb-6 ">
                @foreach ($artesanias as $artesania)
                    <div class=" container p-4 rounded-4 colorContainer " style="width: 20rem; height: 25rem; margin-left: 3vh; margin-top: 8vh ">
                        <a href="{{ route('detalleArtesania', $artesania->id_artesania) }}">

                            @foreach ($array as $y)
                                @foreach ($y as $item)
                                    @if ($item->artesania_id == $artesania->id_artesania)
                                        <img src="{{ $item->imagen }}" class="card-img-top mt-3  " alt="img" height="250"
                                            width="200">
                                    @endif
                                @endforeach
                            @endforeach
                            <div class="m-3">
                                <h5 class="card-title">{{ $artesania->nombre }}</h5>
                                <h6 class="text-success"> $ {{ $artesania->precio }}</h6>
                            </div>
                            <br>

                    </div>
                @endforeach
                </a>
            </div>
        </section>



@endsection
