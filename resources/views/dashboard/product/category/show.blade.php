@extends('layouts.dashboard.app')

@section('content')

    <!-- content-wrapper -->
    <div class="content-wrapper">

        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="d-flex align-items-center justify-content-between">
                                <h4 class="card-title">Category Product</h4>
                                <a href="{{ route('category_product.index') }}" class="btn btn-primary">
                                    Back
                                </a>
                            </div>
                        </div>
                        <p class="card-description">
                            Show
                        </p>
                        
                        <div class="row">
                            <div class="col-md-12 d-flex">
                                <img src="{{ asset('storage/' . $category->image) }}" class="img-fluid col-md-6" alt="">
                                <div class="col-md-6">
                                    <p>Name: {{ $category->name }}</p>
                                    <p>Published: {{ $category->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- content-wrapper ends -->

@endsection
