@php
    use Illuminate\Support\Facades\Auth;
@endphp

@extends('inc.master')
@section('title', 'Dashboard')

@section('content')
    <div class="wrapper d-flex justify-content-center">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <h1 class="mb-4">View Your Flats List</h1>

                    <!-- Form starts here -->
                    <form id="flatSelectionForm" method="POST" action="{{ route('flats.submit') }}" class="form-inline">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="flats" class="mr-2">Choose a flat:</label>
                            <select id="flats" name="flats" class="form-control mr-2">
                                <option value="">Select Flat</option>
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
        </div>
    </div>

    <!-- Display the data if available -->
    <div class="container">
        @if (isset($data) && count($data) > 0)
            <div class="mt-5">
                <h3>{{ ucfirst($selectedFlat) }} </h3>
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
        @elseif(isset($data))
            <div class="alert alert-warning mt-5">
                No data available for the selected flat type.
            </div>
        @endif
    </div>







    <aside class="control-sidebar control-sidebar-dark">

    </aside>
    </div>
@endsection
