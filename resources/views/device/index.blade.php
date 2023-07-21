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
            <th>{{__('welcome.no')}}</th>
            <th>{{__('welcome.device_name')}}</th>
            <th>{{__('welcome.amount')}}</th>
            <th>{{__('welcome.money')}}</th>
            <th>{{__('welcome.department')}}</th>
            <th>{{__('welcome.status')}}</th>
            <th>{{__('welcome.purchase_date')}}</th>
            <th>{{__('welcome.delivery_date')}}</th>
            <th>{{__('welcome.person_delivery')}}</th>
            <th>{{__('welcome.depreciation_rate')}}</th>
            <th>{{__('welcome.depreciation_amount')}}</th>
            <th width="280px">{{__('welcome.action')}}</th>
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
                        <a class="btn btn-info" href="{{ route('devices.show', $device->id) }}">{{ __('welcome.show') }}</a>
                        <a class="btn btn-primary" href="{{ route('devices.edit', $device->id) }}">{{ __('welcome.edit') }}</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('welcome.delete') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
