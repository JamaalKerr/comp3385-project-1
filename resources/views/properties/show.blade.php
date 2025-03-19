@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $property->title }}</h2>
    <p><strong>Location:</strong> {{ $property->location }}</p>
    <p><strong>Price:</strong> ${{ $property->price }}</p>
    <p><strong>Bedrooms:</strong> {{ $property->bedrooms }}</p>
    <p><strong>Bathrooms:</strong> {{ $property->bathrooms }}</p>
    <p><strong>Type:</strong> {{ $property->property_type }}</p>
    <p><strong>Description:</strong> {{ $property->description }}</p>
    @if ($property->photo)
        <img src="{{ asset('storage/' . $property->photo) }}" width="300">
    @endif
</div>
@endsection
