@php
    use Illuminate\Support\Facades\Auth;
@endphp

@extends('inc.master')
@section('title', 'Flats')

@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class="content-wrapper fixed justify-content-center">
            <!-- Content Header (Page header) -->
            <div class="content-header d-flex justify-content-center">
                <div class="container text-center">
                    <h1 class="mb-4">View Your Flats List</h1>

                    <!-- Form starts here -->
                    <form id="flatSelectionForm" method="POST" action="{{ route('flats.submit') }}" class="form-inline d-flex justify-content-center">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="flats" class="mr-2">Choose a flat:</label>
                            <select id="flats" name="flats" class="form-control mr-2">
                                <option>Select</option>
                                <option value="flata">Flat A</option>
                                <option value="flatb">Flat B</option>
                                <option value="flatc">Flat C</option>
                                <option value="flatd">Flat D</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                    <!-- Form ends here -->
                </div>
            </div>

            <!-- /.content-header -->

            <!-- Main content -->
            <div class="container">
                @if (isset($data) && count($data) > 0)
                    <div class="card ">
                        <div class="card-header">
                            <h3>{{ ucfirst($selectedFlat) }} Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 350px; overflow-y: auto;">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>S No.</th>
                                            <th>Flat No.</th>
                                            <th>Owner Name</th>
                                            <th>Owner Email Id</th>
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
                                                <td>{{ $item->owner_name }}</td>
                                                <td>{{ $item->email }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @elseif(isset($data))
                    <div class="alert alert-warning mt-5">
                        No data available for the selected flat type.
                    </div>
                @endif
            </div>
            <!-- /.main-content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
@endsection
