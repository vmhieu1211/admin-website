@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('devices.index') }}"> {{__('welcome.back')}}</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('devices.update', $device->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.device_name')}}:</strong>
                    <input type="text" name="product_name" value="{{ $device->product_name }}" class="form-control"
                        placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.amount')}}:</strong>
                    <input type="text" name="amount" value="{{ $device->amount }}" class="form-control"
                        placeholder="Amount">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.money')}}:</strong>
                    <input type="text" name="money" value="{{ $device->money }}" class="form-control"
                        placeholder="Money">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.department')}}:</strong>
                    <select name="department" class="form-control" required>
                        <option value="Dev Team">Dev Team</option>
                        <option value="Marketing">Marketing</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.status')}}:</strong>
                    <select name="status" class="form-control" required>
                        <option value="using">{{__('welcome.using')}}</option>
                        <option value="storage">{{__('welcome.storage')}}</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.purchase_date')}}:</strong>
                    <input type="date" name="purchase_date" class="form-control" placeholder="Purchase Date" required>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.delivery_date')}}:</strong>
                    <input type="date" name="delivery_date" class="form-control" placeholder="Delivery Date" required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.person_delivery')}}:</strong>
                    <input type="text" name="person_delivery_id" class="form-control" placeholder="Person Delivery ID"
                        required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.depreciation_rate')}}:</strong>
                    <input type="text" name="depreciation_rate" class="form-control" placeholder="Depreciation rate"
                        required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{__('welcome.submit')}}</button>
            </div>
        </div>
    </form>
@endsection