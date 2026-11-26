@extends('layouts.main')

@section('content')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>

<style>
    .product-detail-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 40px 20px;
    }
    
    .product-detail-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        align-items: start;
    }
    
    /* Product Gallery Styles */
    .product-gallery {
        position: sticky;
        top: 100px;
    }
    
    .main-product-image {
        width: 100%;
        aspect-ratio: 4/3;
        background: #f8f9fa;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 20px;
        position: relative;
    }
    
    .main-product-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }
    
    .main-product-image:hover img {
        transform: scale(1.05);
    }
    
    .product-thumbnails {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 12px;
    }
    
    .thumbnail {
        aspect-ratio: 1;
        background: #f8f9fa;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
        border: 2px solid transparent;
        transition: all 0.2s ease;
    }
    
    .thumbnail.active {
        border-color: #1f2937;
    }
    
    .thumbnail:hover {
        border-color: #6b7280;
    }
    
    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    /* Product Info Styles */
    .product-info {
        padding-left: 20px;
    }
    
    .product-badge {
        display: inline-block;
        background: #6B7280;
        color: white;
        font-size: 11px;
        font-weight: 700;
        padding: 6px 16px;
        border-radius: 25px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 16px;
    }
    
    .product-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 16px;
        line-height: 1.2;
    }
    
    .product-price {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 20px;
    }
    
    .product-rating {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 32px;
    }
    
    .rating-stars {
        display: flex;
        gap: 4px;
    }
    
    .rating-star {
        color: #fbbf24;
        font-size: 18px;
    }
    
    .rating-count {
        color: #6b7280;
        font-size: 16px;
        font-weight: 500;
    }
    
    /* Product Options */
    .product-options {
        margin-bottom: 40px;
    }
    
    .option-group {
        margin-bottom: 24px;
    }
    
    .option-label {
        font-size: 16px;
        font-weight: 600;
        color: #374151;
        margin-bottom: 12px;
        display: block;
    }
    
    .size-options {
        display: flex;
        gap: 12px;
        margin-bottom: 8px;
    }
    
    .size-option {
        border: 2px solid #d1d5db;
        background: #fff;
        color: #374151;
        padding: 12px 24px;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
        min-width: 100px;
    }
    
    .size-option.active {
        background: #1f2937;
        color: white;
        border-color: #1f2937;
    }
    
    .size-option:hover {
        border-color: #1f2937;
    }
    
    .material-options {
        display: flex;
        gap: 12px;
        align-items: center;
    }
    
    .material-option {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        border: 3px solid transparent;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .material-option.active {
        border-color: #1f2937;
        transform: scale(1.1);
    }
    
    .material-option.walnut { background-color: #8B4513; }
    .material-option.oak { background-color: #D2B48C; }
    .material-option.black { background-color: #2C2C2C; }
    
    .material-label {
        font-size: 14px;
        color: #6b7280;
        margin-left: 8px;
    }
    
    /* Add to Cart Section */
    .add-to-cart-section {
        margin-bottom: 32px;
    }
    
    .quantity-cart-row {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 20px;
    }
    
    .quantity-controls {
        display: flex;
        align-items: center;
        border: 2px solid #d1d5db;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
    }
    
    .quantity-btn {
        background: #f9fafb;
        border: none;
        padding: 14px 18px;
        cursor: pointer;
        transition: background 0.2s ease;
        font-size: 18px;
        font-weight: 600;
        color: #374151;
        min-width: 50px;
    }
    
    .quantity-btn:hover {
        background: #e5e7eb;
    }
    
    .quantity-input {
        border: none;
        text-align: center;
        width: 70px;
        padding: 14px 8px;
        font-size: 16px;
        font-weight: 600;
        background: #fff;
        color: #1f2937;
    }
    
    .add-to-cart-btn {
        background: #1f2937;
        color: white;
        border: none;
        padding: 16px 32px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.2s ease;
        flex: 1;
        max-width: 300px;
    }
    
    .add-to-cart-btn:hover {
        background: #111827;
        transform: translateY(-1px);
    }
    
    .accessories-note {
        font-size: 14px;
        color: #6b7280;
        margin-bottom: 16px;
    }
    
    .stock-info {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #059669;
        font-weight: 500;
        margin-bottom: 24px;
    }
    
    .guarantee-info {
        display: flex;
        gap: 32px;
        padding-top: 24px;
        border-top: 1px solid #e5e7eb;
    }
    
    .guarantee-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #6b7280;
    }
    
    .guarantee-icon {
        font-size: 16px;
        color: #10b981;
    }
    
    /* Add Accessories Section */
    .accessories-section {
        grid-column: 1 / -1;
        margin-top: 60px;
        padding-top: 40px;
        border-top: 2px solid #e5e7eb;
    }
    
    .accessories-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 32px;
    }
    
    .accessories-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1f2937;
    }
    
    .accessories-total {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1f2937;
    }
    
    .accessories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }
    
    .accessory-item {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 16px;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        transition: all 0.2s ease;
    }
    
    .accessory-item:hover {
        border-color: #d1d5db;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    
    .accessory-image {
        width: 60px;
        height: 60px;
        background: #f8f9fa;
        border-radius: 8px;
        overflow: hidden;
        flex-shrink: 0;
    }
    
    .accessory-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .accessory-info {
        flex: 1;
    }
    
    .accessory-name {
        font-size: 14px;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 4px;
    }
    
    .accessory-price {
        font-size: 14px;
        color: #6b7280;
    }
    
    .accessory-toggle {
        position: relative;
        width: 48px;
        height: 24px;
        background: #e5e7eb;
        border-radius: 12px;
        cursor: pointer;
        transition: background 0.2s ease;
    }
    
    .accessory-toggle.active {
        background: #1f2937;
    }
    
    .accessory-toggle::after {
        content: '';
        position: absolute;
        top: 2px;
        left: 2px;
        width: 20px;
        height: 20px;
        background: white;
        border-radius: 50%;
        transition: transform 0.2s ease;
    }
    
    .accessory-toggle.active::after {
        transform: translateX(24px);
    }
    
    /* Responsive */
    @media (max-width: 1024px) {
        .product-detail-grid {
            gap: 40px;
        }
        
        .product-info {
            padding-left: 0;
        }
    }
    
    @media (max-width: 768px) {
        .product-detail-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .product-gallery {
            position: static;
        }
        
        .product-title {
            font-size: 2rem;
        }
        
        .quantity-cart-row {
            flex-direction: column;
            align-items: stretch;
            gap: 16px;
        }
        
        .add-to-cart-btn {
            max-width: 100%;
        }
        
        .guarantee-info {
            flex-direction: column;
            gap: 16px;
        }
        
        .accessories-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="product-detail-container">
    <div class="product-detail-grid">
        <!-- Product Gallery -->
        <div class="product-gallery">
            <div class="main-product-image">
                <img src="{{ asset('images/products/setup-cockpit-main.jpg') }}" 
                     alt="Setup Cockpit Monitor Stand Large"
                     id="mainProductImage"
                     onerror="this.src='{{ asset('images/products/ledgy/IMG_7183_1.webp') }}'">
            </div>
            
            <div class="product-thumbnails">
                <div class="thumbnail active" onclick="changeMainImage(this, '{{ asset('images/products/setup-cockpit-main.jpg') }}')">
                    <img src="{{ asset('images/products/setup-cockpit-main.jpg') }}" alt="Main view">
                </div>
                <div class="thumbnail" onclick="changeMainImage(this, '{{ asset('images/products/setup-cockpit-side.jpg') }}')">
                    <img src="{{ asset('images/products/setup-cockpit-side.jpg') }}" alt="Side view">
                </div>
                <div class="thumbnail" onclick="changeMainImage(this, '{{ asset('images/products/setup-cockpit-angle.jpg') }}')">
                    <img src="{{ asset('images/products/setup-cockpit-angle.jpg') }}" alt="Angle view">
                </div>
                <div class="thumbnail" onclick="changeMainImage(this, '{{ asset('images/products/setup-cockpit-detail.jpg') }}')">
                    <img src="{{ asset('images/products/setup-cockpit-detail.jpg') }}" alt="Detail view">
                </div>
            </div>
        </div>
        
        <!-- Product Info -->
        <div class="product-info">
            <div class="product-badge">BESTSELLER</div>
            
            <h1 class="product-title">Setup Cockpit Monitor Stand Large</h1>
            
            <div class="product-price">$279.90 USD</div>
            
            <div class="product-rating">
                <div class="rating-stars">
                    <i class="fas fa-star rating-star"></i>
                    <i class="fas fa-star rating-star"></i>
                    <i class="fas fa-star rating-star"></i>
                    <i class="fas fa-star rating-star"></i>
                    <i class="fas fa-star rating-star"></i>
                </div>
                <span class="rating-count">836 reviews</span>
            </div>
            
            <!-- Product Options -->
            <div class="product-options">
                <!-- Size -->
                <div class="option-group">
                    <span class="option-label">Size: Large</span>
                    <div class="size-options">
                        <button class="size-option" onclick="selectOption(this, 'size')">Medium</button>
                        <button class="size-option active" onclick="selectOption(this, 'size')">Large</button>
                    </div>
                </div>
                
                <!-- Material -->
                <div class="option-group">
                    <span class="option-label">Material: American Walnut</span>
                    <div class="material-options">
                        <div class="material-option walnut active" onclick="selectOption(this, 'material')" title="American Walnut"></div>
                        <div class="material-option oak" onclick="selectOption(this, 'material')" title="Oak"></div>
                        <div class="material-option black" onclick="selectOption(this, 'material')" title="All Black"></div>
                    </div>
                </div>
            </div>
            
            <!-- Add to Cart -->
            <div class="add-to-cart-section">
                <div class="quantity-cart-row">
                    <div class="quantity-controls">
                        <button class="quantity-btn" onclick="changeQuantity(-1)">−</button>
                        <input type="number" class="quantity-input" value="1" min="1" max="10" id="productQuantity">
                        <button class="quantity-btn" onclick="changeQuantity(1)">+</button>
                    </div>
                    <button class="add-to-cart-btn" onclick="addToCart()">
                        Add to cart • $279.90
                    </button>
                </div>
                
                <div class="accessories-note">You have <span id="accessoryCount">0</span> accessories selected</div>
                
                <div class="stock-info">
                    <i class="fas fa-truck"></i>
                    <span>In stock! Estimated date of dispatch by <strong>Monday, 22nd September</strong>. If you order within 23 hours, 4 minutes.</span>
                </div>
                
                <div class="guarantee-info">
                    <div class="guarantee-item">
                        <i class="fas fa-shield-alt guarantee-icon"></i>
                        <span>30 Day Return Policy</span>
                    </div>
                    <div class="guarantee-item">
                        <i class="fas fa-smile guarantee-icon"></i>
                        <span>Over 87,549 happy customers</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Add Accessories Section -->
        <div class="accessories-section">
            <div class="accessories-header">
                <h2 class="accessories-title">Add Accessories</h2>
                <div class="accessories-total">$0.00 USD</div>
            </div>
            
            <div class="accessories-grid">
                <div class="accessory-item">
                    <div class="accessory-image">
                        <img src="{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}" alt="Cable Organizer" onerror="this.src='{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}'">
                    </div>
                    <div class="accessory-info">
                        <div class="accessory-name">Cable Organizer for Setup Cockpit Monitor Stand</div>
                        <div class="accessory-price">$29.90 USD</div>
                    </div>
                    <div class="accessory-toggle" onclick="toggleAccessory(this, 29.90)"></div>
                </div>
                
                <div class="accessory-item">
                    <div class="accessory-image">
                        <img src="{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}" alt="Desk Mat" onerror="this.src='{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}'">
                    </div>
                    <div class="accessory-info">
                        <div class="accessory-name">Premium Desk Mat for Setup Cockpit</div>
                        <div class="accessory-price">$49.90 USD</div>
                    </div>
                    <div class="accessory-toggle" onclick="toggleAccessory(this, 49.90)"></div>
                </div>
                
                <div class="accessory-item">
                    <div class="accessory-image">
                        <img src="{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}" alt="Monitor Arm" onerror="this.src='{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}'">
                    </div>
                    <div class="accessory-info">
                        <div class="accessory-name">Adjustable Monitor Arm for Setup Cockpit</div>
                        <div class="accessory-price">$89.90 USD</div>
                    </div>
                    <div class="accessory-toggle" onclick="toggleAccessory(this, 89.90)"></div>
                </div>
                
                <div class="accessory-item">
                    <div class="accessory-image">
                        <img src="{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}" alt="Cable Tray" onerror="this.src='{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}'">
                    </div>
                    <div class="accessory-info">
                        <div class="accessory-name">Under-Desk Cable Tray for Setup Cockpit</div>
                        <div class="accessory-price">$39.90 USD</div>
                    </div>
                    <div class="accessory-toggle" onclick="toggleAccessory(this, 39.90)"></div>
                </div>
                
                <div class="accessory-item">
                    <div class="accessory-image">
                        <img src="{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}" alt="USB Hub" onerror="this.src='{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}'">
                    </div>
                    <div class="accessory-info">
                        <div class="accessory-name">4-Port USB Hub for Setup Cockpit</div>
                        <div class="accessory-price">$24.90 USD</div>
                    </div>
                    <div class="accessory-toggle" onclick="toggleAccessory(this, 24.90)"></div>
                </div>
                
                <div class="accessory-item">
                    <div class="accessory-image">
                        <img src="{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}" alt="Desk Shelf" onerror="this.src='{{ asset('images/products/ledgy/IMG_7183_1.jpg') }}'">
                    </div>
                    <div class="accessory-info">
                        <div class="accessory-name">Floating Desk Shelf for Setup Cockpit</div>
                        <div class="accessory-price">$69.90 USD</div>
                    </div>
                    <div class="accessory-toggle" onclick="toggleAccessory(this, 69.90)"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let selectedAccessories = [];
    let accessoryTotal = 0;
    
    function changeMainImage(thumbnail, imageSrc) {
        document.getElementById('mainProductImage').src = imageSrc;
        
        // Update active thumbnail
        document.querySelectorAll('.thumbnail').forEach(thumb => thumb.classList.remove('active'));
        thumbnail.classList.add('active');
    }
    
    function selectOption(element, type) {
        if (type === 'size') {
            document.querySelectorAll('.size-option').forEach(opt => opt.classList.remove('active'));
            element.classList.add('active');
            
            // Update size label
            const label = document.querySelector('.option-label');
            label.textContent = `Size: ${element.textContent}`;
        } else if (type === 'material') {
            document.querySelectorAll('.material-option').forEach(opt => opt.classList.remove('active'));
            element.classList.add('active');
            
            // Update material label
            const labels = document.querySelectorAll('.option-label');
            labels[1].textContent = `Material: ${element.title}`;
        }
    }
    
    function changeQuantity(change) {
        const input = document.getElementById('productQuantity');
        const currentValue = parseInt(input.value);
        const newValue = Math.max(1, Math.min(10, currentValue + change));
        input.value = newValue;
        
        updateCartButton();
    }
    
    function updateCartButton() {
        const quantity = parseInt(document.getElementById('productQuantity').value);
        const basePrice = 279.90;
        const totalPrice = (basePrice * quantity + accessoryTotal).toFixed(2);
        
        document.querySelector('.add-to-cart-btn').textContent = `Add to cart • $${totalPrice}`;
    }
    
    function toggleAccessory(toggle, price) {
        const isActive = toggle.classList.contains('active');
        
        if (isActive) {
            toggle.classList.remove('active');
            accessoryTotal -= price;
            selectedAccessories = selectedAccessories.filter(item => item.price !== price);
        } else {
            toggle.classList.add('active');
            accessoryTotal += price;
            selectedAccessories.push({ price: price });
        }
        
        // Update accessories total and count
        document.querySelector('.accessories-total').textContent = `$${accessoryTotal.toFixed(2)} USD`;
        document.getElementById('accessoryCount').textContent = selectedAccessories.length;
        
        updateCartButton();
    }
    
    function addToCart() {
        const quantity = document.getElementById('productQuantity').value;
        const selectedSize = document.querySelector('.size-option.active')?.textContent;
        const selectedMaterial = document.querySelector('.material-option.active')?.title;
        
        console.log('Adding to cart:', {
            product: 'Setup Cockpit Monitor Stand Large',
            quantity,
            size: selectedSize,
            material: selectedMaterial,
            accessories: selectedAccessories,
            total: (279.90 * quantity + accessoryTotal).toFixed(2)
        });
        
        alert('Product and accessories added to cart!');
    }
</script>

@endsection