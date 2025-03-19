@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Property Listings</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul>
    @foreach ($properties as $property)
        <li>
            <!-- Display the photo -->
            <img src="{{ asset('storage/' . $property->photo) }}" alt="{{ $property->title }}" width="150">
            
            <!-- Display property title and price -->
            <a href="/properties/{{ $property->id }}">
                {{ $property->title }} - ${{ $property->price }}
            </a>
        </li>
    @endforeach
</ul>
</div>
@endsection
