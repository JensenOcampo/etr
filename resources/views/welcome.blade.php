@extends('layouts.app')

@section('content')
    <section class="hero-section py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold text-primary mb-4">Welcome to National Book Store</h1>
                    <p class="lead mb-4">Your One-Stop Shop for Books, School Supplies, and Office Essentials</p>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-5">Start Shopping</a>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/600x400.png?text=NBS+Book+Collection" alt="Book Collection"
                        class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </section>
    <section class="categories-section py-5">
        <div class="container">
            <h2 class="text-center mb-5 text-primary">Shop by Category</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow border-0">
                        <img src="https://via.placeholder.com/400x300.png?text=Textbooks" class="card-img-top"
                            alt="Textbooks">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Textbooks</h5>
                            <p class="card-text">Find all your required school and college textbooks</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow border-0">
                        <img src="https://via.placeholder.com/400x300.png?text=School+Supplies" class="card-img-top"
                            alt="School Supplies">
                        <div class="card-body">
                            <h5 class="card-title text-primary">School Supplies</h5>
                            <p class="card-text">Notebooks, pens, art materials, and more</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow border-0">
                        <img src="https://via.placeholder.com/400x300.png?text=Best+Sellers" class="card-img-top"
                            alt="Best Sellers">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Best Sellers</h5>
                            <p class="card-text">Discover our most popular books</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="promo-banner py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Back to School Sale!</h2>
            <p class="fs-4">Get up to 30% off on selected school supplies</p>
            <div class="mt-4">
                <a href="#" class="btn btn-light btn-lg px-5">Shop Now</a>
            </div>
        </div>
    </section>

    <section class="products-section py-5">
        <div class="container">
            <h2 class="text-center mb-5 text-primary">New Arrivals</h2>
            <div class="row g-4">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="col-md-4">
                        <div class="card h-100 shadow border-0">
                            <img src="https://via.placeholder.com/400x500.png?text=Book+{{ $i }}"
                                class="card-img-top" alt="Book {{ $i }}">
                            <div class="card-body">
                                <h5 class="card-title">Book Title {{ $i }}</h5>
                                <p class="text-muted">Author Name</p>
                                <p class="text-primary fw-bold">₱499.00</p>
                                <button class="btn btn-outline-primary">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="newsletter-section py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4 text-primary">Stay Updated</h2>
            <p class="mb-4">Subscribe to our newsletter for exclusive offers and updates</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button class="btn btn-primary" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .hero-section {
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
                url('https://via.placeholder.com/1920x600.png?text=NBS+Background') center/cover;
        }

        .card {
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .promo-banner {
            background-color: #0056b3;
        }

        .btn-primary {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-primary:hover {
            background-color: #004494;
            border-color: #004494;
        }
    </style>
@endpush
