<div class="content-section">
    <div class="container">
        @foreach ($data['categoryMenus'] as $menus)
        <div class="row content-section">
            <div class="col-md-12">
                <div class="d-flex flex-row justify-content-start align-items-center">
                    <div class="d-block me-5">
                        <h6 class="fs-18 fw-bold">{{$menus['name']}} : </h6>
                    </div>
                    @foreach ($menus['menus'] as $key => $item)
                    <div class="d-block me-5">
                        <span class="category-menu {{($key == 1) ? 'active':''}}">{{$item['name']}}</span>
                    </div>
                     @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
