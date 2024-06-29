@php
    $monthly_rate = $flats->monthly_rate;
    $maintenance_charges = $flats->maintenance_charges;
    $collection_for_major_maintenance = $flats->collection_for_major_maintenance;

    $total = $monthly_rate + $maintenance_charges + $collection_for_major_maintenance;
@endphp

<table>
    <tr>
        <td><strong>Monthly rate</strong></td>
        <td>{{ $monthly_rate }}</td>
    </tr>
    <tr>
        <td><strong>Maintenance charges</strong></td>
        <td>{{ $maintenance_charges }}</td>
    </tr>
    <tr>
        <td><strong>Collection for major maintenance</strong></td>
        <td>{{ $collection_for_major_maintenance }}</td>
    </tr>
    <tr style="background-color:#D3D3D3">
        <td><strong>Total</strong></td>
        <td>{{ $total }}</td>
    </tr>
</table>
