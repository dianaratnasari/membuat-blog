@extends('layouts/main')

@section('container')

<h2 class="mb-3">Post Categories</h2>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}" class="text-decoration-none">
                <div class="card bg-dark text-white">
                    <img src="https://picsum.photos/500/500?{{$category->name}}" class="card-img" alt="{{$category->name}}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title flex-fill text-center p-3 fs-3" style="background-color : rgba(0,0,0,0.7)"> {{ $category->name}}</h5>

                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>




@endsection