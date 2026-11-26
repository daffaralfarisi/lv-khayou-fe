<section id="testimonial" class="mb-5 px-lg-5 d-flex d-md-block justify-content-center align-items-center">
    <div class="testimonial-section container-fluid ">
        <div class="slider-container">
            <!-- Slide 1 -->
            <div class="slide active">
                <img src="https://images.tokopedia.net/img/cache/100-square/tPxBYm/2022/3/3/dc0da022-652d-486d-a5cf-485278fc730d.jpg" alt="Profile" class="profile-image">
                <div class="testimonial-text">
                    Pengiriman aman, barang sangat sesuai dengan yang ada di gambar, kualitas barang sangat bagus, kayu solid dan kokoh, kaki tebal dan kokoh. Overall bagus banget produknya
                </div>
                <div class="author-name">Daffa</div>
            </div>

            <!-- Slide 2 -->
            <div class="slide">
                <img src="https://images.tokopedia.net/img/cache/100-square/user-1/2019/3/26/2152149/2152149_be908194-7d9f-43d6-b67f-c877514945ed.jpg" alt="Profile" class="profile-image">
                <div class="testimonial-text">
                    Kualitas kayu mejanya bagus, besi warna doff cocok sama mejanya, gampang di rakit. Sesuai sama deskripsi produk. Semoga barangnya awet
                </div>
                <div class="author-name">Triatmojoyo</div>
            </div>

            {{-- Slide 3 --}}
             <div class="slide active">
                <img src="https://images.tokopedia.net/img/cache/100-square/tPxBYm/2022/3/3/dc0da022-652d-486d-a5cf-485278fc730d.jpg" alt="Profile" class="profile-image">
                <div class="testimonial-text">
                    Pengiriman aman, barang sangat sesuai dengan yang ada di gambar, kualitas barang sangat bagus, kayu solid dan kokoh, kaki tebal dan kokoh. Overall bagus banget produknya
                </div>
                <div class="author-name">Daffa</div>
            </div>

            <!-- Slide 4 -->
             <div class="slide">
                <img src="https://images.tokopedia.net/img/cache/100-square/user-1/2019/3/26/2152149/2152149_be908194-7d9f-43d6-b67f-c877514945ed.jpg" alt="Profile" class="profile-image">
                <div class="testimonial-text">
                    Kualitas kayu mejanya bagus, besi warna doff cocok sama mejanya, gampang di rakit. Sesuai sama deskripsi produk. Semoga barangnya awet
                </div>
                <div class="author-name">Triatmojoyo</div>
            </div>

            {{-- Slide 5 --}}
             <div class="slide active">
                <img src="https://images.tokopedia.net/img/cache/100-square/tPxBYm/2022/3/3/dc0da022-652d-486d-a5cf-485278fc730d.jpg" alt="Profile" class="profile-image">
                <div class="testimonial-text">
                    Pengiriman aman, barang sangat sesuai dengan yang ada di gambar, kualitas barang sangat bagus, kayu solid dan kokoh, kaki tebal dan kokoh. Overall bagus banget produknya
                </div>
                <div class="author-name">Daffa</div>
            </div>

            <!-- Slide 6 -->
             <div class="slide">
                <img src="https://images.tokopedia.net/img/cache/100-square/user-1/2019/3/26/2152149/2152149_be908194-7d9f-43d6-b67f-c877514945ed.jpg" alt="Profile" class="profile-image">
                <div class="testimonial-text">
                    Kualitas kayu mejanya bagus, besi warna doff cocok sama mejanya, gampang di rakit. Sesuai sama deskripsi produk. Semoga barangnya awet
                </div>
                <div class="author-name">Triatmojoyo</div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <button class="nav-arrows prev" onclick="changeSlide(-1)">‹</button>
        <button class="nav-arrows next" onclick="changeSlide(1)">›</button>

        <!-- Dots Navigation -->
        <div class="dots-container">
            <div class="dot active" onclick="currentSlide(1)"></div>
            <div class="dot" onclick="currentSlide(2)"></div>
            <div class="dot" onclick="currentSlide(3)"></div>
            <div class="dot" onclick="currentSlide(4)"></div>
            <div class="dot" onclick="currentSlide(5)"></div>
            <div class="dot" onclick="currentSlide(6)"></div>
        </div>
    </div>

    <script>
        let slideIndex = 1;
        const totalSlides = 6;

        function showSlide(n) {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            
            if (n > totalSlides) { slideIndex = 1; }
            if (n < 1) { slideIndex = totalSlides; }
            
            // Hide all slides
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Show current slide
            slides[slideIndex - 1].classList.add('active');
            dots[slideIndex - 1].classList.add('active');
        }

        function changeSlide(n) {
            slideIndex += n;
            showSlide(slideIndex);
        }

        function currentSlide(n) {
            slideIndex = n;
            showSlide(slideIndex);
        }

        // Auto-slide functionality
        function autoSlide() {
            slideIndex++;
            showSlide(slideIndex);
        }

        // Start auto-slide (optional)
        setInterval(autoSlide, 5000);

        // Touch/Swipe functionality for mobile
        let startX = 0;
        let endX = 0;

        const sliderContainer = document.querySelector('.slider-container');

        sliderContainer.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        sliderContainer.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = startX - endX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    changeSlide(1); // Swipe left - next slide
                } else {
                    changeSlide(-1); // Swipe right - previous slide
                }
            }
        }

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                changeSlide(-1);
            } else if (e.key === 'ArrowRight') {
                changeSlide(1);
            }
        });
    </script>
</section>