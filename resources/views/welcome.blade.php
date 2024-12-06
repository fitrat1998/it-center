@extends('layouts.app')

@section('content')
    <nav class="navbar  text-white navbar-expand-lg navbar-light bg-white shadow-sm p-0 main-header-nav"
         id="nav-bar">
        <div class="container">
            <a href="/" class="brand d-flex align-items-center mb-3 text-decoration-none me-4">
                <img src="{{ asset('logo.png') }}" class="img-fluid" alt="logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto gap-2 mb-2 mb-lg-0">
                    <li class="nav-item mx-2 m-1">
                        <a class="nav-link px-0 py-4 {{ Request::routeIs('about') ? 'active' : '' }}"
                           href="{{ route('about') }}">
                            @lang('crud.menu.about')
                        </a>
                    </li>

                    <li class="nav-item mx-2 m-1">
                        <a class="nav-link px-0 py-4 {{ Request::routeIs('news') ? 'active' : '' }}"
                           href="{{ route('news') }}">
                            @lang('crud.menu.news')
                        </a>
                    </li>

                    <li class="nav-item mx-2 m-1">
                        <a class="nav-link px-0 py-4{{ Request::routeIs('startup') ? 'active' : '' }}"
                           href="{{ route('startup') }}">
                            @lang('crud.menu.start_up')
                        </a>
                    </li>

                    <li class="nav-item mx-2 m-1">
                        <a class="nav-link px-0 py-4{{ Request::routeIs('software') ? 'active' : '' }}"
                           href="{{ route('software') }}">
                            @lang('crud.menu.software')
                        </a>
                    </li>

                    <li class="nav-item mx-2 m-1">
                        <a class="nav-link px-0 py-4 {{ Request::routeIs('course') ? 'active' : '' }}"
                           href="{{ route('course') }}">
                            @lang('crud.menu.course')
                        </a>
                    </li>

                </ul>
                {{--                <div class="d-flex gap-4 align-items-center">--}}
                {{--                    <a href="signin.html" class="text-decoration-none text-black fw-bold">Log In</a>--}}
                {{--                    <a href="signup.html" type="button" class="btn btn-danger btn-sm fw-bold">Sign up</a>--}}
                {{--                </div>--}}
            </div>
        </div>
    </nav>


    <div class="banner-search py-4">

        <div class="container-fluid p-0">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Add content if needed inside this column -->
                </div>
                <div class="col-12">
                    <!-- Full-Screen Slider -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-image">
                                    <img src="{{ asset('assets/img/projects/p3.jpg') }}" class="d-block w-100"
                                         alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $slider['title_'.session('locale')] ?? 'Default Title' }}</h5>
                                        <p>{{ $slider['desc_'.session('locale')] ?? 'Default Description' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-image">
                                    <img src="{{ asset('assets/img/projects/p4.jpg') }}" class="d-block w-100"
                                         alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $slider['title_'.session('locale')] ?? 'Default Title' }}</h5>
                                        <p>{{ $slider['desc_'.session('locale')] ?? 'Default Description' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-image">
                                    <img src="{{ asset('assets/img/projects/p8.jpg') }}" class="d-block w-100"
                                         alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $slider['title_'.session('locale')] ?? 'Default Title' }}</h5>
                                        <p>{{ $slider['desc_'.session('locale')] ?? 'Default Description' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="m-3 bg-white py-3"></div>


    <!-- Banner Search -->
    <div class="banner-search py-4">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center">
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('about.jpg') }}" class="img-fluid" alt="#" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold lh-1 mb-3 text-body">@lang('crud.about.abouts')</h1>

                    <p class="lead fw-normal text-dark mb-0">
                        {{ $about['about_center_'.session('locale')] ?? 'Default About Us Content' }}
                    </p>


                </div>
            </div>
        </div>
    </div>

    <div class="m-3 bg-white py-3"></div>
    <main class="bg-light py-5 border-bottom">
        <div class="container py-4">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h1 class="pb-4 fw-bold text-black">@lang('crud.news')</h1>
                <h3>
                    <a href="{{ route('news') }}">
                        <i class="fa fa-arrow-right"></i> Ko'proq
                    </a>
                </h3>
            </div>
            <hr>

            <div class="row gy-3 row-cols-xl-6 row-cols-lg-5 row-cols-md-3 row-cols-2">

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">

                        <div class="card-body">
                            <h6 class="card-title m-0">
                                <a href="{{ route('news.show', $news->first()->id ?? '#') }}" class="post-title">
                                    {{ $news->first()['title_'.session('locale')] ?? 'Default Title' }}
                                </a>
                            </h6>
                        </div>
                        <a href="#">
                            @if($news->first())
                                <img src="{{ asset('storage/'.$news->first()->image) }}" alt="blog-thumb">
                            @else
                                <img src="{{ asset('assets/img/globel/avatar.png') }}" alt="default-image" width="185">
                            @endif
                        </a>
                        <div class="card-body">
                            <h6 class="card-title m-0">
                                @if($news->first())
                                    {{ $news->first()->created_at->format('Y-m-d') }}
                                @else
                                    N/A
                                @endif
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">

                        <div class="card-body">
                            <h6 class="card-title m-0">
                                <a href="{{ route('news.show', $news->first()->id ?? '#') }}" class="post-title">
                                    {{ $news->first()['title_'.session('locale')] ?? 'Default Title' }}
                                </a>
                            </h6>
                        </div>
                        <a href="#">
                            @if($news->first())
                                <img src="{{ asset('storage/'.$news->first()->image) }}" alt="blog-thumb">
                            @else
                                <img src="{{ asset('assets/img/globel/avatar.png') }}" alt="default-image" width="185">
                            @endif
                        </a>
                        <div class="card-body">
                            <h6 class="card-title m-0">
                                @if($news->first())
                                    {{ $news->first()->created_at->format('Y-m-d') }}
                                @else
                                    N/A
                                @endif
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">

                        <div class="card-body">
                            <h6 class="card-title m-0">
                                <a href="{{ route('news.show', $news->first()->id ?? '#') }}" class="post-title">
                                    {{ $news->first()['title_'.session('locale')] ?? 'Default Title' }}
                                </a>
                            </h6>
                        </div>
                        <a href="#">
                            @if($news->first())
                                <img src="{{ asset('storage/'.$news->first()->image) }}" alt="blog-thumb">
                            @else
                                <img src="{{ asset('assets/img/globel/avatar.png') }}" alt="default-image" width="185">
                            @endif
                        </a>
                        <div class="card-body">
                            <h6 class="card-title m-0">
                                @if($news->first())
                                    {{ $news->first()->created_at->format('Y-m-d') }}
                                @else
                                    N/A
                                @endif
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">

                        <div class="card-body">
                            <h6 class="card-title m-0">
                                <a href="{{ route('news.show', $news->first()->id ?? '#') }}" class="post-title">
                                    {{ $news->first()['title_'.session('locale')] ?? 'Default Title' }}
                                </a>
                            </h6>
                        </div>
                        <a href="#">
                            @if($news->first())
                                <img src="{{ asset('storage/'.$news->first()->image) }}" alt="blog-thumb">
                            @else
                                <img src="{{ asset('assets/img/globel/avatar.png') }}" alt="default-image" width="185">
                            @endif
                        </a>
                        <div class="card-body">
                            <h6 class="card-title m-0">
                                @if($news->first())
                                    {{ $news->first()->created_at->format('Y-m-d') }}
                                @else
                                    N/A
                                @endif
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">

                        <div class="card-body">
                            <h6 class="card-title m-0">
                                <a href="{{ route('news.show', $news->first()->id ?? '#') }}" class="post-title">
                                    {{ $news->first()['title_'.session('locale')] ?? 'Default Title' }}
                                </a>
                            </h6>
                        </div>
                        <a href="#">
                            @if($news->first())
                                <img src="{{ asset('storage/'.$news->first()->image) }}" alt="blog-thumb">
                            @else
                                <img src="{{ asset('assets/img/globel/avatar.png') }}" alt="default-image" width="185">
                            @endif
                        </a>
                        <div class="card-body">
                            <h6 class="card-title m-0">
                                @if($news->first())
                                    {{ $news->first()->created_at->format('Y-m-d') }}
                                @else
                                    N/A
                                @endif
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">

                        <div class="card-body">
                            <h6 class="card-title m-0">
                                <a href="{{ route('news.show', $news->first()->id ?? '#') }}" class="post-title">
                                    {{ $news->first()['title_'.session('locale')] ?? 'Default Title' }}
                                </a>
                            </h6>
                        </div>
                        <a href="#">
                            @if($news->first())
                                <img src="{{ asset('storage/'.$news->first()->image) }}" alt="blog-thumb">
                            @else
                                <img src="{{ asset('assets/img/globel/avatar.png') }}" alt="default-image" width="185">
                            @endif
                        </a>
                        <div class="card-body">
                            <h6 class="card-title m-0">
                                @if($news->first())
                                    {{ $news->first()->created_at->format('Y-m-d') }}
                                @else
                                    N/A
                                @endif
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">

                        <div class="card-body">
                            <h6 class="card-title m-0">
                                <a href="{{ route('news.show', $news->first()->id ?? '#') }}" class="post-title">
                                    {{ $news->first()['title_'.session('locale')] ?? 'Default Title' }}
                                </a>
                            </h6>
                        </div>
                        <a href="#">
                            @if($news->first())
                                <img src="{{ asset('storage/'.$news->first()->image) }}" alt="blog-thumb">
                            @else
                                <img src="{{ asset('assets/img/globel/avatar.png') }}" alt="default-image" width="185">
                            @endif
                        </a>
                        <div class="card-body">
                            <h6 class="card-title m-0">
                                @if($news->first())
                                    {{ $news->first()->created_at->format('Y-m-d') }}
                                @else
                                    N/A
                                @endif
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">

                        <div class="card-body">
                            <h6 class="card-title m-0">
                                <a href="{{ route('news.show', $news->first()->id ?? '#') }}" class="post-title">
                                    {{ $news->first()['title_'.session('locale')] ?? 'Default Title' }}
                                </a>
                            </h6>
                        </div>
                        <a href="#">
                            @if($news->first())
                                <img src="{{ asset('storage/'.$news->first()->image) }}" alt="blog-thumb">
                            @else
                                <img src="{{ asset('assets/img/globel/avatar.png') }}" alt="default-image" width="185">
                            @endif
                        </a>
                        <div class="card-body">
                            <h6 class="card-title m-0">
                                @if($news->first())
                                    {{ $news->first()->created_at->format('Y-m-d') }}
                                @else
                                    N/A
                                @endif
                            </h6>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </main>
    <section class="bg-light py-5 feature-list border-bottom">
        <div class="container py-4">
            <div class="pb-2">
                <h4 class="fw-bold text-black">@lang('crud.course.name')</h4>
                <p class="mb-4 text-muted">@if($online->isNotEmpty())
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home"
                                aria-selected="true">@lang('crud.course.online')
                        </button>
                    </li>
                @endif
                @if($offline->isNotEmpty())
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile"
                                aria-selected="false">@lang('crud.course.offline')
                        </button>
                    </li>
                    @endif</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5 g-4">
                <!-- 1st mage -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Veronica Cerna</h5>
                            <p class="card-text text-muted">Lima District, Peru</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">3512 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                    </div>
                </div>
                <!-- 2nd image -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Caro Bello</h5>
                            <p class="card-text text-muted">Denver, Argentina</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">35241 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                    </div>
                </div>
                <!-- 3rd image -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Ernex</h5>
                            <p class="card-text text-muted">Denpasar, Indonesia</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">75 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                    </div>
                </div>
                <!-- 4th image -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Victoe Village</h5>
                            <p class="card-text text-muted">Mexico City, Mexico</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">10455 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                    </div>
                </div>

                 <!-- 4th image -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Victoe Village</h5>
                            <p class="card-text text-muted">Mexico City, Mexico</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">10455 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- Refer and get free services -->
    <div class="bg-white border-top border-bottom cities-footer">
        <div>
            <div class="container">
                <a class="w-100 text-body text-decoration-none py-2 d-block" data-bs-toggle="collapse"
                   href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <div class="d-flex flex-wrap justify-content-between align-items-center ">

                    </div>
                </a>
            </div>
        </div>

    </div>
    <!-- Footer -->
    <div class="py-5 footer">
        <div>
            <div class="container py-3">
                <div class="row">
                    <div class="col-6 col-lg-2 col-md-3">
                        <h6 class="mb-3 text-body fw-bold">COMPANY</h6>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="about.html">About</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">All
                            Courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="careers.html">Careers</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="profile.html">Account</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted"
                           href="testimonials.html">Testimonials</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="contact.html">Contact Us</a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-3">
                        <h6 class="mb-3 text-body fw-bold">CATEGORIES</h6>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Illustration
                            courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Craft
                            courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Marketing &
                            Business</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Photography &
                            Video</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Design
                            courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">3D &
                            Animation</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Architecture &
                            Spaces</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Web & App
                            Design</a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-3">
                        <h6 class="mb-3 text-body fw-bold">SOFTWARE</h6>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Adobe
                            Photoshop</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Adobe
                            Illustrator</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Adobe After
                            Effects</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Procreate
                            courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Cinema 4D
                            courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Adobe
                            Lightroom </a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Adobe
                            InDesign </a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Camera
                            Raw </a>
                    </div>
                    <div class="col-6 col-lg-2 col-md-3">
                        <h6 class="mb-3 text-body fw-bold">LISTS</h6>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">New
                            courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Top rated</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Popular
                            courses</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Courses on
                            sale</a>
                        <a class="py-1 text-decoration-none d-block w-100 text-muted" href="courses.html">Course
                            Bundles</a>
                    </div>
                    <div class="col-6 col-lg-4 col-md-3 ps-lg-5">
                        <a href="index-2.html"
                           class="brand d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                            <img src="img/logo.png" class="img-fluid" alt="SIKSHAA">
                        </a>
                        <h6 class="mb-2 text-body mt-5 fw-bold text-uppercase">DOWNLOAD THE SIKSHAA APP</h6>
                        <p>Get new clients, grow your business.</p>
                        <a class="me-2" href="#"><img src="img/google.png" class="img-fluid app-icon" alt="#"
                                                      loading="lazy"></a>
                        <a href="#"><img src="img/apple.png" class="img-fluid app-icon" alt="#" loading="lazy"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-4 bg-white footer-copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <span class="me-3 small">©2022 <b class="text-primary">sikshaa</b>. All rights reserved</span>
                    <a class="text-black-50 small mx-3 text-decoration-none" href="terms-and-conditions.html">Terms of
                        use</a>
                    <a class="text-black-50 small mx-3 text-decoration-none" href="privacy-policy.html">Privacy
                        policy</a>
                </div>
                <div class="col-md-4 text-end">
                    <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i
                            class="icofont-facebook"></i></a>
                    <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i
                            class="icofont-twitter"></i></a>
                    <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i
                            class="icofont-linkedin"></i></a>
                    <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i
                            class="icofont-youtube-play"></i></a>
                    <a target="_blank" href="#" class="btn social-btn btn-sm text-decoration-none"><i
                            class="icofont-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
