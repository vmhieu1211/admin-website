@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('suggests.index') }}"> {{__('welcome.back')}}</a>
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

    <form action="{{ route('suggests.update', $suggest->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.product_name')}}:</strong>
                    <input type="text" name="products_name" value="{{ $suggest->products_name }}" class="form-control"
                        placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.amount')}}:</strong>
                    <input type="text" name="amount" value="{{ $suggest->amount }}" class="form-control"
                        placeholder="Amount">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.money')}}:</strong>
                    <input type="text" name="money" value="{{ $suggest->money }}" class="form-control"
                        placeholder="Money">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.suggest_type')}}:</strong>
                    <select name="suggest_type" class="form-control" required>
                        <option value="buy">{{__('welcome.buy')}}</option>
                        <option value="sell">{{__('welcome.sell')}}</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.asset_type')}}:</strong>
                    <select name="asset_type" class="form-control" required>
                        <option value="Computer">Máy tính</option>
                        <option value="Hardware devices">Thiết bị</option>
                        <option value="Work table">Bàn làm việc</option>
                        <option value="Swivel chair">Ghế</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.department_suggest')}}:</strong>
                    <select name="department_suggest" class="form-control" required>
                        <option value="Dev Team">Dev Team</option>
                        <option value="Marketing">Marketing</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.suggest_date')}}:</strong>
                    <input type="date" name="suggest_date" class="form-control" placeholder="Suggest Date" required>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.person_suggest')}}:</strong>
                    <input type="text" name="person_suggest_id" class="form-control" placeholder="Person Suggest"
                        required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.status')}}:</strong>
                    <select name="status" class="form-control" required>
                        <option value="not_approved">{{__('welcome.not_approved')}}</option>
                        <option value="approved">{{__('welcome.approved')}}</option>
                        <option value="done">{{__('welcome.done')}}</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{__('welcome.submit')}}</button>
            </div>
        </div>
    </form>
@endsection