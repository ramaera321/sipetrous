@extends('layouts.app')
@section('title', 'Si Petrous')
@section('head')
    <style>
        .jumbotron{
            text-align: center;
            background-image: url('../image/background/pantai-kenjeran-surabaya.jpg');
            background-size: cover;
            background-position-y: center;
            height: 700px;
            margin-top: -70px;
        }
    </style>
@endsection
@section('heading')
    <div class="jumbotron jumbotron-fluid">
        <div class="blur">
            <div class="container">
                <h1 class="display-4">Ayo Dolen Rek !</h1>
                <p class="lead">Temukan tempat liburan terbaik yang kamu suka disekitarmu</p>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="destination">
        <div class="container">
            <h4>Wisata terdekat</h4>
            <div class="cards-destinasi row">
                <div class="cover-card col-sm-3">
                    <div class="card shadow-sm">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/img.jfif') }}" alt="Card image cap">
                        </div>
                        <div class="card-body">
                          <h6 class="card-title">Kebun Binatang</h6>
                          <p class="card-text">Some quick example text </p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="cover-card col-sm-3">
                    <div class="card shadow-sm">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/084807600_1556790841-mangrove.jpg') }}" alt="Card image cap">
                        </div>
                        
                        <div class="card-body">
                          <h6 class="card-title">Ekowisata Mangrove</h6>
                          <p class="card-text">Some quick example text to </p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="cover-card col-sm-3">
                    <div class="card shadow-sm">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/Monumen-Tugu-Pahlawan-Surabaya.jpg') }}" alt="Card image cap">
                        </div>
                        
                        <div class="card-body">
                          <h6 class="card-title">Tugu Pahlawan</h6>
                          <p class="card-text">Some quick example text </p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="cover-card col-sm-3">
                    <div class="card shadow-sm">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/tmnbungkul-prepcom1.jpg') }}" alt="Card image cap">
                        </div>
                        
                        <div class="card-body">
                          <h6 class="card-title">Taman Bungkul</h6>
                          <p class="card-text">Some quick example text </p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="article">
        <div class="container">
            <h4>Article</h4>
            <div class="head-article row col-sm-12 no-gutters">
                <div class="col-sm-7 main-article row no-gutters">
                    <div class="card-deck col-sm-12">
                        <div class="card">
                            <div class="img">
                                <img class="card-img-top" src="{{ asset('image/Pantai-Balekambang.jpg') }}" alt="Card image cap">
                            </div>
                            
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 other-article no-gutters">                     
                    <div class="card d-flex flex-row no-gutters">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/Eco-Green-Park.jpg') }}" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-left">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card d-flex flex-row no-gutters">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/Eco-Green-Park.jpg') }}" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-left">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                    <div class="card d-flex flex-row no-gutters">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/Eco-Green-Park.jpg') }}" alt="Card image cap">
                        </div>
                        
                        <div class="card-body text-left">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="galery">
        <div class="container">
            <h4>Galery</h4>
            <div class="galery-photos row">
                <div class="col-sm-9 row large-image">
                    <div class="col-sm-6">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/tmnbungkul-prepcom1.jpg') }}" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/tmnbungkul-prepcom1.jpg') }}" alt="Card image cap">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 small-image row no-gutters">
                    <div class="col-sm-12">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/tmnbungkul-prepcom1.jpg') }}" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="img">
                            <img class="card-img-top" src="{{ asset('image/tmnbungkul-prepcom1.jpg') }}" alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection