@extends('layout.master')
@section('title', 'add product')

@section('content')

   <div class="col-md-6 offset-md-3 mt-5">
        <h1>Add New Product</h1>
        <form action="{{route('create-product')}}" accept-charset="UTF-8" action="https://getform.io/f/{your-form-endpoint-goes-here}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="InputName">Name</label>
                <input type="text" name="name" class="form-control" id="InputName" placeholder="Enter product name" required="required">
            </div>
            <div class="form-group mb-3">
                <label for="inputToolCategory">Tool Category</label>
                <select class="form-control" id="inputToolCategory" name="category" required="required">
                <option>Network Scanning</option>
                <option>Vulnerability Scanning</option>
                <option>Exploitation Frameworks</option>
                <option>OSINT</option>
                <option>SIEM</option>
                <option>Cryptography Tools</option>
                <option>Digital Forensics</option>
                <option>Other</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="InputDescription">Description</label>
                <input type="text" name="description" class="form-control" id="InputDescription" placeholder="Enter product description" required="required">
            </div>
            <hr>
            <div class="form-group mt-3">
                <label class="mr-2">Picture</label>
                <input type="file" name="picture">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
