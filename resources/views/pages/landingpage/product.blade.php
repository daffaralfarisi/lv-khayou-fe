<section class="products-section">
    <div class="container">
        <h2 class="section-title fw-bold wow fadeInLeft animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">Our Favorites</h2>
        
        <div class="product-carousel wow fadeInRight animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
            <div class="owl-carousel owl-theme" id="productCarousel">

                @foreach ($products as $product)
                <div class="item">
                    <div class="product-card">
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
        </div>
    </div>
</section>

@section('scripts')
<script>
    $(document).ready(function(){
        $("#productCarousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: [
                '<i class="fas fa-chevron-left"></i>',
                '<i class="fas fa-chevron-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                576: {
                    items: 2,
                    nav: false
                },
                768: {
                    items: 2,
                    nav: true
                },
                992: {
                    items: 3,
                    nav: true
                },
                1200: {
                    items: 4,
                    nav: true
                }
            }
        });

        $("#productCarousel2").owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplay: false,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: [
                '<i class="fas fa-chevron-left"></i>',
                '<i class="fas fa-chevron-right"></i>'
            ],
            center: true,                // center the active item
            items: 1,                    // always show 1 card
            stagePadding: 5,   
        });
    });
</script>
<script>
                        (function ($) {
                            $(function () {
                                var $carousel = $('#productCarousel2');

                                if (!$carousel.length) return;

                                // Initialize Owl Carousel (customize options as needed)
                                $carousel.owlCarousel({
                                    items: 1,
                                    loop: true,
                                    margin: 20,
                                    nav: false,
                                    dots: false,
                                    responsive: {
                                        576: { items: 1 },
                                        768: { items: 2 },
                                        992: { items: 2 },
                                        1200: { items: 3 }
                                    }
                                });

                                // Wire custom nav buttons
                                $('.custom-owl-nav').on('click', '.owl-prev', function () {
                                    $carousel.trigger('prev.owl.carousel');
                                });
                                $('.custom-owl-nav').on('click', '.owl-next', function () {
                                    $carousel.trigger('next.owl.carousel');
                                });

                                // Optional: update disabled state if you want (when not looping)
                                // $carousel.on('changed.owl.carousel', function(event) { ... });
                            });
                        })(jQuery);
                    </script>
@endsection