@extends('layouts.landing')

@section('content')
    
    <nav class="navbar navbar-expand-lg navbar-dark text-white bg-green">
        @include('layouts.navbar')
    </nav>

    <section>
        <div class="container">
                <div class="d-flex justify-content-md-between row">
                    @auth
                    <div class="col-md-3 order-md-1 order-3" id="sticky-sidebar">
                        <div class="sticky-top pt-3">
                            <div class="mb-5">
                                <h1 class="fw-bolder fs-4 mb-4">Profil</h1>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('images/user.png') }}" class="object-cover rounded-full" alt="...">
                                    <div>
                                        <p class="fw-bold ml-3 p-0">{{ auth()->user()->name }}</p>
                                        {{-- <p class="fw-bold ml-3 text-sm text-muted p-0">Marketing Komunikasi</p> --}}
                                    </div>
                                </div>
                                <p class="mt-3 text-sm text-muted">Bergabung {{ date('d F Y', strtotime(auth()->user()->created_at)) }}</p>
                            </div>
                            <hr>
                            <div>
                                <h1 class="fw-bolder fs-4 mb-4">Statistik</h1>
                                <div class="row col-12">
                                    <div class="text-center col-4">
                                        <i class="fa fa-newspaper-o fa-3x" aria-hidden="true"></i>
                                        <p>1.000</p>
                                    </div>
                                    <div class="text-center col-4">
                                        <i class="fa fa-eye fa-3x" aria-hidden="true"></i>
                                        <p>8.000</p>
                                    </div>
                                    <div class="text-center col-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                        <p>50.000</p>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control radius-left border-green" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-success bg-green col-2 p-0 d-flex align-items-center justify-content-center" type="button" id="button-addon2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endauth

                    <div class="@auth col-md-6 @else col-md-9 @endauth order-md-2 px-3 pt-3">
                        <h1 class="fw-bolder fs-2 pb-4">{{ $article->title }}</h1>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="lh-xs">
                                    <p class="text-muted p-0">Editor</p>
                                    <p class="fw-bold p-0">{{ $article->editor_id->name }}</p>
                                </div>
                                <div class="ml-3 lh-xs">
                                    <p class="text-muted p-0">Penulis</p>
                                    <p class="fw-bold p-0">{{ $article->writer }}</p>
                                </div>
                            </div>
                            <div class="lh-xs">
                                <p class="text-muted p-0">Dipublikasikan</p>
                                <p class="fw-bold p-0">{{ date('d F Y', strtotime($article->created_at)) }}</p>
                            </div>
                        </div>
                        <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid object-cover rounded-shadow-card my-3" alt="...">
                        {!! $article->body !!}
                        
                        <div class="mt-5">
                            <h1 class="fw-bolder fs-4 mb-4">Komentar</h1>
                            @auth
                                <form class="">
                                    <div class="mb-3">
                                        <label for="komentar" class="form-label">Tulis Komentar</label>
                                        <textarea class="form-control border-green" name="" id="" rows="3"></textarea>
                                    </div>
                                    <button class="btn bg-green float-end" type="submit" id="button-addon2">
                                        <img src="{{ asset('images/button-send.png') }}" alt="" class="" width="30">
                                    </button>
                                </form>
                            @else
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="text-center">
                                        <p>Please Login for adding your comment</p>
                                        <a class="px-4 btn btn-primary rounded-3" aria-current="page" href="{{ url('login') }}">Login</a>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>

                    <div class="col-md-3 order-md-3 pt-3">
                        <section class="mb-5">
                            <h1 class="fw-bolder fs-4 mb-4">Postingan Terbaru</h1>
                            @foreach ($articles_latest as $item)
                                <a href="{{ route('article.show', $item->slug) }}" style="text-decoration:none; color:black;">
                                    <div class="mt-3 d-flex">
                                        <div class="col-4 p-0">
                                            <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid object-cover rounded" alt="...">
                                        </div>
                                        <div class="col-8 p-0">
                                            <div class="pl-2 d-flex align-items-between flex-column h-100">
                                                <p class="mb-auto card-text lh-1 text-sm">{{ $item->title }}</p>
                                                <div class="text-xs mt-2 d-flex justify-content-between">
                                                    <p class="text-muted p-0">{{ date('d F Y', strtotime($item->created_at)) }}</p>
                                                    <p class="text-muted p-0">Penulis: {{ $item->writer }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        <hr>
                        <section class="mb-5">
                            <h1 class="fw-bolder fs-4 mb-4">Postingan Terpopuler</h1>
                            <div class="mt-3 d-flex">
                                <div class="col-4 p-0">
                                    <img src="{{ asset('images/agricultural.png') }}" class="img-fluid object-cover rounded" alt="...">
                                </div>
                                <div class="col-8 p-0">
                                    <div class="pl-2 d-flex align-items-between flex-column h-100">
                                        <p class="mb-auto card-text lh-1 text-sm">Perbedaan Reseller dan Dropshiper ? Berikut Kelebihan dan Kekurangannya</p>
                                        <div class="text-xs mt-2 d-flex justify-content-between">
                                            <p class="text-muted p-0">25 Juli 2022</p>
                                            <p class="text-muted p-0">Author: Ricardo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex">
                                <div class="col-4 p-0">
                                    <img src="{{ asset('images/agricultural.png') }}" class="img-fluid object-cover rounded" alt="...">
                                </div>
                                <div class="col-8 p-0">
                                    <div class="pl-2 d-flex align-items-between flex-column h-100">
                                        <p class="mb-auto card-text lh-1 text-sm">Perbedaan Reseller dan Dropshiper ? Berikut Kelebihan dan Kekurangannya</p>
                                        <div class="text-xs mt-2 d-flex justify-content-between">
                                            <p class="text-muted p-0">25 Juli 2022</p>
                                            <p class="text-muted p-0">Author: Ricardo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <hr>
                        @if (isset($article_relate_1) || isset($article_relate_2))
                            <section class="mb-5">
                                <h1 class="fw-bolder fs-4 mb-4">Artikel Terkait</h1>
                                @if (isset($article_relate_1))
                                    <a href="{{ route('article.show', $article_relate_1->slug) }}" style="text-decoration:none; color:black;">
                                        <div class="mt-3 d-flex">
                                            <div class="col-4 p-0">
                                                <img src="{{ asset('storage/' . $article_relate_1->image) }}" class="img-fluid object-cover rounded" alt="...">
                                            </div>
                                            <div class="col-8 p-0">
                                                <div class="pl-2 d-flex align-items-between flex-column h-100">
                                                    <p class="mb-auto card-text lh-1 text-sm">{{ $article_relate_1->title }}</p>
                                                    <div class="text-xs mt-2 d-flex justify-content-between">
                                                        <p class="text-muted p-0">{{ date('d F Y', strtotime($article_relate_1->created_at)) }}</p>
                                                        <p class="text-muted p-0">Penulis: {{ $article_relate_1->writer }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                                @if (isset($article_relate_2))
                                    <a href="{{ route('article.show', $article_relate_2->slug) }}" style="text-decoration:none; color:black;">
                                        <div class="mt-3 d-flex">
                                            <div class="col-4 p-0">
                                                <img src="{{ asset('storage/' . $article_relate_2->image) }}" class="img-fluid object-cover rounded" alt="...">
                                            </div>
                                            <div class="col-8 p-0">
                                                <div class="pl-2 d-flex align-items-between flex-column h-100">
                                                    <p class="mb-auto card-text lh-1 text-sm">{{ $article_relate_2->title }}</p>
                                                    <div class="text-xs mt-2 d-flex justify-content-between">
                                                        <p class="text-muted p-0">{{ date('d F Y', strtotime($article_relate_2->created_at)) }}</p>
                                                        <p class="text-muted p-0">Penulis: {{ $article_relate_2->writer }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endif
                            </section>
                            <hr>
                        @endif
                        <section class="mb-5">
                            <h1 class="fw-bolder fs-4 mb-4">Komentar Terbanyak</h1>
                            <div class="mt-3 d-flex">
                                <div class="col-4 p-0 text-center">
                                    <p class="fs-4 text-primary p-0">43</p>
                                    <p class="text-xs">Komentar</p>
                                </div>
                                <div class="col-8 p-0">
                                    <div class="pl-2 d-flex align-items-between flex-column h-100">
                                        <p class="mb-auto card-text lh-1 text-sm">Perbedaan Reseller dan Dropshiper ? Berikut Kelebihan dan Kekurangannya</p>
                                        <div class="text-xs mt-2 d-flex justify-content-between">
                                            <p class="text-muted p-0">25 Juli 2022</p>
                                            <p class="text-muted p-0">Author: Ricardo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex">
                                <div class="col-4 p-0 text-center">
                                    <p class="fs-4 text-primary p-0">43</p>
                                    <p class="text-xs">Komentar</p>
                                </div>
                                <div class="col-8 p-0">
                                    <div class="pl-2 d-flex align-items-between flex-column h-100">
                                        <p class="mb-auto card-text lh-1 text-sm">Perbedaan Reseller dan Dropshiper ? Berikut Kelebihan dan Kekurangannya</p>
                                        <div class="text-xs mt-2 d-flex justify-content-between">
                                            <p class="text-muted p-0">25 Juli 2022</p>
                                            <p class="text-muted p-0">Author: Ricardo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 d-flex">
                                <div class="col-4 p-0 text-center">
                                    <p class="fs-4 text-primary p-0">43</p>
                                    <p class="text-xs">Komentar</p>
                                </div>
                                <div class="col-8 p-0">
                                    <div class="pl-2 d-flex align-items-between flex-column h-100">
                                        <p class="mb-auto card-text lh-1 text-sm">Perbedaan Reseller dan Dropshiper ? Berikut Kelebihan dan Kekurangannya</p>
                                        <div class="text-xs mt-2 d-flex justify-content-between">
                                            <p class="text-muted p-0">25 Juli 2022</p>
                                            <p class="text-muted p-0">Author: Ricardo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        </div>
    </section>  

@endsection