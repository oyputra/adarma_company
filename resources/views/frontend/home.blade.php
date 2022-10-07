@extends('layouts.landing')

@section('content')

    <section style="background-image: url('images/img\ landing\ page.png'); height: 100%;">
        <nav class="navbar navbar-expand-lg navbar-dark text-white">
            @include('layouts.navbar')
        </nav>

        <div class="container">
            <div class="text-white py-landing">
                <div class="col-md-8">
                    <h1 class="fw-bold fs-md-1 fs-landing">High Quality Product from trusted Farmer</h1>
                    <p>The raw materials we use are genuine coconut shells taken from local Farm with guaranteed quality</p>
                    <a href="#about" class="btn btn-lg bg-light fw-bold my-5 py-3 px-5"><span class="text-green">About Us</span></a>
                </div>
            </div>
        </div>
    </section>        

    <section class="container" id="about">
        <div class="py-5">
            <div class="text-center">
                <h1>WELCOME TO <span class="text-green">ADARMA MANDIRI</span> COMPANY</h1>
                <p>Indonesian Argicultural Trading Company</p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="pb-5 d-md-flex ps-relative">
            <img src="images/about us img.png" class="img-fluid img-aboutus">
            
            <div class="row d-flex flex-row-reverse ps-absolute padding-card" style="z-index: 1;">
                <div class="col-md-6 d-flex align-items-center" style="margin-top: 50px;">
                    <div class="card p-5 rounded-shadow-card">
                        <div class="card-body">
                            <h1 class="fw-bolder fs-3 pb-3">About Us</h1>
                            <p class="card-text">In the beginning PT Arta Mandiri was enganged in manufacturing where we processed derivative Agricultural and Industrial Product. After that our company growing toour product plantations, to process more derivate products.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-3" id="profil">
        <section class="container">
            <div class="my-5">
                <div class="text-center mx-auto">
                    <h1 class="fw-bolder fs-3">Our Motto</h1>
                    <h1 class="fw-bolder fs-landing-2 text-green">Consistency and Cooperation is our quality</h1>
                </div>
            </div>
        </section>
    
        <section class="container">
            <div class="py-5">
                <div class="row row-cols-1 row-cols-md-3">
                    <div class="col d-flex align-items-center my-3">
                        <div class="card pt-5 px-3 rounded-shadow-card" style="height: 500px;">
                            <div class="card-body text-center">
                                <img src="images/vision.png" class="img-fluid" style="width: 25%;">
                                <h1 class="fw-bolder fs-3 pb-3 text-green mt-3">Vision</h1>
                                <p class="card-text text-secondary">To Become the largest <br>
                                    exportercompany from Indonesia that
                                    can 
                                    bring Indonesia coconut
                                    derivative products into superior
                                    products and have high value in the
                                    world</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-center my-3">
                        <div class="card pt-5 px-3 rounded-shadow-card" style="height: 500px;">
                            <div class="card-body text-center">
                                <img src="images/mission.png" class="img-fluid" style="width: 25%;">
                                <h1 class="fw-bolder fs-3 pb-3 text-green mt-3">Mission</h1>
                                <p class="card-text text-secondary">1. Providing coconut derivative
                                    products with the best Quality original
                                    from Indonesia specifcally for ousr
                                    customers and trying to fulfill requests
                                    according to customer wisher because
                                    customer satisfaction our priority. 
                                    <br><br>
                                    2. Can utilize coconut derivativesbas a
                                    substitute for natural ingrediemnts for
                                    daily needs in a sustainable manner</p>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex align-items-center my-3">
                        <div class="card pt-5 px-3 rounded-shadow-card" style="height: 500px;">
                            <div class="card-body text-center">
                                <img src="images/integrity.png" class="img-fluid" style="width: 25%;">
                                <h1 class="fw-bolder fs-3 pb-3 text-green mt-3">Integrity</h1>
                                <p class="card-text text-secondary">Our Integrity is keeping our word and treating others with failness and respect. Integrity is one of our most cherished assets</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="container">
        <div class="py-5 col-md-8 mx-auto text-center">
            <h1 class="fw-bolder fs-3">Our Product</h1>
            <h1 class="fw-bolder fs-landing-2 text-green ">High Quality Product from trusted Farmer and Manufacture</h1>
        </div> 
        <div class="py-5 col align-items-center">
            <div class="card rounded-shadow-card">
                <div class="row card-body">
                    <div class="col-md-8 col-12 position-relative mt-3">
                        <img src="images/agricultural.png" class="img-fluid rounded-img">
                        <h1 class="position-absolute bottom-50 col-8 text-white px-5 fw-bold fs-landing-3">Agricultural Product</h1>
                        <div class="d-flex position-absolute top-50 mt-5 px-5">
                            <button type="button" class="btn bg-green btn-lg text-white fw-bold"><span class="px-3">Detail</span></button>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 d-flex d-md-grid gap-3 mt-3">
                        <div class="row position-relative">
                            <img src="images/agricultural.png" class="img-fluid rounded-img" style="filter: blur(8px); -webkit-filter: blur(3px);">
                            <div class="position-absolute d-flex justify-content-center align-self-center">
                                <h1 class="text-white fw-bold fs-landing-2">Agricultural</h1>
                            </div>
                        </div>
                        <div class="row position-relative">
                            <img src="images/agricultural.png" class="img-fluid rounded-img" style="filter: blur(8px); -webkit-filter: blur(3px);">
                            <div class="position-absolute d-flex justify-content-center align-self-center">
                                <h1 class="text-white fw-bold fs-landing-2">Industrial</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection

        