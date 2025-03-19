@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Property</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/properties" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>

        <label>Bedrooms:</label>
        <input type="number" name="bedrooms" required>

        <label>Bathrooms:</label>
        <input type="number" name="bathrooms" required>

        <label>Location:</label>
        <input type="text" name="location" required>

        <label>Price:</label>
        <input type="number" step="0.01" name="price" required>

        <label>Type:</label>
        <select name="property_type" required>
            <option value="House">House</option>
            <option value="Apartment">Apartment</option>
        </select>

        <label>Description:</label>
        <textarea name="description"></textarea>

        <label>Photo:</label>
        <input type="file" name="photo">

        <button type="submit">Add Property</button>
    </form>
</div>
@endsection
