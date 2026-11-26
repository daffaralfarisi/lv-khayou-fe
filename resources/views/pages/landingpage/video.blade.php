<section id="landing-video" class="position-relative overflow-hidden mb-5" >
    <div class="container-fluid px-lg-5 h-100 ">
      <video id="landing-video-el" class="w-100" style="object-fit:cover; z-index:0;" autoplay muted loop playsinline preload="none" poster=""
         aria-label="Background video (lazy)">
        <source data-src="{{ asset('videos/khayou-v3.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>

      <!-- overlay hitam dengan opacity 0.4 -->

      <script>
      document.addEventListener('DOMContentLoaded', function () {
      const video = document.getElementById('landing-video-el');
      if (!video) return;
      const srcEl = video.querySelector('source[data-src]');

      function loadVideo() {
        if (!srcEl || srcEl.src) return;
        srcEl.src = srcEl.getAttribute('data-src');
        video.load();
        // if video should autoplay, try to play once it's ready
        const tryPlay = () => video.play().catch(() => {});
        if (video.readyState >= 2) tryPlay();
        else video.addEventListener('loadeddata', tryPlay, { once: true });
      }

      if ('IntersectionObserver' in window) {
        const io = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
          loadVideo();
          obs.unobserve(entry.target);
          }
        });
        }, { rootMargin: '300px' }); // preload slightly before entering viewport
        io.observe(video);
      } else {
        // fallback: load immediately
        loadVideo();
      }
      });
      </script>
    </div>
    <div id="landing-video-overlay" style="position:absolute; top:0; z-index:1; background: rgba(0,0,0,0.4); pointer-events:none;"></div>

    <div id="landing-video-rotating-text"
        class="position-absolute text-center text-white fw-bold"
        style="pointer-events:none; text-shadow:0 2px 8px rgba(0,0,0,.7); font-size: clamp(1.25rem, 3vw, 2.5rem); z-index:2;">
        <span class="rv-text">Made For Perfection</span>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function(){
      const section = document.getElementById('landing-video');
      const video = section.querySelector('video');
      const overlay = document.getElementById('landing-video-overlay');
      const rot = document.getElementById('landing-video-rotating-text');

      function alignToVideo(){
        if(!video || !overlay || !rot) return;
        const v = video.getBoundingClientRect();
        const s = section.getBoundingClientRect();

        overlay.style.left = (v.left - s.left) + 'px';
        overlay.style.top = (v.top - s.top) + 'px';
        overlay.style.width = v.width + 'px';
        overlay.style.height = v.height + 'px';

        rot.style.left = (v.left - s.left + v.width / 2) + 'px';
        rot.style.top = (v.top - s.top + v.height / 2) + 'px';
        rot.style.transform = 'translate(-50%, -50%)';
        rot.style.maxWidth = v.width + 'px';
      }

      alignToVideo();
      window.addEventListener('resize', alignToVideo);
      video.addEventListener('loadedmetadata', alignToVideo);
      video.addEventListener('loadeddata', alignToVideo);
    });
    </script>

     <script>
     document.addEventListener('DOMContentLoaded', function(){
        const phrases = [
          'Made For Perfection',
          'Design That Inspires',
          'Quality In Every Detail',
          'Experience The Difference',
          'Crafted With Passion'
        ];
        const el = document.querySelector('#landing-video-rotating-text .rv-text');
        let idx = 0;
        const duration = 3500; // time each phrase is shown (ms)
        el.style.transition = 'opacity .6s, transform .6s';
        el.style.opacity = 1;
        function showNext(){
          el.style.opacity = 0;
          el.style.transform = 'translateY(-10px)';
          setTimeout(() => {
             idx = (idx + 1) % phrases.length;
             el.textContent = phrases[idx];
             el.style.transform = 'translateY(0)';
             el.style.opacity = 1;
          }, 600);
        }
        setInterval(showNext, duration);
     });
     </script>
    </div>
</section>