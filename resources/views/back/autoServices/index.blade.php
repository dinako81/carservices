@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Serviciess List</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($services as $service)
                        <li class="list-group-item">
                            <div class="services-list">
                                <div class="service">
                                    <div class="title-price">
                                        <div>
                                            <h2>{{$service->title}}<span>{{$service->price}} EUR</span></h2>

                                        </div>
                                        @if(Auth::user()->role < 5) <div class="buttons">
                                            <a href="{{route('services-edit', $service)}}" class="btn btn-outline-success">Edit</a>
                                            <form action="{{route('services-delete', $service)}}" method="post">
                                                <button type="submit" class="btn btn-outline-danger">delete</button>
                                                @csrf
                                                @method('delete')
                                            </form>
                                    </div>
                                    @endif
                                </div>
                                <div class="colors">
                                    @foreach($service->color as $color)
                                    <div class="color" style="background-color:{{$color->hex}};">
                                        {{$color->title}}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                </div>
                </li>
                @empty
                <li class="list-group-item">
                    <div class="cat-line">No services</div>
                </li>
                @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
