@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add Service</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('services-update', $service)}}" method="post">

                        <div class="container">
                            <div class="row">
                                <div class="col-8">


                                    <div class="mb-3">
                                        <label class="form-label">Service Tile</label>
                                        <input type="text" class="form-control" name="title" value={{old('title', $service->title)}}>
                                        <div class="form-text">Please add service title here</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">Service Price</label>
                                        <input type="text" class="form-control" name="price" value={{old('price', $service->price)}}>
                                        <div class="form-text">Please add service here</div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label class="form-label">Service Category</label>
                                    <select class="form-select --cat--select" name="cat_id" data-url="{{route('services-colors')}}" data-url-name="{{route('services-color-name')}}">
                                        <option value="0">Cats list</option>
                                        @foreach($cats as $cat)
                                        <option value="{{$cat->id}}" @if($service->cat_id == $cat->id) selected @endif>{{$cat->title}} ({{$cat->colors_count}})</option>
                                        @endforeach
                                    </select>
                                    <div class="form-text">Please select service category here</div>
                                </div>
                                <div class="col-12">
                                    <div class="colors-selectors --colors--selectors">

                                        @foreach($service->color as $color)
                                        <div class="one-color">
                                            <input type="color" name="color[]" value={{$color->hex}}>
                                            <input type="hidden" name="name[]" value={{$color->title}}>
                                            <div class="color-view" style="background-color:{{$color->hex}};">{{$color->title}}</div>
                                        </div>
                                        @endforeach


                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="mt-5 btn btn-outline-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
