<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metro Essence</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #fff;
            color: #333;
        }
        .navbar {
            background-color: #fff;
            border-bottom: 1px solid #eee;
            padding: 15px 0;
        }
        .navbar-brand {
            font-family: 'Times New Roman', serif;
            font-weight: 300;
            letter-spacing: 2px;
            color: #5d1d48 !important;
        }
        .nav-link {
            color: #5d1d48 !important;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }
        /* Apply underline only to top-level nav links (not dropdown toggles) */
        .navbar-nav > .nav-item > .nav-link:not(.dropdown-toggle) {
            position: relative;
            color: #000;
            transition: color 0.3s ease;
        }

        .navbar-nav > .nav-item > .nav-link:not(.dropdown-toggle)::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            height: 2px;
            width: 0;
            background-color: #5d1d48;
            transition: width 0.3s ease;
            transform-origin: center;
        }

        .navbar-nav > .nav-item > .nav-link:not(.dropdown-toggle):hover::after {
            width: 100%;
        }
        .section-title {
            font-family: 'Times New Roman', serif;
            font-size: 1.5rem;
            font-weight: 400;
            color: #5d1d48;
            margin: 40px 0 30px;
            text-align: center;
            letter-spacing: 2px;
            text-transform: uppercase;
        }
        .product-img {
            max-width: 100%;
            height: auto;
        }
        .product-card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        .tag-btn, .btn-primary {
            font-size: 0.7rem;
            padding: 8px 15px;
            margin-top: 10px;
            border: none;
            background-color: #5d1d48;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 3px;
        }
        .btn-primary:hover {
            background-color: #4a1839;
        }
        footer {
            background-color: #f8f8f8;
            padding: 30px 0;
            margin-top: 50px;
            border-top: 1px solid #eee;
        }
        .footer-links {
            list-style: none;
            padding: 0;
        }
        .footer-links li {
            margin-bottom: 10px;
        }
        .footer-links a {
            color: #5d1d48;
            text-decoration: none;
            font-size: 0.9rem;
        }
        .social-icons {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .social-icons li {
            margin: 0 10px;
        }
        .social-icons a {
            color: #5d1d48;
            font-size: 1.2rem;
        }
        .hero-img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
        }
        .hero-content {
            position: absolute;
            top: 50%;
            left: 10%;
            transform: translateY(-50%);
            color: white;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }
        .hero-content h1 {
            font-size: 2.5rem;
            font-weight: 300;
            letter-spacing: 2px;
        }
        .shop-btn {
            background-color: #5d1d48;
            color: white;
            border: none;
            padding: 8px 20px;
            font-size: 0.9rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-decoration: none;
        }
        .hero-section {
            position: relative;
        }
        .carousel-item {
            transition: transform 0.3s ease-in-out;
        }
        .carousel-inner {
            display: flex;
        }
        .carousel-item img {
            max-height: 400px;
            object-fit: cover;
        }
        @media (max-width: 768px) {
            .row-cols-md-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 576px) {
            .row-cols-md-3 {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    @include('components.navbar')
    <!-- Hero Section -->
    <div class="hero-section">
        <img src="{{ asset('images/perfume.jpg') }}" class="hero-img" alt="Metro Essence Banner">
        <div class="hero-content">
            <h1>ELEGANCE IN EVERY SCENT</h1>
            <p>Discover the essence of luxury with our exclusive perfume collection.</p>
            <a href="{{ url('/shirt') }}" class="shop-btn">SHOP NOW</a>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="section-title">Choose What You Like</h2>
        <div class="row">
            @foreach($products as $product)
                @php
                    if ($product->image) {
                        if (Str::contains($product->image, '/')) {
                            // New style: full path
                            $imagePath = 'storage/' . $product->image;
                        } else {
                            // Old style: just filename
                            $imagePath = 'images/products/' . strtolower($product->type) . '/' . $product->image;
                        }
                    } else {
                        $imagePath = 'images/no-image.png';
                    }
                @endphp
                <div class="col-md-4">
                    <div class="product-card position-relative {{ $product->stock <= 0 ? 'out-of-stock' : '' }}">
                        <a href="{{ route('product.show', $product->product_id) }}" style="text-decoration: none; color: inherit; display: block;">
                            @if($product->stock <= 0)
                                <span class="out-of-stock-label">Out of Stock</span>
                            @endif

                            <img src="{{ asset($imagePath) }}" alt="{{ $product->name }}" class="product-img" loading="lazy" onerror="this.onerror=null;this.src='{{ asset('images/no-image.png') }}';">
                            <h5 class="mt-3">{{ $product->name }}</h5>
                            <h6 class="text-muted">{{ $product->price }} PHP</h6>
                            <div class="stock-status {{ $product->stock <= 0 ? 'text-danger' : 'text-success' }}">
                                {{ $product->stock <= 0 ? 'Out of Stock' : 'In Stock: ' . $product->stock }}
                            </div>
                            <p>{{ Str::limit($product->description, 100) }}</p>
                        </a>

                        @auth
                            <form method="POST" action="{{ url('/cart/add') }}" class="add-to-cart-form">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                <input type="hidden" name="product_name" value="{{ $product->name }}">
                                <input type="hidden" name="product_stock" value="{{ $product->stock }}">
                                <input type="hidden" name="quantity" value="1">
                                <button type="submit" class="btn btn-primary mt-2" {{ $product->stock <= 0 ? 'disabled' : '' }}>
                                    {{ $product->stock <= 0 ? 'Out of Stock' : 'Add to Cart' }}
                                </button>
                            </form>
                        @else
                            <a href="{{ url('/register') }}" class="btn btn-primary mt-2">Add to Cart</a>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
