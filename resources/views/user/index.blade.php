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
            <th>{{__('welcome.no')}}</th>
            <th>{{__('welcome.user_name')}}</th>
            <th>{{__('welcome.email')}}</th>
            <th>{{__('welcome.role')}}</th>
            <th>{{__('welcome.user_products')}}</th>
            <th width="280px">{{__('welcome.action')}}</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $role)
                            <span class="badge rounded-pill bg-dark">{{ $role }}</span>
                        @endforeach
                    @endif
                </td>
                {{-- <td>
                    @if ($user->products->isNotEmpty())
                        @foreach ($user->products as $product)
                            <p>{{ $product->name }}</p>
                        @endforeach
                    @else
                        <p>No products</p>
                    @endif
                </td> --}}
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">{{__('welcome.show')}}</a>
                        @can('user-edit')
                            <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">{{__('welcome.edit')}}</a>
                        @endcan

                        @can('user-delete')
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">{{__('welcome.delete')}}</button>
                            </form>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $users->links() !!}
@endsection
