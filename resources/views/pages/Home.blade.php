<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('main')
    <!-- Intro Section -->
    <section id="collection-products" class="py-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="relative group">
                    <img src="images/collection-item1.jpg" alt="product-item" class="rounded-lg w-full object-cover">
                    <div class="absolute bottom-0 left-0 bg-gradient-to-t from-black via-transparent p-6 rounded-lg text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-3xl font-bold">
                            <a href="#" class="hover:underline">Minimal Collection</a>
                        </h3>
                        <a href="index.html" class="mt-3 inline-block uppercase font-bold text-yellow-400 hover:text-yellow-500">Shop Now</a>
                    </div>
                </div>
                <div class="relative group">
                    <img src="images/collection-item2.jpg" alt="product-item" class="rounded-lg w-full object-cover">
                    <div class="absolute bottom-0 left-0 bg-gradient-to-t from-black via-transparent p-6 rounded-lg text-white opacity-0 group-hover:opacity-100 transition-opacity">
                        <h3 class="text-3xl font-bold">
                            <a href="#" class="hover:underline">Sneakers Collection</a>
                        </h3>
                        <a href="index.html" class="mt-3 inline-block uppercase font-bold text-yellow-400 hover:text-yellow-500">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Discount Section -->
    <section class="py-6 bg-gray-100">
        <div class="container mx-auto">
            <div class="bg-white p-8 rounded-lg shadow-md relative">
                <div class="absolute top-0 left-0 text-5xl font-bold text-gray-300 opacity-10">10% OFF</div>
                <div class="flex flex-col lg:flex-row justify-between items-center">
                    <div>
                        <h2 class="text-2xl font-bold">10% OFF Discount Coupons</h2>
                        <p class="mt-2 text-gray-600">Subscribe to get 10% OFF on all purchases</p>
                    </div>
                    <a href="#" class="mt-4 lg:mt-0 bg-black text-white py-3 px-6 rounded-lg uppercase font-bold hover:bg-gray-800">Email me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="featured-products" class="py-6">
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold uppercase">Featured Products</h2>
                <a href="{{ route('products.all') }}" class="uppercase font-bold text-blue-500 hover:underline">View all</a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                @foreach ($featuredProducts as $product)
                    <div class="border rounded-lg p-4 shadow-md hover:shadow-lg">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="rounded-lg w-full h-48 object-cover">
                        <div class="flex justify-between items-center mt-3">
                            <h3 class="text-sm font-medium">
                                <a href="{{ route('product.details', $product['id']) }}" class="hover:underline">{{ $product['name'] }}</a>
                            </h3>
                            <span class="font-bold text-lg">${{ $product['price'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Latest Products Section -->
    <section id="latest-products" class="py-6">
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold uppercase">Latest Products</h2>
                <a href="{{ route('products.all') }}" class="uppercase font-bold text-blue-500 hover:underline">View all</a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                @foreach ($latestProducts as $product)
                    <div class="border rounded-lg p-4 shadow-md hover:shadow-lg">
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="rounded-lg w-full h-48 object-cover">
                        <div class="flex justify-between items-center mt-3">
                            <h3 class="text-sm font-medium">
                                <a href="{{ route('product.details', $product['id']) }}" class="hover:underline">{{ $product['name'] }}</a>
                            </h3>
                            <span class="font-bold text-lg">${{ $product['price'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
