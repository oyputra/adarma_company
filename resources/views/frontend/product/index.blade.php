@extends('layouts.landing')

@section('content')
    
    <section class="bg-green">
        <nav class="navbar navbar-expand-lg navbar-dark text-white">
            @include('layouts.navbar')
        </nav>
    </section>  

    <section>
        <div class="container">
            <div class="row">
                <div class="row my-3">
                    <div class="col-md-6">
                        <h3 class="mr-3">{{ count($products) }} Product</h3>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <form class="d-flex align-items-center" action="{{ route('product.filter') }}" method="POST">
                            @csrf
                            <span class="mr-3 text-black font-weight-bold">Filter Category</span>
                            <div class="d-flex">
                                <select class="form-select mr-3" name="filter">
                                    <option selected disabled>All Product</option>
                                    @foreach ($category as $row)
                                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                <button class="btn btn-success bg-green pt-0" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row row-cols-md-4 row-cols-2" style="min-height: 400px">
                @foreach ($products as $item)
                    <div class="col my-3">
                        <div class="card rounded-shadow-card">
                            <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top rounded-shadow-card-top" alt="...">
                            <div class="card-body">
                                <p class="card-title text-muted">{{ $item->category->name }}</p>
                                <p class="card-title">{{ strip_tags(Str::limit($item->name, 50, '...')) }}</p>
                                <div class="d-flex">
                                    <h5>{{ $item->price }}</h5><span>/{{ $item->unit }}</span>
                                </div>
                                <p class="text-white"><span class="bg-secondary px-2">{{ $item->status }}</span></p>
                                <div class="d-grid">
                                    <a href="#" class="btn btn-primary text-white mt-3"><span class="px-1">Selengkapnya</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection