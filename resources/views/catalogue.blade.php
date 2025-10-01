@extends('layout.master')
@section('title', 'catalogue')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100 d-flex flex-column" style="width: 18rem;">
                <img src="{{asset('storage/' . $product->picture)}}" class="card-img-top" alt="{{ $product->name }}" style="height: 210px; object-fit: cover">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Category: {{$product->category}}</li>
                    <li class="list-group-item">Description: {{$product->description}}</li>
                </ul>
                <div class="card-body d-flex justify-content-between">
                    <a href="{{route('edit-product', $product->id)}}" class="btn btn-success ">Update</a>
                    <form action="{{route('delete-product', $product->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
