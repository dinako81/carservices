@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add Category</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('products-store')}}" method="post">
                        <div class="mb-3">
                            <label class="form-label">Product Title</label>
                            <input type="text" class="form-control" name="title" value={{old('title')}}>
                            <div class="form-text">Please add product title here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Price</label>
                            <input type="text" class="form-control" name="price" value={{old('price')}}>
                            <div class="form-text">Please add product price here</div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
