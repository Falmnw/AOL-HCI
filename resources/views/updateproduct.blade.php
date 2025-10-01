@extends('layout.master')
@section('title', 'update product')

@section('content')
    <div class="col-md-6 offset-md-3 mt-5">
        <h1>Update Product</h1>
        <form action="{{route('update-product', $product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="form-group mb-3">
                <label for="InputName">Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="InputName" required>
            </div>

            <div class="form-group mb-3">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category" required="required">
                    <option value="Network Scanning" {{ $product->category == 'Network Scanning' ? 'selected' : '' }}>Network Scanning</option>
                    <option value="Vulnerability Scanning" {{ $product->category == 'Vulnerability Scanning' ? 'selected' : '' }}>Vulnerability Scanning</option>
                    <option value="Exploitation Frameworks" {{ $product->category == 'Exploitation Frameworks' ? 'selected' : '' }}>Exploitation Frameworks</option>
                    <option value="OSINT" {{ $product->category == 'OSINT' ? 'selected' : '' }}>OSINT</option>
                    <option value="SIEM" {{ $product->category == 'SIEM' ? 'selected' : '' }}>SIEM</option>
                    <option value="Cryptography Tools" {{ $product->category == 'Cryptography Tools' ? 'selected' : '' }}>Cryptography Tools</option>
                    <option value="Digital Forensics" {{ $product->category == 'Digital Forensics' ? 'selected' : '' }}>Digital Forensics</option>
                    <option value="Other" {{ $product->category == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="InputDescription">Description</label>
                <input type="text" name="description" value="{{ $product->description }}" class="form-control" id="InputDescription" required>
            </div>

            <div class="form-group mt-3">
                <label class="mr-2">Picture</label>
                <input type="file" name="picture" class="form-control">
                @if($product->picture)
                    <div class="mt-2">
                        <p>Old Picture:</p>
                        <img src="{{ asset('storage/' . $product->picture) }}" alt="Product Picture" width="150">
                    </div>
                @endif
            </div>

            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
