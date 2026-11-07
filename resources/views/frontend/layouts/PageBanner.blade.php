{{-- Inner-page header for /about-us, /process, /services, /contact.

     Do NOT give this wrapper the theme class .banner-area. style.css treats that class as the
     homepage hero and parks its text off-screen until Swiper animates a slide:
         .banner-area h4, .banner-area h2, .banner-area p  { opacity: 0; visibility: hidden; }
         .banner-area .swiper-slide.swiper-slide-active h2 { opacity: 1; visibility: visible; }
         .banner-area div                                  { height: 100%; }
     Only resources/views/frontend/pages/homepage.blade.php ever contains a .swiper-slide, so any
     other page using .banner-area rendered a tall empty navy block with the heading invisible
     inside it. These classes live in public/frontend/assets/css/brand.css (loaded after
     style.css) and carry their own colours, so no vendor rule reaches them.

     The photo sits under a navy gradient in brand.css: background-color #0a2147 comes first, so
     if the image is ever missing the panel still reads and the white type still holds contrast. --}}
<div class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <p class="page-banner-eyebrow">Epic Air Cargo</p>
                <h1 class="page-banner-title">{{ $heading }}</h1>
                <p class="page-banner-intro">{{ $intro }}</p>
                <span class="page-banner-rule" aria-hidden="true"></span>
            </div>
        </div>
    </div>
</div>
