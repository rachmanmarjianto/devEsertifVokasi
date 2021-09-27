<div class="rightbar">
    <!-- Start Topbar Mobile -->
    <div class="topbar-mobile">
        <div class="row align-items-center">
            <div class="col-md-12">
            <div class="mobile-logobar">
                    <a href="{{ url('/') }}" class="mobile-logo"><img src="{{ asset('/assets/images/logo-unair-baru.png') }}" style="height: 40px; width: 40px;" class="img-fluid" alt="logo"></a>
                    FAKULTAS VOKASI
                </div>
                <div class="mobile-togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="topbar-toggle-icon">
                                <a class="topbar-toggle-hamburger" href="javascript:void();">
                                    <img src="{{ asset('/assets/images/svg-icon/horizontal.svg') }}" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                    <img src="{{ asset('/assets/images/svg-icon/verticle.svg') }}" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void();">
                                    <img src="{{ asset('/assets/images/svg-icon/menu.svg') }}" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                    <img src="{{ asset('/assets/images/svg-icon/close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                            </div>
                        </li>                                
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Topbar -->
    <div class="topbar">
        <!-- Start row -->
        <div class="row align-items-center">
            <!-- Start col -->
            <div class="col-md-12 align-self-center">
                <div class="togglebar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="menubar">
                                <a class="menu-hamburger" href="javascript:void();">
                                    <img src="{{ asset('/assets/images/svg-icon/menu.svg') }}" class="img-fluid menu-hamburger-collapse" alt="menu">
                                    <img src="{{ asset('/assets/images/svg-icon/close.svg') }}" class="img-fluid menu-hamburger-close" alt="close">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="infobar">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <div class="profilebar">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('/assets/images/users/profile.svg') }}" class="img-fluid" alt="profile"><span class="live-icon">{{ Auth::user()->NAMA_USER }}</span><span class="feather icon-chevron-down live-icon"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                        <div class="dropdown-item">
                                            <div class="profilename">
                                                <h5>{{ Auth::user()->NAMA_USER }}</h5>
                                            </div>
                                        </div>
                                        <div class="userbox pr-4">
                                            <ul class="list-unstyled mb-0">
                                                <!-- <li class="media dropdown-item">
                                                    <a href="#" class="profile-icon" data-toggle="modal" data-target="#modal-edit-nama-user">
                                                        <img src="{{ asset('/assets/images/svg-icon/settings.svg') }}" class="img-fluid" alt="Edit Nama">
                                                        Edit Nama
                                                    </a>
                                                </li> -->
                                                <li class="media dropdown-item">
                                                    <a href="{{ route('password/reset') }}" class="profile-icon">
                                                        <img src="{{ asset('/assets/images/svg-icon/authentication.svg') }}" class="img-fluid" alt="logout">
                                                        Change Password
                                                    </a>
                                                </li>
                                                <li class="media dropdown-item">
                                                    <a href="{{ route('logout') }}" class="profile-icon">
                                                        <img src="{{ asset('/assets/images/svg-icon/logout.svg') }}" class="img-fluid" alt="logout">
                                                        Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                                   
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End col -->
        </div> 
        <!-- End row -->
    </div>
    <!-- End Topbar -->
    @yield('rightbar-content')
    <!-- Start Footerbar -->
    <div class="footerbar">
        <footer class="footer">
            <p class="mb-0">&copy;
                @php
                    echo date("Y");
                @endphp
                Created by Dimas Dea Sadam - D3 Sistem Informasi
            </p>
        </footer>
    </div>
    <!-- End Footerbar -->
</div>
   