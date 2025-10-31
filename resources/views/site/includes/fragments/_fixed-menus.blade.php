<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-5 ps-3 pe-3">
                @foreach ($data['fixedMenus'] as $menus)
                    <div class="row mb-3">
                        @foreach ($menus['items'] as $menu)
                            <div class="col" style="flex: 0 0 20%;">
                                <div class="text-center w-100 fixed-menu">
                                    <h6 class="fs-13 fw-bold mt-4">{{$menu['name']}}</h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
