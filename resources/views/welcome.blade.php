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

                    <li class="nav-item mx-2 dropdown m-1">
                        <a class="nav-link dropdown-toggle px-0 py-4" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            @if (app()->getLocale() == 'uz')
                                Til {{ $currentLocale = session('locale') ?? "uz"; }}
                            @elseif (app()->getLocale() == 'en')
                                Language
                            @else
                                Язык
                            @endif

                </a>
                <ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
                    <li><a class="dropdown-item px-3 py-2 rounded" href="courses.html">
                            @php
                                $currentLocale = session('locale') ?? "uz";
                                $languages = [
                                    'en' => ['name' => 'English', 'flag' => 'flag-en.png'],
                                    'uz' => ['name' => "O'zbek", 'flag' => 'flag-uz.png'],
                                    'ru' => ['name' => 'Русский', 'flag' => 'flag-ru.png'],
                                ];
                            @endphp
                        </a></li>

                </ul>
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

    <div class="m-3 bg-white py-3"></div>

    @if($courses->isNotEmpty())
        <section class="bg-light py-5 feature-list border-bottom">
            <div class="container py-4">
                <div class="pb-2">
                    <h4 class="fw-bold text-black">@lang('crud.course.name')</h4>

                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5 g-4">
                    <!-- 1st mage -->

                    @foreach($courses as $course)
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                                {{--                                <img src="{{ asset('storage/courses/' . $course->image) }}" class="card-img-top" alt="Course">--}}
                                <img src="{{ asset('assets/img/team/team1.jpg') }}" class="card-img-top" alt="Course">
                                <div class="card-body">
                                    <h5 class="card-title mb-1 h6 text-dark">
                                        <a href="{{ route('course.show', $course->id) }}">
                                            <span>{{ $course['title_'.session('locale')] ?? 'Default Offline Course' }}</span>

                                        </a>
                                    </h5>
                                    <p class="card-text text-muted">{{ $course['description_'.session('locale')] ?? 'Default  description' }}</p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                                    <p class="text-muted small mb-0"><span>{{ $course->price ?? 'Free' }}</span></p>
                                    <button type="button"
                                            class="btn btn-secondary btn-sm px-2 py-0">{{ $course->type ?? '' }}</button>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
            </div>
        </section>



    @endif

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

                    <div class="col-6 col-lg-2 col-md-3 ">
                        <a href="/" class="py-1 text-decoration-none d-block w-100 text-muted">
                            <img class="mb-3 text-body fw-bold" src="{{ asset('logo.png') }}" alt=""
                                 width="200">

                        </a>
                        <p>
                            {{ $about['official_name_'.session('locale')] ?? 'Birlamchi rasmiy ism' }}
                        </p>
                        <div class="rts-contact-link">
                            <a href="mailto:contact@reacthemes.com"><i
                                    class="fa-sharp fa-light fa-location-dot"></i> {{ $about['address_'.session('locale')] ?? 'Standart manzil' }}
                            </a>
                            <br>
                            <a class="" href="callto:+998 93 728 68 67"><i class="fa-thin fa-phone"></i> +998 93 728 68
                                67</a>
                        </div>
                    </div>

                    <div class=" col-6 col-lg-2 col-md-3  m-1"></div>

                    <div class="col-6 col-lg-2 col-md-3 mt-5">
                        <h6 class="mb-3 text-body fw-bold">
                            @if (app()->getLocale() == 'uz')
                                Menyu
                            @elseif (app()->getLocale() == 'en')
                                Menu
                            @else
                                Меню
                            @endif
                        </h6>


                        <a class="py-1 text-decoration-none d-block w-100 text-muted"
                           href="{{ route('about') }}">@lang('crud.menu.about')</a>


                        <a class="py-1 text-decoration-none d-block w-100 text-muted"
                           href="{{ route('news') }}">@lang('crud.menu.news')</a>


                        <a class="py-1 text-decoration-none d-block w-100 text-muted"
                           href="{{ route('startup') }}">@lang('crud.menu.start_up')</a>


                        <a class="py-1 text-decoration-none d-block w-100 text-muted"
                           href="{{ route('software') }}">@lang('crud.menu.software')</a>


                        <a class="py-1 text-decoration-none d-block w-100 text-muted"
                           href="{{ route('course') }}">@lang('crud.menu.course')</a>


                        <a class="py-1 text-decoration-none d-block w-100 text-muted "
                           href="{{ route('document') }}">@lang('crud.menu.document')</a>


                    </div>


                    <div class="col-6 col-lg-4 col-md-3 ps-lg-5 mt-5">
                        <div class="rts-footer-widget ml--30">
                            <iframe height="300"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9320.458032388887!2d66.9694552!3d39.6383979!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d1f8bc8499255%3A0x7d89646ab179a0fe!2sSamarqand%20Davlat%20Universiteti%20IT%20Markazi!5e0!3m2!1sen!2s!4v1662635733627!5m2!1sen!2s">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="py-4 bg-white footer-copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <span class="me-3 small">©{{ \Carbon\Carbon::now()->year }}
                    <b class="text-primary"><a href="/">IT-CENTER</a></b>. All rights reserved</span>
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
