@extends('website.layouts.app')

@section('website.content') 

<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-5 text-center">
            <img src="https://www.solarsquare.in/blog/wp-content/uploads/2022/07/Best-Solar-Devices-For-Your-Home.jpg" 
                 class="product-img img-fluid rounded shadow-lg" 
                 alt="Product Image">
        </div>
        <div class="col-md-7">
            <h2 class="fw-bold">Product 1</h2>
            <p class="text-success fw-semibold">Special Price</p>
            <h3 class="text-danger">₹1000</h3>
            <p>
                <span class="rating text-warning fs-5">★★★★★</span> 
                <span class="text-muted">(500 Reviews)</span>
            </p>
            <p class="mt-3 text-secondary">
                <strong>Description:</strong> This is a high-quality product with great features and durability.
            </p>
            <div class="mt-4 d-flex gap-3">
                <button class="btn btn-warning px-4 py-2 shadow-sm">🛒 Add to Cart</button>
                <button class="btn btn-danger px-4 py-2 shadow-sm">⚡ Buy Now</button>
            </div>
            <div class="mt-4">
                <a href="{{ route('product') }}" class="btn btn-secondary px-4 py-2 shadow-sm">🔙 Back to Products</a>
            </div>
        </div>
    </div>
</div>

@endsection