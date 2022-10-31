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
                                <h4 class="card-title">Product Request</h4>
                            </div>
                        </div>
                        <p class="card-description">
                            {{ count($product_request) }} Request
                        </p>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="font-weight-bold text-black">
                                        Published
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Product
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Request
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Name/Phone Number
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Status
                                    </th>
                                    <th class="font-weight-bold text-black">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_request as $row)
                                    <tr>
                                        <td>
                                            @if ($row->created_at != null)
                                                {{ $row->created_at }}
                                            @else
                                                Created Automatically
                                            @endif
                                        </td>
                                        <td>
                                            {{ $row->product->name }}
                                        </td>
                                        <td>
                                            {{ $row->request_product }}/{{ $row->product->unit }}
                                        </td>
                                        <td>
                                            {{ $row->name }}/{{ $row->phone_number }}
                                        </td>
                                        <td>
                                            {{ $row->status }}
                                        </td>
                                        <td>
                                            @if ($row->status == 'pending')
                                                <span class="btn btn-sm btn-danger">Reject</span>
                                                <input type="submit" class="btn btn-sm btn-primary" value="Admit"/>
                                            @elseif ($row->status == 'processed')
                                                <span class="btn btn-sm btn-danger">Reject</span>
                                                <span class="btn btn-sm btn-info">Completed</span>
                                            @else
                                                Status Unknown
                                            @endif
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