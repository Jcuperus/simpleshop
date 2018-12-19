@extends('layout')

@section('content')

<h1>Products list</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Categories</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>€ {{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>
                @foreach ($product->categories as $category)
                    {{ $category->name }} 
                @endforeach
            </td>
        </tr>    
        @endforeach
    </tbody>
</table>

@endsection