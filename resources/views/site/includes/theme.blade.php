<style>
    .main-page {
        min-height: 1000px;
        padding-bottom: 250px;
    }
    .top-swiper-img {
        width: 100%;
        max-height: 150px;
    }
    .search-bar {
        background-color: #222222;
    }
    .main-logo {
        max-width: 100%;
        max-height: 70px;
        padding: 7px 0;
    }
    .main-menu-icon {
        margin-right: 18px;
    }
    .main-menu-icon:first-child {
        margin-left: 18px;
    }
    .main-menu-icon:last-child {
        margin-right: 0;
    }
    .main-menu-icon-img {
        width: 35px;
        height: 35px;
    }
    .fix-list-icon-size {
        width: 30px;
        height: 30px;
    }
    .fix-record-icon-size {
        width: 27px;
        height: 27px;
        margin-top: 2px;
    }

    /* Manage Search Bar */

    .main-search-icon {
      position: relative;
    }

    .main-search-icon input {
      padding-left: 2.5rem; /* space for the icon */
    }

    .main-search-icon i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: #ffffff;
        pointer-events: none;
        right: 8px;
        font-size: 20px;
    }

    .main-search {
        background-color: #656565;
        border-radius: 15px;
        border: none;
    }

    .main-search:focus {
        background-color: #656565 !important;
        border-color: none !important;
        box-shadow: none !important;
    }
    .main-search::placeholder {
      font-family: 'Poppins', sans-serif;
      font-size: 17px;
      font-weight: normal;
      color:#fff;
      letter-spacing: 0.5px;
    }
    /* Search bar ends */

    /* Main menu */
    .main-menu {
         background-color: #2a2a2a !important;
    }
    .menu-cateory-title {
        font-size: 16px;
    }
    .line {
        width: 1px;
        height: 100%;
        background-color: white;
        margin-left: 10px;
        min-height: 15px;
        margin-right: 8px;
    }
    .line-footer {
        width: 1px;
        height: 100%;
        background-color: rgb(94, 94, 94);
        margin-left: 10px;
        min-height: 15px;
    }
    .menu-list-base {
        min-height: 45px;
        margin-bottom: 8px;
    }
    .menu-list {
        background-color: #222222;
        border: 1px solid #5b5b5b;
        max-width: auto;
        padding: 3px 18px;
        border-radius: 5px;
        font-family: 'Poppins', sans-serif !important;
    }
    .menu-list  {
        margin-right: 8px;
    }
    .menu-list:last-child {
        margin-right: 0;
    }
    .menu-list h6 {
        font-family: 'Poppins', sans-serif !important;
        font-size: 14px;
    }
    /* Main menu ends */

    /* Announcement */
    .an-bg {
        background-color: #eff0f5;
        border-radius: 8px;
        padding: 7px 15px 7px 7px;
    }
    .an-image {
        width: 24px;
    }
    .marquee,.general-marquee {
        overflow: hidden;
    }
    /* Announcement */
    .fixed-menu {
        background-color: #d4edda;
        padding: 5px 0;
    }
    .page-tab {
        margin-top: 50px;
    }
    .page-tab .nav {
        border-bottom: none;
    }
    .page-tab .nav-link:hover {
        border: none;
    }
    .page-tab .nav-link {

        border-radius: 4px;
        padding: 5px 12px;
        font-size: 16px;
        border: none;
        font-family: 'Poppins', sans-serif !important;
        margin-right: 12px;
        color: black;
    }
    .page-tab .nav-link.active {
        border: none;
        background: linear-gradient(90deg, #cc6edc, #845fe1);
        color: #fff
    }
    .page-tab  .tab-content .tab-pane {
        background-color: transparent !important;
        background: none;
    }
    .page-tab  .tab-content .show {
        position: relative !important;
    }

    .ifuckt {
        padding: 3px 3px  0 4px;
        overflow: hidden;
        height: 30px;
    }
    .ifuckt::after, .ifuckt::before {
        content: "";
        width: 4px;
        height: 16px;
        background-image: -webkit-linear-gradient(45deg, #f4a942, #ff2a14);
        display: inline-block;
        margin-right: 4px;
        transform: rotate(15deg);
    }
    .content-section {
        margin-top: 35px;
    }
    .category-title {
        margin-right: 15px;
        font-size: 16px;
        border-radius: 7px;
        padding: 3px 7px 3px 7px;
        cursor: pointer;
    }

    .category-btn {
        background-color: #dbdbdb;
        margin-right: 15px;
        font-size: 16px;
        border-radius: 7px;
        padding: 3px 7px 3px 7px;
        cursor: pointer;
    }

    .section-mar {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .floating-title {
        font-size: 20px !important;
    }
    .footer-pwa-app {
        bottom: 13%;
    }

    .credit {
        font-size: 20px !important;
    }

    .a-btns-all a::after {
        content: "";
        display: inline-block;
        width: 2px;
        height: 26px;
        background-color: #d5d5d5;
        position: absolute;
        left: 0;
        top: 50%;
        margin-top: -13px;
        margin-right: 24px;
    }
    .card-swiper-col {
        flex: 0 0 12.5%;
    }
    .display-slider {
        flex: 0 0 16.6667%;
    }
    .swiper {
        position: static;
    }
    #video-player {
        width: 100%;
        height: 540px;
    }
    .tag-marquee-one, .tag-marquee-two {
        display: flex;
        flex-direction: row;
        gap: 15px;
    }
    .tag-item {
        box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
        color: #e2e8f0;
        background-color: #334155;
        background: #fcf8e3;
        color: #e67e23;
        border-radius: 12px;
        padding: 16px 18px;
        margin-right: 10px;
        text-align: center;
        font-size: 18px;
        font-weight: bold;

    }

    .video-base {
        background-color: #e7f4ff;
    }
    .video-watch-action {
        display: block;
        text-align: center;
        cursor: pointer;
    }
    .user-video-action-base {
        margin-top: 12px;
        margin-bottom: 18px;
    }
    .text-gray-50 {
        color: #656565;
    }
    .video-watch-action i {
        font-size: 36px
    }

    .video-watch-action h6 {
        font-size: 20px
    }

    .floating-btn {
        padding: 4px 12px;
        position: absolute;
        right: 1%;
        background-color: rgba(0, 0, 0, .5);
        color: #ffffff;
        z-index: 200;
        border-radius: 8px;
    }
    .floating-btn-top {
        top: 3%;
    }

    .floating-btn-bottom {
        position: fixed !important;
        bottom: 3%;
    }

    .to-top {
        display: none;
        padding: 4px 12px;
        position: fixed;
        right: 1%;
        bottom: 15%;
        background-color: rgb(0, 0, 0);
        color: #ffffff;
        z-index: 300;
        border-radius: 8px;
        cursor: pointer;
    }

    .floating-card {
        position: fixed;
        width: 150px;
        height: 150px;
        background: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        z-index: 9999;
    }

    .floating-card-left {
        top: 65%;
        left: .5%;
    }
    .floating-card-right  {
        top: 60%;
        right: .5%;
    }

    .floating-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .floating-card .close-btn {
        position: absolute;
        top: 0;
        right: -10px;
        margin-top: -15px;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        font-size: 14px;
        cursor: pointer;
        z-index: 10000;
    }

    .category-menu {
        text-align: center;
        align-self: center;
        border-radius: 8px;
        display: flex;
        padding: 3px 14px;
        background-color: #d5d5d5;
        color: black;
        font-size: 15px;
        font-weight: bold;
        justify-content: center;
        align-items: center;
    }
    .category-menu.active {
        background-color: black !important;
        color: white !important;
    }

    .category-pagination .pagination .page-item  {

        margin-right: 8px;
    }
    .category-pagination .pagination .page-item .page-link {
        width: 40px;
        height: 40px;
        padding: 0;
        text-align: center;
        line-height: 40px; /* same as height for vertical centering */
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        display: inline-block;
        border-radius: 1px;
        font-size: 18px;
        background-color: #f0f2f5;
    }

    .category-pagination .pagination li:first-child .page-link,
    .category-pagination .pagination li:last-child .page-link {
        width: auto;
        padding: 0 12px;
        line-height: 40px;
    }


    .category-pagination .pagination .page-item .page-link.active {
        background-color: #072e43;
        border: none;
    }



    @media (max-width: 575.98px) {
        .footer-pwa-app {
            bottom: 4%;
            z-index: 500;
        }
        .card-swiper-col {
            flex: 0 0 33.3333%;
        }

        .display-slider {
            flex: 0 0 33.3333%;
        }

        .main-page {
            min-height: 1000px;
            padding-bottom: 100px;
        }

        .main-menu-icon:first-child {
            margin-left: 0;
        }

         #video-player {
            width: 100%;
            height: auto;
        }

        .tag-marquee-one,
        .tag-marquee-two,
        .tag-marquee-three {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .tag-item {
            display: inline-block;
            box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
            color: #e2e8f0;
            background-color: #334155;
            background: #fcf8e3;
            color: #e67e23;
            border-radius: 5px;
            padding: 3px 6px;
            margin-right: 6px;
            text-align: center;
            font-size: 12px;
            font-weight: bold;
        }

        .video-watch-action i {
            font-size: 26px
        }
         .video-watch-action h6 {
            font-size: 18px
        }

    }

</style>
