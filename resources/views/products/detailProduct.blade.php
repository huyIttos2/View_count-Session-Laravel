@extends('master')
@section('content')
    <div class="title m-b-md">
        Chi tiet san pham
    </div>
    <div class="row">
        @if(!isset($product))
            <p class="text text-danger">Khong co san pham nao</p>
            @else
        <div class="col-12">
            <div class="card text-left" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">{{ $product->price }}</p>
                    <p class="card-text">{{ $product->view_count }}</p>
                    <a href="{{ route('index') }}" class="btn btn-primary">Quay lai</a>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
