@extends('layouts.layout')

@section('content')
    @csrf
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Manager Asset</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Amount</th>
            <th>Money</th>
            <th>Department</th>
            <th>Status</th>
            <th>Purchase Date</th>
            <th>Delevery Date</th>
            <th>Person Delivery</th>
            <th>Depreciation rate</th>
            <th>Depreciation Amount</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($devices as $device)
            <tr>
                <td>{{ $device->id }}</td>
                <td>{{ $device->product_name }}</td>
                <td>{{ $device->amount }}</td>
                <td>{{ $device->money }}</td>
                <td>{{ $device->department }}</td>
                <td>{{ $device->status }}</td>
                <td>{{ $device->purchase_date }}</td>
                <td>{{ $device->delivery_date }}</td>
                <td>{{ $device->personDelivery->name }}</td>
                <td>{{ $device->depreciation_rate }}</td>
                <td>{{ ($device->money * $device->depreciation_rate) / 100 }}</td>

                <td>
                    <form action="{{ route('devices.destroy', $device->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('devices.show', $device->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('devices.edit', $device->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
