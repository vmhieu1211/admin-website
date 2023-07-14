@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Permissions Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('permissions.create') }}"> Create New Permission</a>
                <a class="btn btn-success" href="{{ route('users.index') }}"> User</a>
                <a class="btn btn-success" href="{{ route('products.index') }}"> Products</a>
                <a class="btn btn-success" href="{{ route('roles.index') }}"> Role</a>
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
            <th>Role Name</th>
            <th width="280px">Action</th>
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
                    <a class="btn btn-primary" href="{{ route('permissions.edit', $permission->id) }}">Edit</a>

                    {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['permissions.destroy', $permission->id],
                        'style' => 'display:inline',
                    ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
    </table>
    {{-- {!! $permission->render() !!} --}}
@endsection
