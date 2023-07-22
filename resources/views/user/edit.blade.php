@extends('layouts.layout')

   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
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
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.user_name')}}:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.email')}}:</strong>
                    <input class="form-control" style="height:40px" name="email" placeholder="" value="{{ $user->email }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{__('welcome.password')}}:</strong>
                    <input class="form-control" style="height:40px" name="password" placeholder="" value="{!!$user->password !!}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>{{__('welcome.role')}}:</strong>
            {{-- <select multiple="multiple" name="sports[]" id="sports" class="form-control">
                @foreach($role as $key => $roles)
                    @foreach($aItem->sports as $aItemKey => $aItemSport)
                        <option value="{{$aKey}}" @if($aKey == $aItemKey)selected="selected"@endif>{{$aSport}}</option>
                    @endforeach
                @endforeach
                </select> --}}
            
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection