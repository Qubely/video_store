
<label class="floating-btn floating-btn-top">
    <span class="fs-22"> 关闭 </span>
</label>
<div class="swiper top-swiper">
  <div class="swiper-wrapper">
    @foreach ($data['topSwiper'] as $item)
        <div class="swiper-slide">
            <img src="https://placehold.co/1920x140/png" alt="{{$item['alt']}}" class="top-swiper-img" />
        </div>
    @endforeach
  </div>
</div>
