@extends('layout')

@section('content')

@foreach ($categories as $category)

<div class="row">
    <h1>#{{ $category->id }} {{ $category->name }}</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category->products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>€ {{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
            </tr>    
            @endforeach
        </tbody>
    </table>
</div>

@endforeach

@endsection