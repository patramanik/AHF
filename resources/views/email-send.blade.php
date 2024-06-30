@php
    use Illuminate\Support\Facades\Auth;
@endphp

@extends('inc.master')
@section('title', 'Send Emails')

@section('content')
    <div class="wrapper col-12">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper justify-content-center">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Send Emails</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!-- Main content -->
            <div class="container mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Send Email Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="max-height: 350px; overflow-y: auto;">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>S No.</th>
                                        <th>Flat No.</th>
                                        <th>Bill OrderID</th>
                                        <th>Send Email Date</th>
                                        <th>Status</th>
                                    </tr>
                                    @php
                                        $Sno = 1;
                                    @endphp
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $Sno++ }}</td>
                                            <td>{{ $item->flat_no }}</td>
                                            <td>{{ $item->billorderid }}</td>
                                            <td>{{ $item->bill_send_date }}</td>
                                            <td>
                                                @if ($item->billsentstatus == 1)
                                                    <span class="text-wrap" style="color: green">Send</span>
                                                @else
                                                    <span style="color: red">Not Send</span>
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
            <!-- /.main-content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
@endsection
