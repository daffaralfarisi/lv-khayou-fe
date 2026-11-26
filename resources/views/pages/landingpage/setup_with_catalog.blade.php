<section id="catalogWithSetupImage" class="mb-5">
    <div class="container-fluid px-lg-5 position-relative">
        <div class="row g-0">
            <div class="col-md-6 wow slideInLeft animated mb-4" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInLeft;">
                <div class="catalogImage " style="">
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center wow slideInRight animated " data-wow-delay="100ms" data-wow-duration="2500ms" style="overflow: visible; visibility: visible; animation-delay: 200ms; animation-name: slideInRight;">
                <div class="catalogContent mb-3 p-lg-4 w-100">
                    <div>
                        <div class="owl-carousel owl-theme" id="productCarousel2">
                            @foreach ($products as $product)
                            <div class="item d-flex justify-content-center align-items-end">
                                <div class="product-card prodcard2" style="">
                                    <div class="product-badges">
                                        @if ($product['tags_type'] == 1)
                                        <span class="badge-custom badge-new">NEW</span>
                                        @elseif ($product['tags_type'] == 2)
                                        <span class="badge-custom badge-bestseller">BEST SELLER</span>
                                        @elseif ($product['tags_type'] == 3)
                                        <span class="badge-custom badge-limited">LIMITED STOCK</span>
                                        @elseif ($product['tags_type'] == 4)
                                        <span class="badge-custom badge-modular">MODULAR ADD-ONS</span>
                                        @endif
                                    </div>
                                   <div class="product-image-container">
                                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="product-image">
                                        <div class="quick-add-overlay">
                                            <button class="quick-add-btn" onclick="window.location.href='{{ url('/shop/' . $product['slug']) }}'">
                                                <i class="fas fa-plus me-2"></i>Quick add
                                            </button>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                    <h3 class="product-name">{{ $product['name'] }}</h3>
                                    <p class="product-price @if($product['tags_type'] == 2) fw-bold @endif">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                                    @if (isset($product['colors']))
                                    <div class="color-options">
                                        @foreach ($product['colors'] as $color)
                                            <div class="color-option color-{{ strtolower($color) }} @if ($loop->first) active @endif" onclick="selectColor(this)"></div>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Custom nav placed below the product cards -->
                        <div class="custom-owl-nav d-flex justify-content-center gap-2 mt-3">
                            <button type="button" class="btn btn-outline-dark rounded-pill owl-prev" aria-label="Previous"
                                data-target="#productCarousel2">
                                <i class="fas fa-chevron-left"></i> 
                            </button>
                            <button type="button" class="btn btn-outline-dark rounded-pill owl-next" aria-label="Next"
                                data-target="#productCarousel2">
                                 <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>
@section('scripts')
<script>

</script>
@endsection