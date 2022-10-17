@extends('layouts.landing')

@section('content')

<section class="bg-green">
    <nav class="navbar navbar-expand-lg navbar-dark text-white">
        @include('layouts.navbar')
    </nav>
</section>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-md rounded-md">
                    <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid object-cover rounded-md">
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <p>Name</p>
                    </div>
                    <div class="col-md-9">
                        <p>: {{ $product->name }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>Category</p>
                    </div>
                    <div class="col-md-9">
                        <p>: {{ $product->category->name }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>Price/Unit</p>
                    </div>
                    <div class="col-md-9">
                        <p>: {{ $product->price }} / {{ $product->unit }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>Status</p>
                    </div>
                    <div class="col-md-9">
                        <p>: {{ $product->status }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <p>Description</p>
                    </div>
                    <div class="col-md-9 d-flex">
                        <span>:&nbsp;</span> {!! $product->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between">
                <h3 class="font-weight-bold">Product Related</h3>
                <p><a href="{{ route('product') }}">View All <i class="fa fa-long-arrow-right"></i></a></p>
            </div>
        </div>
        <div class="row row-cols-md-4 row-cols-2" style="min-height: 400px">
            @foreach ($products as $item)
                <div class="col my-3">
                    <div class="card rounded-shadow-card">
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top rounded-shadow-card-top object-cover" style="height: 250px;">
                        <div class="card-body">
                            <p class="card-title text-muted">{{ $item->category->name }}</p>
                            <p class="card-title">{{ strip_tags(Str::limit($item->name, 50, '...')) }}</p>
                            <div class="d-flex">
                                <h5>{{ $item->price }}</h5><span>/{{ $item->unit }}</span>
                            </div>
                            <p class="text-white"><span class="@if($item->status == 'Available') bg-primary @else bg-secondary @endif rounded px-2">{{ $item->status }}</span></p>
                            <div class="d-grid">
                                <a href="{{ route('product.show', $item->slug) }}" class="btn btn-dark text-white mt-3"><span class="px-1">Selengkapnya</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection