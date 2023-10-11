@extends('layouts.welcome')

@section('content')
    <div class="container">
        <h1>Product Details</h1>
        <table class="table">
            <tr>
                <th>Name</th>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ $product->description }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>${{ $product->price }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>
                    @if ($product->image)
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" style="max-width: 300px;">
                    @else
                        No image available.
                    @endif
                </td>
            </tr>
        </table>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
    </div>
@endsection
