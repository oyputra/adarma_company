@extends('layouts.admin.app')

@section('content')

  <!-- content-wrapper -->
  <div class="content-wrapper">

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Category Of Article</h4>
                            <a href="{{ url('article/add') }}">
                                <i class="icon-plus icon-sm text-primary"></i>
                            </a>
                        </div>
                    </div>
                    <p class="card-description">
                        Articles
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="font-weight-bold text-black">
                                    Image
                                </th>
                                <th class="font-weight-bold text-black">
                                    Category
                                </th>
                                <th class="font-weight-bold text-black">
                                    Published
                                </th>
                                <th class="font-weight-bold text-black">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1">
                                    <img class="img-lg" src="{{ asset('images/agricultural.png') }}" alt="image"/>
                                </td>
                                <td>
                                    Web Design
                                </td>
                                <td>
                                    May 15, 2015
                                </td>
                                <td>
                                    <a href="">
                                        <i class="icon-eye icon-md"></i>
                                    </a>
                                    <a href="">
                                        <i class="icon-trash icon-md"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img class="img-lg" src="{{ asset('images/agricultural.png') }}" alt="image"/>
                                </td>
                                <td>
                                    Web Design
                                </td>
                                <td>
                                    May 15, 2015
                                </td>
                                <td>
                                    <a href="">
                                        <i class="icon-eye icon-md"></i>
                                    </a>
                                    <a href="">
                                        <i class="icon-trash icon-md"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-1">
                                    <img class="img-lg" src="{{ asset('images/agricultural.png') }}" alt="image"/>
                                </td>
                                <td>
                                    Web Design
                                </td>
                                <td>
                                    May 15, 2015
                                </td>
                                <td>
                                    <a href="">
                                        <i class="icon-eye icon-md"></i>
                                    </a>
                                    <a href="">
                                        <i class="icon-trash icon-md"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>
  <!-- content-wrapper ends -->

@endsection
