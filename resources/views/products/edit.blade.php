@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('welcome.back') }}</a>
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

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('welcome.product_name') }}:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                        placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{ __('welcome.detail') }}:</strong>
                    <textarea id="my-editor" class="form-control" style="height:150px" name="detail" placeholder="Detail">{!! $product->detail !!}</textarea>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="input-group">
                    <span class="input-group-btn">
                        <a id="my-editor" data-input="images" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> {{ __('welcome.choose') }}
                        </a>
                    </span>
                    <input id="images" class="form-control" type="text" name="images">
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{ __('welcome.submit') }}</button>
            </div>
        </div>
    </form>
    @push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#my-editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    @endpush
@endsection
