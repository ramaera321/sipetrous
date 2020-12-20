@extends('layouts.app')
@section('title', 'Destination')
@section('head')
    
@endsection
@section('heading')
    <div class="jumbotron jumbotron-fluid jombotron-destinasi">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-heading-destinasi">
                    <h1 class="display-4">Kurangi Stress Dengan Dolen</h1>
                    <p class="lead">Segarkan pikiran dan hatimu dengan menjelajahi wisata kesukaanmu.</p>
                </div>
                <div class="col-sm-6 image-heading-destinasi">
                    <img src="{{ asset('image/108628.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="destination-page">
        <div class="container">
            <div class="col-sm-12 head">
                <h4>Destinasi</h4>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" id="search-destinasi" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info my-2 my-sm-0 bg-info text-light" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="cards-destinasi row">
                <div class="cover-card col-sm-3">
                    <a href="http://">
                        <div class="card">
                            <div class="img">
                                <img class="card-img-top" src="{{ asset('image/Monumen-Tugu-Pahlawan-Surabaya.jpg') }}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay slidedown">
                              <h5 class="card-title">Ekowisata Mangrove</h5>
                              <p class="card-text">Some quick example text to</p>
                            </div>
                            <div class="card-img-overlay inframe">
                                <h5 class="card-title">Ekowisata Mangrove</h5>
                                <p class="card-text">Some quick example text to</p>
                              </div>
                        </div>
                    </a>
                </div> 

                <div class="cover-card col-sm-3">
                    <a href="http://">
                        <div class="card">
                            <div class="img">
                                <img class="card-img-top" src="{{ asset('image/Monumen-Tugu-Pahlawan-Surabaya.jpg') }}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay slidedown">
                              <h5 class="card-title">Ekowisata Mangrove</h5>
                              <p class="card-text">Some quick example text to</p>
                            </div>
                            <div class="card-img-overlay inframe">
                                <h5 class="card-title">Ekowisata Mangrove</h5>
                                <p class="card-text">Some quick example text to</p>
                              </div>
                        </div>
                    </a>
                </div>  

                <div class="cover-card col-sm-3">
                    <a href="http://">
                        <div class="card">
                            <div class="img">
                                <img class="card-img-top" src="{{ asset('image/Monumen-Tugu-Pahlawan-Surabaya.jpg') }}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay slidedown">
                              <h5 class="card-title">Ekowisata Mangrove</h5>
                              <p class="card-text">Some quick example text to</p>
                            </div>
                            <div class="card-img-overlay inframe">
                                <h5 class="card-title">Ekowisata Mangrove</h5>
                                <p class="card-text">Some quick example text to</p>
                              </div>
                        </div>
                    </a>
                </div>  

                <div class="cover-card col-sm-3">
                    <a href="http://">
                        <div class="card">
                            <div class="img">
                                <img class="card-img-top" src="{{ asset('image/Monumen-Tugu-Pahlawan-Surabaya.jpg') }}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay slidedown">
                              <h5 class="card-title">Ekowisata Mangrove</h5>
                              <p class="card-text">Some quick example text to</p>
                            </div>
                            <div class="card-img-overlay inframe">
                                <h5 class="card-title">Ekowisata Mangrove</h5>
                                <p class="card-text">Some quick example text to</p>
                              </div>
                        </div>
                    </a>
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

@section('script')
@endsection