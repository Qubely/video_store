 <header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{url('admin/dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{config('i.favicon')}}" alt="" class="admin-logo-sm">
                    </span>
                    <span class="logo-lg">
                        <img src="{{config('i.logo')}}" alt="" class="admin-logo-lg">
                    </span>
                </a>

                <a href="{{url('admin/dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{config('i.favicon')}}" alt="" class="admin-logo-sm">
                    </span>
                    <span class="logo-lg">
                        <img src="{{config('i.logo')}}" alt="" class="admin-logo-lg">
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>
        <div class="d-flex">
             <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect dl-" id="langNoti" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <span class="me-2">{{viewLanguage(Auth::user()->local)}}</span> <i class="bx bx-globe"></i>
                    </div>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{url('admin/lang/cn')}}"> Chinese  </a>
                    <a class="dropdown-item" href="{{url('admin/lang/bn')}}"> English </span></a>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <i class="bx bx-bell"></i>
                        <span class="badge bg-danger rounded-pill" id="notiCount">0</span>
                    </div>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown" style="">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-16"> Notifications </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> Mark all as read</a>
                            </div>
                        </div>
                    </div>
                    <div  class="" id="notificationBar">
                      <div class="ms-3 text-dark notification-item"> No notification yet</div>
                    </div>
                    <div class="p-2 border-top">
                        <div class="d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                <i class="uil-arrow-circle-right me-1"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <div class="mt-2">
                            <img class="rounded-circle header-profile-user" src="{{ getRowImage(Auth::user(),'80X80') }}" alt="Header Avatar" style="width: 25px;height:25px;">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{Auth::user()->name}}</span>
                            <i class="bx bx-arrow-down font-size-15"></i>
                        </div>
                    </div>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{url('admin/setup/profile-update')}}"><i class="bx bx-user fs-18 align-middle me-1 text-muted"></i> <span class="align-middle"> My Profile  </span></a>
                    <a class="dropdown-item" href="{{url('admin/setup/password-update')}}"><i class="bx bx-lock fs-18 align-middle me-1 text-muted"></i> <span class="align-middle"> Change Password  </span></a>
                    <a class="dropdown-item" href="{{url('admin/logout')}}"><i class="bx bx-log-out-circle fs-18 align-middle me-1 text-muted"></i> <span class="align-middle"> Sign out</span></a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="uil-cog"></i>
                </button>
            </div>
        </div>
    </div>
</header>
