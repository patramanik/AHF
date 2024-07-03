<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .invoice-header {
            background-color: #e9ebed;
        }
        .invoice-table th {
            background-color: #f8f9fa;
        }
        .invoice-total {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header invoice-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mb-0">Invoice</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="mb-0"><strong>Invoice ID:</strong> {{$billid}}</p>
                        <p><strong>Date:</strong> {{$billdate}}</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <h5>From:</h5>
                        <p><strong>Company Name</strong></p>
                        <p>Address Line 1</p>
                        <p>Address Line 2</p>
                        <p>Email: company@example.com</p>
                    </div>
                    <div class="col text-right">
                        <h5>To:</h5>
                        <p><strong>Flat No: {{$flats->flat_no}}</strong></p>
                        <p><strong>Name:</strong> {{$flats->owner_name}}</p>
                        <p><strong>Email:</strong> {{$flats->email}}</p>
                    </div>
                </div>
                <table class="table table-bordered invoice-table">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Total</th>
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
                        <tr class="invoice-total">
                            <td><strong>Total</strong></td>
                            <td><strong>₹{{$total}}</strong></td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-success">Pay</button>
                    <button type="button" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



