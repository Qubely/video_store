<div class="container">
    <div class="row p-0">
        <div class="col-md-12">
            <div class="swiper card-swiper mt-5">
                <div class="swiper-wrapper">
                    @foreach ($data['cardSwiper'] as $sliders)
                        <div class="swiper-slide">
                            <div class="row">
                                @foreach ($sliders['items'] as $slide)
                                   <div class="col card-swiper-col">
                                        <div class="text-center">
                                            <img src="https://placehold.co/150x150/png" class="img-fluid" />
                                            <h6 class="fs-13 fw-bold mt-4">{{$slide['name']}}</h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
