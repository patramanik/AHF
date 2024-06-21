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
                <form id="flatSelectionForm" class="form-inline">
                    <div class="form-group mb-2">
                        <label for="flats" class="mr-2">Choose a flat:</label>
                        <select id="flats" name="flats" class="form-control mr-2">
                            <option value="">Select Flat</option>
                            <option value="flatA">Flat A</option>
                            <option value="flatB">Flat B</option>
                            <option value="flatC">Flat C</option>
                            <option value="flatD">Flat D</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
                <!-- Form ends here -->
            </div>
        </div>
    </div>
</div>










    <aside class="control-sidebar control-sidebar-dark">

    </aside>
    </div>
@endsection
