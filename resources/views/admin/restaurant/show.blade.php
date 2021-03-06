@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Restaurant Details</h1>

    <div>
        <a href="/admin/restaurants"> < Back</a>
    </div>

    <strong>Name</strong>
    <p>{{ $restaurant->name }}</p>

    <strong>Category</strong>
    <p>{{ $restaurant->category }}</p>

    <strong>Image</strong>
    <p><img src="/storage/{{ $restaurant->image }}"></p>

    <div>
        <a href="/admin/restaurants/{{ $restaurant->id}}/edit">Edit</a>

        <form method="post" action="/admin/restaurants/{{ $restaurant->id }}">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form>
    </div>
</div>
@endsection 