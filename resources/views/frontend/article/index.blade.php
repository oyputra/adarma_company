@extends('layouts.landing')

@section('content')
    
    <section class="pb-landing bg-green">
        <nav class="navbar navbar-expand-lg navbar-dark text-white">
            @include('layouts.navbar')
        </nav>
        
        @if (isset($article))
            <div class="container">
                <div class="position-relative">
                    <div class="position-absolute top-100 mt-landing-1">
                        <div class="mb-3 rounded-shadow-card bg-white">
                            <div class="row g-0">
                                <img src="{{ 'storage/' . $article->image }}" class="col-md-4 object-cover rounded-shadow-card-left rounded-shadow-card-top" alt="...">
                                <div class="col-md-8">
                                    <div class="mx-4 my-4">
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
                                        <div class="mt-3">
                                            <p class="card-text text-justify">{!! strip_tags(Str::limit($article->body, 200, '...')) !!}</p>
                                            <a href="{{ route('article.show', $article->slug) }}" class="btn btn-primary text-white rounded-pill mt-5"><span class="px-1">Selengkapnya</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>  
    @if (isset($article))
        <section class="mt-landing-3">
            <div class="container">
                <div class="row row-cols-md-3 row-cols-2">
                    @foreach ($articles as $item)
                        <div class="col my-3">
                            <div class="card rounded-shadow-card">
                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top rounded-shadow-card-top" alt="...">
                                <div class="card-body">
                                    <div>
                                        <p class="card-text text-muted">{{ $item->category->name }}</p>
                                        <h5 class="card-title">{{ $item->title }}</h5>
                                        <a href="{{ route('article.show', $item->slug) }}" class="btn btn-primary text-white rounded-pill mt-3"><span class="px-1">Selengkapnya</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <div class="d-flex justify-content-center" style="margin: 250px 0">
            <p>Belum ada article</p>
        </div>
    @endif

@endsection