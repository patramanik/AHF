@php
    use Illuminate\Support\Facades\Auth;
@endphp

@extends('inc.master')
@section('title', 'Dashboard')
@section('content')
    @if (session('message'))
        <div class="col-6 my-1 d-flex justify-content-end">
            <div class="alert alert-success alert-dismissible fade show alert-sm" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif



    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-2">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active ">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $count }}</h3>
                                    <p>My Flats</p>
                                </div>

                                <a href="{{ route('flats') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                            {{-- <a href="{{ route('flats') }}"></a> --}}
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{$billdata}}</h3>

                                    <p>Send Email List's</p>
                                </div>

                                <a href="{{ route('emailSendPage') }}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{$pendingBills}}</h3>

                                    <p>Pending Bills</p>
                                </div>

                                <a href="{{route('paymentStatus')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        {{-- <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>Unique Visitors</p>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div> --}}

                    </div>

                </div>
            </section>

            <div class="container-fluid m-32">
                <div class="card shadow col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 m-2 mv-1">
                    <h4 class="m-2">Send Email</h4>
                    <div class="table-responsive-col  table-bordered">
                        <table class="table  table-striped table-hover" slot="">
                            <thead class="bg-dark text-bg-dark ">
                                <tr>
                                    <th>Flat's</th>
                                    {{-- <th>Status</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                <tr>
                                    <td>Flat-A</td>
                                    {{-- <td>pending</td> --}}
                                    <td>
                                        <a href="{{ route('sendEmailA') }}" class="btn btn-dark btn-sm text-white">Send</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Flat-B</td>
                                    {{-- <td>pending</td> --}}
                                    <td>
                                        <a href="{{ route('sendEmailB') }}" class="btn btn-dark btn-sm text-white">Send</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Flat-C</td>
                                    {{-- <td>pending</td> --}}
                                    <td>
                                        <a href="{{ route('sendEmailC') }}" class="btn btn-dark btn-sm text-white">Send</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Flat-D</td>
                                    {{-- <td>pending</td> --}}
                                    <td>
                                        <a href="{{ route('sendEmailD') }}" class="btn btn-dark btn-sm text-white">Send</a>
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
    <!-- ./wrapper -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
@endsection
