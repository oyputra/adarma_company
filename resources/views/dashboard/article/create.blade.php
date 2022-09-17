@extends('layouts.dashboard.app')

@section('content')

  <!-- content-wrapper -->
  <div class="content-wrapper">
    <div class="row">
        
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Article</h4>
                    <form class="form-sample">
                        <p class="card-description">
                            Fill in the input form below to upload an Article
                        </p>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">File upload</label>
                                    <div class="col-sm-10">
                                        <div class="input-group col-xs-12">
                                        <input type="file" class="form-control file-upload-info" placeholder="Upload Image">
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title Article</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Editor</label>
                                    <div class="col-sm-9">
                                        <p class="form-control bg-light">{{ Auth::user()->name }}</p>
                                        <input type="hidden" class="form-control" value="{{ Auth::user()->name }}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Writer</label>
                                <div class="col-sm-9">
                                    <select class="form-control py-3">
                                        <option selected disabled>--- Choose One ---</option>
                                        <option>Ricardo</option>
                                        <option>Hafizh</option>
                                        <option>Putra</option>
                                        <option>Ivan</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control py-3">
                                        <option selected disabled>--- Choose One ---</option>
                                        <option>Web Design</option>
                                        <option>UI/UX</option>
                                        <option>Back-End</option>
                                        <option>Software Engineer</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Related Article</label>
                                    <div class="col-sm-9">
                                    <select class="form-control py-3">
                                        <option selected disabled>--- Choose One ---</option>
                                        <option>Setiap Hari Selalu Bangun Jam Setengah 5</option>
                                        <option>Hari Ini Harus Mencapai Target Harian</option>
                                        <option>Pengalaman Adalah Guru Terbaik Di Dalam Hidup</option>
                                        <option>Tidak Ada Kesuksesan Yang Di Dapatkan Dengan Usaha Yang Instan</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="{{ url('article/post') }}" class="btn btn-light mr-2">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
