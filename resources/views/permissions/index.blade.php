@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Permissions Management</h2>
            </div>
            <div class="pull-right">
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
            <th>{{__('welcome.permission_name')}}</th>
            <th>{{__('welcome.role_name')}}</th>
            <th width="280px">{{__('welcome.action')}}</th>
        </tr>

        @foreach ($permissions as $key => $permission)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $permission->name }}</td>
                <td>
                    @foreach ($permission->roles as $role)
                        {{ $role->name }}
                    @endforeach
                </td>
                <td>
                    <a class="btn btn-info" href="{{ route('permissions.show', $permission->id) }}">{{__('welcome.show')}}</a>
                    @can('permission-edit')
                    <a class="btn btn-primary" href="{{ route('permissions.edit', $permission->id) }}">{{__('welcome.edit')}}</a>
                    @endcan
                    @can('permission-delete')
                    <form method="POST" action="{{ route('permissions.destroy', $permission->id) }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{__('welcome.delete')}}</button>
                    </form>
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>
    {{-- {!! $permission->render() !!} --}}
@endsection
