@extends('admin.layouts.app')
@section('title','Customer')
@section('content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Customer</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Customer</li>
                    </ul>
                </div>
                <div class="col-auto float-end ms-auto">
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#addCategoriesModal"><i
                            class="fa fa-plus"></i> Add Customer</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <!-- Categoriess -->
{{--                <div class="card">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <div class="card-body" id="show_all_Categories">--}}
{{--                            <h3 class="text-center text-secondary my-5">Loading...</h3>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!-- /Categoriess-->
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
@section('script')
    <script>
        $(function () {

        });
    </script>
@endsection
