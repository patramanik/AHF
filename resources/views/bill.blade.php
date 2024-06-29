
@extends('header_link.header')
@section('space-work')
@php
    $monthly_rate = $flats->monthly_rate;
    $maintenance_charges = $flats->maintenance_charges;
    $collection_for_major_maintenance = $flats->collection_for_major_maintenance;

    $total = $monthly_rate + $maintenance_charges + $collection_for_major_maintenance;
@endphp

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3>Bill</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <h5>From:</h5>
                        <p>Company Name</p>
                        <p>Address Line 1</p>
                        <p>Address Line 2</p>
                        <p>Email: company@example.com</p>
                    </div>
                    <div class="col text-right">
                        <h5>To:</h5>
                       <p>Flat No: {{$flats->flat_no}}</p>
                         <p>Name: {{$flats->owner_name}}</p>
                        <p>Email: {{$flats->email}}</p>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th><strong>Description</strong></th>
                            <th><strong>Total</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Monthly rate</strong></td>
                            <td>{{ $flats->monthly_rate }}</td>
                        </tr>
                        <tr>
                            <td><strong>Maintenance charges</strong></td>

                            <td>{{ $flats->maintenance_charges }}</td>
                        </tr>
                        <tr>
                            <td><strong>Collection for major maintenance</strong></td>

                            <td>{{ $flats->collection_for_major_maintenance }}</td>
                        </tr>
                        <tr style="background-color:#D3D3D3">
                            <td><strong>Total</strong></td>
                            <td>{{ $total }}</td>
                        </tr>
                        <!-- Add more items as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@endsection

