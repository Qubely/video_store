<div class="container p-0">
    <div class="row p-0">
        <div class="col-md-12 p-0">
            <div class="mt-5">
                @foreach ($data['cardDisplay'] as $sliders)
                    <div class="row p-0">
                        @foreach ($sliders['items'] as $slide)
                            <div class="col mb-4 mb-md-0 no-gutters display-slider">
                                <div class="text-center">
                                    <img src="https://placehold.co/200x200/png" class="img-fluid" />
                                    <h6 class="fs-13 fw-bold mt-4">{{$slide['name']}}</h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
