<header class="fixed-top">
    {{-- Desktop navbar --}}
    <div class="container d-none d-lg-block nav-lg">
        <div class="row">
            <div class="col text-left d-flex justify-content-between align-items-center nav-lg-left">
                <div class="socials mr-auto">
                    <a href="#" title="Visit us on Facebook"><i class="ri-facebook-fill"></i></a>
                    <a href="#" title="Follow us on Twitter"><i class="ri-twitter-fill"></i></a>
                    <a href="#" title="Follow us on Instagram"><i class="ri-instagram-line"></i></a>
                </div>
                <div class="links">
                    <a href="#" title="Shop">Shop</a>
                    <a href="#" title="Plan my kitchen">Plan my kitchen</a>
                </div>
            </div>
            <div class="col-2 text-center align-items-center justify-content-center d-flex">
                <a href="#" title="Go to the homepage">
                    <img src="{{secure_asset('/images/logo.svg')}}" alt="" class="img-fluid navbar-logo">
                </a>
            </div>
            <div class="col text-right d-flex align-items-center justify-content-between nav-lg-right">
                <div class="links">
                    <a href="#" title="About us">About us</a>
                    <a href="#" title="Gallery">Gallery</a>
                </div>
                <a href="#" title="My order" class="btn btn-sm btn-outlined d-flex">
                    My order
                    <i class="ml-2 ri-shopping-cart-line"></i>
                </a>
            </div>
        </div>
    </div>
    
    {{-- Mobile navbar --}}
    <div class="container d-lg-none nav-sm">
        <div class="row ">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="nav-brand">
                    <img src="{{secure_asset('/images/logo.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="nav-sm-toggle-menu">
                    <i class="ri-menu-line text-white"></i>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- Mobile side menu --}}
<div class="mobile-nav-wrapper d-lg-none" style="visibility:hidden;">
    <div class="mobile-nav-wrapper-content">
        <img src="{{secure_asset('/images/logo.svg')}}" alt="MTC Logo" class="logo img-fluid">
        <ul class="list-unstyled">
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Plan my kitchen</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Gallery</a></li>
        </ul>
    </div>
</div>

{{-- Mobile side menu - dark overlay --}}
<div class="dark-overlay d-lg-none" style="visibility: hidden;"></div>

