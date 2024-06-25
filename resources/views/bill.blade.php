@extends('header_link.header')
@section('space-work')
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
                        <p>Flat No: {{$flat->flat_no}}</p>
                        <p>Name: {{$flat->owner_name}}</p>
                        <p>Email: {{$flat->email}}</p>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Service/Product 1</td>
                            <td>2</td>
                            <td>$100</td>
                            <td>$200</td>
                        </tr>
                        <tr>
                            <td>Service/Product 2</td>
                            <td>1</td>
                            <td>$150</td>
                            <td>$150</td>
                        </tr>
                        <!-- Add more items as needed -->
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <table class="table table-bordered">
                            <tr>
                                <th>Subtotal:</th>
                                <td>$350</td>
                            </tr>
                            <tr>
                                <th>Tax (10%):</th>
                                <td>$35</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>$385</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <p>Thank you for your business!</p>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
