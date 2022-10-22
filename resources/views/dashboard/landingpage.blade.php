@extends('layouts.dashboard.app')

@section('content')

  <!-- content-wrapper -->
  <div class="content-wrapper">
    <div class="row">
        
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manager Landing Page</h4>
                    <form class="form-sample" action="{{ route('category_product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p class="card-description">
                            {{-- Fill in the input form below to upload an <code>Category Product</code> --}}
                        </p>
                        
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group row">
                                    <label for="image" class="col-md-12 col-form-label">Image Logo</label>
                                    <div class="col-md-12">
                                        <img src="{{ asset('images/logo.png') }}" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group row">
                                    <label for="image" class="col-md-12 col-form-label">Landing Page</label>
                                    <div class="col-md-12 position-relative">
                                        <img src="{{ asset('images/img landing page.png') }}" class="img-fluid">
                                        <div class="py-3 position-absolute top-6 col-md-7">
                                            <h1 class="fw-bold text-white" style="font-weight: 700;">High Quality Product from trusted Farmer</h1>
                                            <p class="text-white">The raw materials we use are genuine coconut shells taken from local Farm with guaranteed quality</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Change</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Change Landing Page</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label for="image" class="col-form-label">Image Logo</label>
                                                        <input id="image" name="image" type="file" class="form-control @error('image') is-invalid @enderror">
                
                                                        @error('image')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="image" class="col-sm-12 col-form-label">Image Landing Page</label>
                                                        <input id="image" name="image" type="file" class="form-control @error('image') is-invalid @enderror">
                
                                                        @error('image')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="name" class="col-sm-12 col-form-label">Text Landing Large</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="name" class="col-sm-12 col-form-label">Text Landing Small</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                        
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>

    </div>
  </div>
  <!-- content-wrapper ends -->

@endsection
