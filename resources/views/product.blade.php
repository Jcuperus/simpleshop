@extends('layout')

@section('content')

<div class="row">
    <div class="col">
        <h1>{{ $product->name }}</h1>
        <h4>Price: € {{ $product->price }}</h4>
        <h4>Stock: {{ $product->stock }} left</h4>
    </div>
</div>
<div class="row">
    <div class="col">
        <form method="POST" action="{{ route('product.comment', ['id' => $product->id]) }}">
            @csrf
            <div class="form-group">
                <label for="author" class="form-label">Name</label>
                <input type="text" class="form-control" id="author">
            </div>
            <div class="form-group">
                <label for="comment" class="form-label">Comment</label>
                <textarea name="comment" class="form-control" id="comment" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>



@endsection