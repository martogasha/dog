
<div class="navbar-area">
    <div class="patoi-responsive-nav">
        <div class="container">
            <div class="patoi-responsive-menu">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{asset('assets/img/dogLogo.png')}}" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="patoi-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/dogLogo.png')}}" alt="logo"></a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{url('/')}}" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item"><a href="{{url('shop')}}" class="nav-link">Shop</a>
                        <li class="nav-item"><a href="{{url('about')}}" class="nav-link">About</a>
                        </li>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    </ul>                    <div class="others-option">
                        <div class="d-flex align-items-center">
                            <ul>
                                @if(\Illuminate\Support\Facades\Auth::check())
                                <li><a href="{{url('profile')}}">{{\Illuminate\Support\Facades\Auth::user()->name}}</a></li>
                                @else
                                    <li><a href="{{url('login')}}">Login</a></li>

                                @endif
                                    <li><a href="{{url('cart')}}">
                                        <button type="button" class="btn btn-primary">
                                            <i class='bx bx-cart'></i><span class="badge bg-danger ms-2">{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}</span>
                                        </button>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option">
                        <ul>
                            <li>
                                <select class="form-select">
                                    <option selected>English</option>
                                    <option value="1">Spanish</option>
                                    <option value="2">Chinese</option>
                                </select>
                            </li>
                            <li><a href="profile-authentication.html"><i class='bx bx-user-circle'></i></a></li>
                            <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <p>Phone: <b>0796522538</b> Gmail: <b>gabrielmburu63@gmail.com</b></p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="search-box">
                    <form action="{{url('search')}}" method="post">
                        @csrf
                        <input type="text" class="input-search" name="search" placeholder="Enter your keywords...">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <ul>
                    <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
