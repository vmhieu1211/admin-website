@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Products</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $role)
                            <span class="badge rounded-pill bg-dark">{{ $role }}</span>
                        @endforeach
                    @endif
                </td>
                <td>
                    @if ($user->products->isNotEmpty())
                        @foreach ($user->products as $product)
                            <p>{{ $product->name }}</p>
                        @endforeach
                    @else
                        <p>No products</p>
                    @endif
                </td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>
                        @can('user-edit')
                            <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                        @endcan

                        @can('user-delete')
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $users->links() !!}
@endsection
