@extends('layouts.app')
@section('head')
    <style>
        .destination-page .head{
            margin-bottom: 0px;
        }
    </style>
@endsection
@section('heading')
    <div class="detail-destination">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="image-detail shadow-sm bg-white">
                        <img src="{{ asset('image/084807600_1556790841-mangrove.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-sm-5 text-detail">
                    <h4>Ekowisata Mangrove</h4>
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="maps">
        <div class="container">
            <h4>Lokasi</h4>
            <div class="maps-destinasi">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.411313163117!2d112.81974121435155!3d-7.3076027738724605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f0635ab078d1%3A0xc9d6a12bf3775351!2sWonorejo%20Mangrove%20Ecotourism%20Office!5e0!3m2!1sen!2sid!4v1608478457637!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="destination-page">
        <div class="container">
            <div class="col-sm-12 head">
                <h4>Destinasi Lain</h4>
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
@endsection