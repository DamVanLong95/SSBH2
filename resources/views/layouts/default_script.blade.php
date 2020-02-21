<script src="{{ url('assets/js/site.js?'.config('custom.version')) }}"></script>
<script>
     var swiper = new Swiper('.swiper-banner-container', {
      slidesPerView: 1,
      slidesPerColumn: 1,
      spaceBetween: 30,
      // pagination: {
      //   el: '.swiper-pagination',
      //   type: 'progressbar',
      // },
     
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 20,

        },
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
          slidesPerColumn: 1,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
          slidesPerColumn: 1,
        }
      }
    });
</script>