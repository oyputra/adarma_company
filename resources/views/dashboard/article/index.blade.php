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
                                <h4 class="card-title">Article</h4>
                                <a href="{{ route('article.create') }}" class="btn btn-primary">
                                    Add
                                </a>
                            </div>
                        </div>
                        <p class="card-description">
                            {{ count($article) }} Article
                        </p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold text-black">
                                        Published
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Title
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Category
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Slug
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Editor
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Writer
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($article as $row)
                                    <tr>
                                        <td>
                                            {{ $row->created_at }}
                                        </td>
                                        <td>
                                            {{ $row->title }}
                                        </td>
                                        <td>
                                            {{ $row->category->name }}
                                        </td>
                                        <td>
                                            {{ $row->slug }}
                                        </td>
                                        <td>
                                            {{ $row->editor_id->name }}
                                        </td>
                                        <td>
                                            {{ $row->writer }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="{{ route('article.show', $row->slug) }}" class="mr-3">
                                                    <i class="fa fa-eye fa-lg text-black hover-show"></i>
                                                </a>
                                                <a href="{{ route('article.edit', $row->slug) }}" class="mr-2">
                                                    <i class="fa fa-pencil-square-o fa-lg text-black hover-edit"></i>
                                                </a>
                                                <form action="{{ route('article.destroy', $row->slug) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" style="border: none; background-color:transparent;">
                                                        <i class="fa fa-trash-o fa-lg text-black hover-delete"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
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
