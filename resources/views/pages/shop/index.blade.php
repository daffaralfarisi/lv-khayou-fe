@extends('layouts.main')

@section('content')

<style>
    .featured-product-landscape {
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
    }

    .featured-product-landscape:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
    }

    .landscape-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        min-height: 400px;
        align-items: center;
    }

    .landscape-image-section {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .landscape-product-image {
        max-width: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .featured-product-landscape:hover .landscape-product-image {
        transform: scale(1.05);
    }

    .landscape-badge {
        position: absolute;
        top: 20px;
        left: 20px;
        background: #6B7280;
        color: white;
        font-size: 12px;
        font-weight: 700;
        padding: 6px 16px;
        border-radius: 25px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        z-index: 10;
    }

    .landscape-info-section {
        padding: 40px 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
    }

    .landscape-title {
        font-size: 2.25rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 12px;
        line-height: 1.2;
    }

    .landscape-price {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 16px;
    }

    .landscape-rating {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 24px;
    }

    .landscape-stars {
        display: flex;
        gap: 4px;
    }

    .landscape-star {
        color: #fbbf24;
        font-size: 18px;
    }

    .landscape-review-count {
        color: #6b7280;
        font-size: 16px;
        font-weight: 500;
    }

    .landscape-options {
        margin-bottom: 32px;
    }

    .landscape-option-group {
        margin-bottom: 20px;
    }

    .landscape-option-label {
        font-size: 16px;
        font-weight: 600;
        color: #374151;
        margin-bottom: 12px;
        display: block;
    }


    .landscape-add-to-cart {
        background: #1f2937;
        color: white;
        border: none;
        padding: 14px 32px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.2s ease;
        flex: 1;
        margin-bottom: 1rem;
    }

    .landscape-add-to-cart:hover {
        background: #111827;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(31, 41, 55, 0.3);
    }

    .landscape-stock-info {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #059669;
        font-weight: 500;
    }

    .landscape-features {
        margin-top: 24px;
        padding-top: 24px;
        border-top: 1px solid #e5e7eb;
    }

    .landscape-feature-list {
        display: flex;
        gap: 24px;
        flex-wrap: wrap;
    }

    .landscape-feature {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #6b7280;
    }

    .landscape-feature-icon {
        font-size: 16px;
        color: #10b981;
    }

    @media (max-width: 992px) {
        .landscape-content {
            grid-template-columns: 1fr;
        }

        .landscape-info-section {
            padding: 30px;
        }

        .landscape-title {
            font-size: 1.875rem;
        }

        .landscape-cart-section {
            flex-direction: column;
            align-items: stretch;
            gap: 16px;
        }

        .landscape-add-to-cart {
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .landscape-info-section {
            padding: 20px;
        }

        .landscape-title {
            font-size: 1.5rem;
        }

        .landscape-feature-list {
            flex-direction: column;
            gap: 12px;
        }
    }

</style>
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>

@include('pages.shop.header' , ['data' => ['title' => $title ?? '']])

<div class="container">
    <div class="row">
        <div class="col-12 text-center my-5">
            <h2>Welcome to the Khayou Set Bundle Shop!</h2>
            <p>Explore our exclusive collection of Khayou Set Bundles designed to enhance your workspace.</p>
        </div>
    </div>

    <!-- Featured Product Landscape Card -->
    <div class="row">
        <div class="col-12 mb-5">
            <div class="featured-product-landscape">
                <div class="landscape-content">
                    <!-- Image Section -->
                    <div class="landscape-image-section">
                        <div class="landscape-badge">BESTSELLER</div>
                        <img src="{{ asset($products['image']) }}" alt="{{ $products['name'] }}"
                            class="landscape-product-image"
                            onerror="this.src='{{ asset('images/placeholder-product.jpg') }}'">
                    </div>

                    <!-- Info Section -->
                    <div class="landscape-info-section">
                        <h1 class="landscape-title">{{$products['name']}}</h1>
                        <div class="landscape-price">Rp {{ number_format($products['price'] ?? 0, 0, ',', '.') }}</div>

                        <!-- Add to Cart Section -->
                        <div class="landscape-cart-section">
                            <button class="landscape-add-to-cart" target="_blank"
                                onclick="window.open('https://www.tokopedia.com/archive-mrk1506-1726099264', '_blank')">
                                Buy Now • Rp {{ number_format($products['price'] ?? 0, 0, ',', '.') }}
                            </button>
                        </div>

                        <!-- Stock Info -->
                        <div class="landscape-stock-info">
                            <i class="fas fa-truck"></i>
                            <span>All of our products are ready stock! To place an order, please click the Buy Now
                                button and you will be redirected to Tokopedia. Thank you for your trust.</span>
                        </div>

                        <!-- Features -->
                        <div class="landscape-features">
                            <div class="landscape-feature-list">
                                <div class="landscape-feature">
                                    <i class="fas fa-shield-alt landscape-feature-icon"></i>
                                    <span>Made from solid wood</span>
                                </div>
                                <div class="landscape-feature">
                                    <i class="fas fa-swatchbook landscape-feature-icon"></i>
                                    <span>Modern design</span>
                                </div>
                                <div class="landscape-feature">
                                    <i class="fas fa-tags landscape-feature-icon"></i>
                                    <span>Affordable Price</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    @include('pages.shop.banner')

    <div class="row">
        <div class="col-12 text-center my-5">
            <h3 class="mb-5">Our Exclusive Products</h3>
            @if(!empty($products['sub_items']) && count($products['sub_items']))
            <div class="row">
                @foreach($products['sub_items'] as $item)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="product-card">
                        <div class="product-badges">
                            <span class="badge-custom badge-khayou">NEW</span>
                        </div>
                        <div class="product-image-container">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] ?? 'Product image' }}"
                                class="product-image">
                            <div class="quick-add-overlay">
                                <button class="quick-add-btn"
                                    onclick="window.location.href='/shop/{{ $item['slug'] ?? '#' }}'">
                                    <i class="fas fa-eye me-2"></i>Show Detail
                                </button>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="product-name fw-bold mb-0">
                                    {{ $item['name'] ?? $item['title'] ?? 'Untitled' }}</h3>
                                <p class="product-price mb-0 text-end ">Rp
                                    {{ number_format($item['price'] ?? 0, 0, ',', '.') }}</p>
                            </div>
                            <p class="product-description mt-2 text-start fs-6 lh-md" 
                            style="
                            display: -webkit-box;   
                            -webkit-line-clamp: 2; 
                            -webkit-box-orient: vertical; 
                            overflow: hidden;">
                                {{ $item['description'] ?? 'No description available.' }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-center text-muted">Belum ada produk untuk ditampilkan.</p>
            @endif
        </div>
    </div>

</div>

@endsection
