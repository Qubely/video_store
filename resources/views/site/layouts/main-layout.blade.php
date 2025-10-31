<!DOCTYPE html>
<html lang="en" class="dark-style layout-menu-fixed" dir="ltr">
<head>
    @include('site.includes.header-resource', ['tabTitle' => $tabTitle ?? 'Site Title'])
</head>
<body>
    <div class="container-fluid no-gutters p-0">
        @include('site.includes.header')
    </div>
    <div class="main-page">
        @yield('page')
        <div class="container content-section">
            @include('site.includes.footer')
        </div>
    </div>
    <label class="floating-btn floating-btn-bottom">
        <span class="fs-22"> 关闭 </span>
    </label>
    <div class="position-fixed left-0 bottom-0 w-100">
        <div class="position-relative">
            <div class="footer-pwa-app tc">
                <div class="footer-app-box">
                    <div class="fl pwa-btn-push footer-desktop-ins floating-title">添加到桌面</div>
                    <div class="fl pwa-btn-push app-btn-push floating-title" style="" data-url="https%3A%2F%2Fjztv3.jzdl025517p.cc%3A2025%2F68%2Fs1%2F%3Fc%3D1">下载APP</div>
                    <div class="fl pwa-app-close floating-title" onclick="$('.footer-pwa-app').remove()">关闭</div>
                </div>
            </div>
            <div class="swiper top-swiper">
                <div class="swiper-wrapper">
                    @foreach ($data['topSwiper'] as $item)
                        <div class="swiper-slide">
                            <img src="https://placehold.co/1920x120/png" alt="{{$item['alt']}}" class="top-swiper-img" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div id="to-top" class="to-top">
        <div class="text-center">
            <i class="fa-solid fa-arrow-up fs-30"></i>
        </div>
    </div>
    <div class="floating-card floating-card-left d-none d-sm-block">
        <button class="close-btn"><i class="fa-solid fa-times fs-18 fw-bold"></i></button>
        <img src="https://placehold.co/150x150/png" alt="Placeholder">
    </div>

    <div class="floating-card floating-card-right d-none d-sm-block">
        <button class="close-btn"><i class="fa-solid fa-times fs-18 fw-bold"></i></button>
        <img src="https://placehold.co/150x150/png" alt="Placeholder">
    </div>
    @include('site.includes.footer-resource', ['react' => $react ?? []])
</body>
</html>
