@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12">
            <div class="card mt-5">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <ul class="list-group">

                        <li class="list-group-item">
                            <div class="cat">
                                <div class="cat-info">
                                    <h2><i>{{$cat->title}}</i></h2>
                                    ******
                                    {{-- {{$cat->catService()}} --}}
                                </div>

                                {{-- {{dump($cat->catService)}}
                                {{die}} --}}
                                @foreach($cat->catService as $onecat)
                                {{dump($onecat->title)}}
                                {{die}}
                                <option value="">{{$onecat->catService->title}}</option>
                                {{$onecat->catService->title}}
                                @endforeach

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
