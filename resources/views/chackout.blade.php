<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
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
    <div style="margin: 0 auto; width: 80%;">
        <div style="border: 1px solid #dee2e6; border-radius: .25rem;">
            <div class="invoice-header" style="padding: 15px;">
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <h3 style="margin: 0;">Invoice</h3>
                    </div>
                    <div style="text-align: right;">
                        <p style="margin: 0;"><strong>Invoice ID:</strong> {{ $billid }}</p>
                        <p><strong>Invoice Date:</strong> {{ $billdate }}</p>
                        <p><strong>Current Date:</strong> {{ $currentDate }}</p>
                    </div>
                </div>
            </div>
            <div style="padding: 15px;">
                <div style="margin-bottom: 15px;">
                    <div style="float: left; width: 50%;">
                        <h5>From:</h5>
                        <p><strong>Company Name</strong></p>
                        <p>Address Line 1</p>
                        <p>Address Line 2</p>
                        <p>Email: company@example.com</p>
                    </div>
                    <div style="float: right; width: 50%; text-align: right;">
                        <h5>To:</h5>
                        <p><strong>Flat No: {{ $flats->flat_no }}</strong></p>
                        <p>Name: {{ $flats->owner_name }}</p>
                        <p>Email: {{ $flats->email }}</p>
                    </div>
                </div>
                <div style="clear: both;">
                    <table style="width: 100%; border-collapse: collapse; border: 1px solid #dee2e6;">
                        <thead>
                            <tr>
                                <th style="border: 1px solid #dee2e6; padding: 8px;">Description</th>
                                <th style="border: 1px solid #dee2e6; padding: 8px;">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border: 1px solid #dee2e6; padding: 8px;"><strong>Monthly rate</strong></td>
                                <td style="border: 1px solid #dee2e6; padding: 8px;">{{ '₹' . number_format($flats->monthly_rate, 2) }}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6; padding: 8px;"><strong>Maintenance charges</strong></td>
                                <td style="border: 1px solid #dee2e6; padding: 8px;">{{ '₹' . number_format($flats->maintenance_charges, 2) }}</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid #dee2e6; padding: 8px;"><strong>Collection for major maintenance</strong></td>
                                <td style="border: 1px solid #dee2e6; padding: 8px;">{{ '₹' . number_format($flats->collection_for_major_maintenance, 2) }}</td>
                            </tr>
                            <tr style="background-color: #f8f9fa;">
                                <td style="border: 1px solid #dee2e6; padding: 8px;"><strong>Total</strong></td>
                                <td style="border: 1px solid #dee2e6; padding: 8px;"><strong>{{ $total }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
