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
        <form method="POST" action="{{ route('product.review', ['id' => $product->id]) }}">
            @csrf
            <div class="form-group">
                <label for="author" class="form-label">Name</label>
                <input name="author" type="text" class="form-control" id="author">
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Review message</label>
                <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="rating" class="form-label">Rating</label>
                <input name="rating" type="number" class="form-control" id="rating">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col">
        @foreach ($product->reviews as $review)
            <h4>{{ $review->author }} says: </h4>
            <p>{{ $review->message }}</p>
            <div style="color: #ff922b">
                @for ($i = 0; $i < $review->rating; $i++)
                    <i class="fas fa-star"></i>
                @endfor
            </div>
            
            <hr>
        @endforeach
    </div>
</div>



@endsection