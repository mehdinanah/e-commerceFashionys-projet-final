@extends('layouts.app')

@section('content')
<div class="banner" style="background-image: url('/images/banner.jpg'); height: 400px; background-size: cover; display:flex; align-items:center; justify-content:center; text-align:center;">
    <div>
        <h1 class="text-white text-4xl font-bold">Welcome to Fashionys.com</h1>
        <p class="text-white mt-2">Shop Online for Latest Women Accessories</p>
        <a href="#" class="bg-pink-500 text-white px-4 py-2 mt-3 inline-block">SHOP WOMEN ACCESSORIES</a>
        
    </div>
    
</div>

<div class="features flex justify-around py-8 bg-gray-100 text-center">
    <div>
        <h3 class="font-bold">Easy Returns</h3>
        <p>Return any item before 15 days. No questions asked.</p>
    </div>
    <div>
        <h3 class="font-bold">Free Shipping</h3>
        <p>Enjoy free shipping in U.A.E. More countries to be added soon.</p>
    </div>
    <div>
        <h3 class="font-bold">Fast Delivery</h3>
        <p>Items are shipped in 24 hours.</p>
    </div>
</div>

<div class="products py-8">
    <h2 class="text-center font-bold text-xl">FEATURED PRODUCTS</h2>
    <div class="grid grid-cols-4 gap-6 mt-4">
        @foreach($featured as $product)
            <div class="border p-4 text-center">
                <img src="/images/{{ $product->image }}" class="mx-auto mb-2">
                <h3>{{ $product->name }}</h3>
                <p class="font-bold">${{ $product->price }}</p>
                @if($product->old_price)<p class="line-through text-gray-500">${{ $product->old_price }}</p>@endif
                <button class="bg-blue-900 text-white px-2 py-1 mt-2">Add to Cart</button>
            </div>
        @endforeach
    </div>
</div>

<div class="products py-8 bg-gray-100">
    <h2 class="text-center font-bold text-xl">LATEST PRODUCTS</h2>
    <div class="grid grid-cols-4 gap-6 mt-4">
        @foreach($latest as $product)
            <div class="border p-4 text-center">
                <img src="/images/{{ $product->image }}" class="mx-auto mb-2">
                <h3>{{ $product->name }}</h3>
                <p class="font-bold">${{ $product->price }}</p>
                @if($product->old_price)<p class="line-through text-gray-500">${{ $product->old_price }}</p>@endif
                <button class="bg-blue-900 text-white px-2 py-1 mt-2">Add to Cart</button>
            </div>
        @endforeach
    </div>
</div>

<div class="newsletter bg-purple-950 text-white text-center py-8">
    <h2 class="font-bold text-xl">SUBSCRIBE TO OUR NEWSLETTER</h2>
    <form class="mt-4">
        <input type="email" placeholder="Enter Your Email Address" class="p-2 mr-2">
        <button class="bg-gray-800 px-4 py-2">Subscribe</button>
    </form>
</div>
@endsection
