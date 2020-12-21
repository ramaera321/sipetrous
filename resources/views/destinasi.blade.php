@extends('layouts.app')
@section('title', 'Destination')
@section('head')
    @include('layouts.head_value_custom')
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
                    <a href="detail_destination">
                        <div class="card" data-aos="fade-up">
                            <div class="img">
                                <img class="card-img-top" src="{{ asset('image/img.jfif') }}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay slidedown">
                              <h5 class="card-title">Kebun Binatang</h5>
                              <p class="card-text">Some quick example text to</p>
                            </div>
                            <div class="card-img-overlay inframe">
                                <h5 class="card-title">Kebun Binatang</h5>
                                <p class="card-text">Some quick example text to</p>
                              </div>
                        </div>
                    </a>
                </div> 

                <div class="cover-card col-sm-3">
                    <a href="detail_destination">
                        <div class="card" data-aos="fade-up" data-aos-delay="100">
                            <div class="img">
                                <img class="card-img-top" src="{{ asset('image/Monumen-Tugu-Pahlawan-Surabaya.jpg') }}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay slidedown">
                              <h5 class="card-title">Tugu Pahlawan</h5>
                              <p class="card-text">Some quick example text to</p>
                            </div>
                            <div class="card-img-overlay inframe">
                                <h5 class="card-title">Tugu Pahlawan</h5>
                                <p class="card-text">Some quick example text to</p>
                              </div>
                        </div>
                    </a>
                </div>  

                <div class="cover-card col-sm-3">
                    <a href="detail_destination">
                        <div class="card" data-aos="fade-up" data-aos-delay="200">
                            <div class="img">
                                <img class="card-img-top" src="{{ asset('image/084807600_1556790841-mangrove.jpg') }}" alt="Card image cap">
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
                    <a href="detail_destination">
                        <div class="card" data-aos="fade-up" data-aos-delay="300">
                            <div class="img">
                                <img class="card-img-top" src="{{ asset('image/tmnbungkul-prepcom1.jpg') }}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay slidedown">
                              <h5 class="card-title">Taman Bungkul</h5>
                              <p class="card-text">Some quick example text to</p>
                            </div>
                            <div class="card-img-overlay inframe">
                                <h5 class="card-title">Taman Bungkul</h5>
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
                        <div class="img"  data-aos="fade-up">
                            <img class="card-img-top" src="{{ asset('image/imamsantoso3-e1579322671373.jpg') }}" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="img" data-aos="fade-up" data-aos-delay="100">
                            <img class="card-img-top" src="{{ asset('image/Hutan-Mangrove-Wonorejo-10.jpg') }}" alt="Card image cap">
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 small-image row no-gutters">
                    <div class="col-sm-12">
                        <div class="img" data-aos="fade-up" data-aos-delay="200">
                            <img class="card-img-top" src="{{ asset('image/ruangphotoworks-6ee2b925f0eb11e3bee23f9dc1a52580.jpg') }}" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="img" data-aos="fade-up" data-aos-delay="300">
                            <img class="card-img-top" src="{{ asset('image/spot-foto-pagoda-tian-ti-surabaya-yang-instagenik.jpg') }}" alt="Card image cap" style="height: auto; width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

@section('script')
    @include('layouts.script_value_custom')
@endsection