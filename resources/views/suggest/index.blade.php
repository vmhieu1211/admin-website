@extends('layouts.layout')

@section('content')
    @csrf
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
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
            <th>{{__('welcome.product_name')}}</th>
            <th>{{__('welcome.amount')}}</th>
            <th>{{__('welcome.money')}}</th>
            <th>{{__('welcome.type')}}</th>
            <th>{{__('welcome.asset_type')}}</th>
            <th>{{__('welcome.person_suggest')}}</th>
            <th>{{__('welcome.department_suggest')}}</th>
            <th>{{__('welcome.suggest_date')}}</th>
            <th>{{__('welcome.status')}}</th>
            <th width="280px">{{__('welcome.action')}}</th>

        </tr>
        @foreach ($suggests as $suggests)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $suggests->products_name }}</td>
                <td>{{ $suggests->amount }}</td>
                <td>{{ $suggests->money }}</td>
                <td>{{ $suggests->suggest_type }}</td>
                <td>{{ $suggests->asset_type }}</td>
                <td>{{ $suggests->personSuggest->name }}</td>
                <td>{{ $suggests->department_suggest }}</td>
                <td>{{ $suggests->suggest_date }}</td>
                <td>{{ $suggests->status }}</td>
                <td>
                    <form action="{{ route('suggests.destroy', $suggests->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('suggests.show', $suggests->id) }}">{{__('welcome.show')}}</a>
                        <a class="btn btn-primary" href="{{ route('suggests.edit', $suggests->id) }}">{{__('welcome.edit')}}</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{__('welcome.delete')}}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
