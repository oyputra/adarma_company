@extends('layouts.landing')

@section('content')
    
    <section class="pb-landing bg-green">
        <nav class="navbar navbar-expand-lg navbar-dark text-white">
            @include('layouts.navbar')
        </nav>
        
        <div class="container">
            <div class="position-relative">
                <div class="position-absolute top-100 mt-landing-1">
                    <div class="mb-3 rounded-shadow-card bg-white">
                        <div class="row g-0">
                            <img src="images/agricultural.png" class="col-md-4 object-cover rounded-shadow-card-left rounded-shadow-card-top" alt="...">
                            <div class="col-md-8">
                                <div class="mx-4 my-4">
                                    <h1 class="fw-bolder fs-2 pb-4">Siapa kita? INDONESIA</h1>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <div class="lh-xs">
                                                <p class="text-muted p-0">Editor</p>
                                                <p class="fw-bold p-0">Edo Butarbutar</p>
                                            </div>
                                            <div class="ml-3 lh-xs">
                                                <p class="text-muted p-0">Penulis</p>
                                                <p class="fw-bold p-0">Ricardo Hubbert L.</p>
                                            </div>
                                        </div>
                                        <div class="lh-xs">
                                            <p class="text-muted p-0">Dipublikasikan</p>
                                            <p class="fw-bold p-0">25 Juli 2022</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="card-text text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione aliquid temporibus dicta fugiat? Soluta officiis consequatur odio corporis sint, deleniti voluptas commodi expedita non fuga explicabo, ullam ducimus nulla neque blanditiis saepe quidem...</p>
                                        <a href="{{ url('show') }}" class="btn btn-primary text-white rounded-pill mt-5"><span class="px-1">Selengkapnya</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <section class="mt-landing-2">
        <div class="container">
            <div class="row row-cols-md-3 row-cols-2">
                <div class="col my-3">
                    <div class="card rounded-shadow-card">
                        <img src="images/agricultural.png" class="card-img-top rounded-shadow-card-top" alt="...">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text lh-xs text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" class="btn btn-primary text-white rounded-pill"><span class="px-1">Selengkapnya</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card rounded-shadow-card">
                        <img src="images/agricultural.png" class="card-img-top rounded-shadow-card-top" alt="...">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text lh-xs text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" class="btn btn-primary text-white rounded-pill"><span class="px-1">Selengkapnya</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card rounded-shadow-card">
                        <img src="images/agricultural.png" class="card-img-top rounded-shadow-card-top" alt="...">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text lh-xs text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" class="btn btn-primary text-white rounded-pill"><span class="px-1">Selengkapnya</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card rounded-shadow-card">
                        <img src="images/agricultural.png" class="card-img-top rounded-shadow-card-top" alt="...">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text lh-xs text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" class="btn btn-primary text-white rounded-pill"><span class="px-1">Selengkapnya</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card rounded-shadow-card">
                        <img src="images/agricultural.png" class="card-img-top rounded-shadow-card-top" alt="...">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text lh-xs text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" class="btn btn-primary text-white rounded-pill"><span class="px-1">Selengkapnya</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col my-3">
                    <div class="card rounded-shadow-card">
                        <img src="images/agricultural.png" class="card-img-top rounded-shadow-card-top" alt="...">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text lh-xs text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" class="btn btn-primary text-white rounded-pill"><span class="px-1">Selengkapnya</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection