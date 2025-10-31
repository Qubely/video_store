<div class="main-menu pt-3 pb-3 pt-sm-0 pb-sm-0">
    <div class="container">
        @foreach ($data['categoryMenus'] as $menus)
            <div class="row d-flex flex-row justify-items-start align-items-center align-content-center  menu-list-base">
                <div class="col-md-2">
                    <div class="d-flex flex-row justify-content-start align-items-center pt-3 pb-3 pt-sm-0 pb-sm-0">
                        <h6 class="menu-cateory-title text-white me-auto">{{$menus['name']}}</h6>
                        <div class="line d-none d-sm-block"></div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="d-block">
                       @foreach ($menus['subMenus'] as $item)
                            <div class="d-inline-block menu-list">
                                <div class="d-flex flex-row justify-content-start align-items-center pt-3 pb-3 pt-sm-0 pb-sm-0">
                                   <h6 class="fs-14 text-white m-0">{{$item['name']}}</h6>
                                </div>
                            </div>
                       @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
