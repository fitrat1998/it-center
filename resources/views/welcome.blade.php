@extends('layouts.app')

@section('content')
    <nav class="navbar  text-white navbar-expand-lg navbar-light bg-white shadow-sm p-0 main-header-nav"
         id="nav-bar">
        <div class="container">
            <a href="index-2.html" class="brand d-flex align-items-center mb-0 text-decoration-none me-4">
                <img src="img/logo.png" class="img-fluid" alt="sikshaa"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto gap-2 mb-2 mb-lg-0">
                    <li class="nav-item mx-2">
                        <a class="nav-link px-0 py-4 active" href="index-2.html">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link px-0 py-4" href="about.html">About</a>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle px-0 py-4" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Main Pages
                        </a>
                        <ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
                            <li><a class="dropdown-item px-3 py-2 rounded" href="courses.html">All Courses</a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="courses-detail.html">Courses Detail</a>
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="successful.html">Order Successful</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle px-0 py-4" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Account Pages
                        </a>
                        <ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
                            <li><a class="dropdown-item px-3 py-2 rounded" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="my-courses.html">My Courses</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2 dropdown">
                        <a class="nav-link dropdown-toggle px-0 py-4" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Extra Pages
                        </a>
                        <ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
                            <li><a class="dropdown-item px-3 py-2 rounded" href="signin.html">Login</a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="signup.html">Signup</a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="forgot.html">Forgot</a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="faq.html">FAQ</a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="careers.html">Careers</a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="testimonials.html">Testimonials</a>
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="terms-and-conditions.html">Terms &
                                    Conditions</a></li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                            <li><a class="dropdown-item px-3 py-2 rounded" href="404.html">Not Found 404</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link px-0 py-4" href="contact.html">Contact</a>
                    </li>
                </ul>
                <div class="d-flex gap-4 align-items-center">
                    <a href="signin.html" class="text-decoration-none text-black fw-bold">Log In</a>
                    <a href="signup.html" type="button" class="btn btn-danger btn-sm fw-bold">Sign up</a>
                </div>
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
                                    <img src="img/projects/p3.jpg" class="d-block w-100" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Your Caption Here</h5>
                                        <p>Additional text goes here</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-image">
                                    <img src="img/projects/p4.jpg" class="d-block w-100" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Your Caption Here</h5>
                                        <p>Additional text goes here</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-image">
                                    <img src="img/projects/p8.jpg" class="d-block w-100" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Your Caption Here</h5>
                                        <p>Additional text goes here</p>
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
                    <img src="img/homepage.svg" class="img-fluid" alt="#" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold lh-1 mb-3 text-body"><span class="text-danger">Sikshaa</span> is a
                        community for creative people.</h1>
                    <p class="lead fw-normal text-dark mb-0">Learn from expert professionals and<br> join
                        the largest online community for creatives.
                    </p>
                    <form action="https://webartinfo.com/templatemonster/sikshaa/services.html" class="py-2">
                        <div class="d-flex my-4 shadow-sm bg-white rounded-3 align-items-center services-search-form">
                            <div class="form-floating services-search-form-service">
                                <input type="text" class="form-control" id="sservice" placeholder="Enter Service...">
                                <label for="sservice">What <span class="fw-bold text-body">courses</span> do you
                                    need?</label>
                            </div>
                            <div class="form-floating services-search-form-zip">
                                <input type="text" class="form-control" id="sservice" placeholder="Enter ZIP Code...">
                                <label for="sservice"><i class="icofont-list text-body fs-6 me-1"></i> Areas</label>
                            </div>
                            <button class="btn btn-primary" type="button"><i class="icofont-search-1"></i></button>
                        </div>
                    </form>
                    <div class="popular-tagss">
                        <span class="small py-1 text-decoration-none fw-bold text-body me-2">Popular</span>
                        <a href="#"
                           class="small px-2 py-1 rounded-pill bg-white text-decoration-none fw-normal border text-muted me-1">
                            Illustration </a>
                        <a href="#"
                           class="small px-2 py-1 rounded-pill bg-white text-decoration-none fw-normal border text-muted me-1">
                            3D </a>
                        <a href="#"
                           class="small px-2 py-1 rounded-pill bg-white text-decoration-none fw-normal border text-muted me-1">
                            Web & App Design </a>
                        <a href="#"
                           class="small px-2 py-1 rounded-pill bg-white text-decoration-none fw-normal border text-muted me-1">
                            Fashion </a>
                        <a href="#"
                           class="small px-2 py-1 rounded-pill bg-white text-decoration-none fw-normal border text-muted me-1">
                            Marketing & Business </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="feature-list d-none d-sm-block py-5 border-bottom bg-white">
        <div class="container py-4">
            <heading>
                <h3 class="text-center pb-4 mb-4 fw-bold text-black">What to expect from a Sikshaa course</h3>
            </heading>
            <div class="row">
                <div class="col-md-6 gap-4 d-flex">
                    <div><i class="bi bi-emoji-smile text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">Learn at your own pace</h5>
                        <p class="fs-14 mb-4">It is a long established fact that a reader will be distracted by the
                            readable
                            content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                            a
                            more-or-less normal distribution of letters, as opposed to using.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 gap-4 d-flex">
                    <div><i class="bi bi-laptop text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">Get front row seats</h5>
                        <p class="fs-14 mb-4">Content here, content here', making it look like readable English. Many
                            desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                            text, and a search for 'lorem.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 gap-4 d-flex">
                    <div><i class="bi bi-hand-thumbs-up text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">Learn from the best professionals</h5>
                        <p class="fs-14 mb-4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                            Richard McClintock, a Latin professor at Hampden.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex gap-4">
                    <div><i class="bi bi-people text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">Share knowledge and ideas</h5>
                        <p class="fs-14 mb-4">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour, or randomised words
                            which
                            don't look even slightly believable.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex gap-4">
                    <div><i class="bi bi-person-badge text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">Meet expert instructors</h5>
                        <p class="fs-14 mb-4">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below
                            for
                            those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex gap-4">
                    <div><i class="bi bi-circle text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">Connect with a global creative community</h5>
                        <p class="fs-14 mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                            quasi
                            architecto beatae vitae dict.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex gap-4">
                    <div><i class="bi bi-bookmark-heart text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">Earn a certificate with every course <span
                                class="badge bg-primary">New</span></h5>
                        <p class="fs-14 mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                            occaecati cupiditate non
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex gap-4">
                    <div><i class="bi bi-person-check text-muted display-6"></i></div>
                    <div>
                        <h5 class="card-title fw-bold text-black">Watch professionally produced courses</h5>
                        <p class="fs-14 mb-4">But I must explain to you how all this mistaken idea of denouncing
                            pleasure
                            and praising pain was born and I will give you a complete account of the system cupiditate
                            non
                            provident
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses -->
    <main class="bg-light py-5 border-bottom">
        <div class="container py-4">
            <h3 class="pb-4 fw-bold text-black text-center">Courses By Category</h3>
            <div class="row gy-3 row-cols-xl-6 row-cols-lg-5 row-cols-md-3 row-cols-2">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category1.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">illustration</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category2.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">Craft</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category3.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">Marketing & business</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category4.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">Photography and Video</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category5.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">Design</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category6.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">3D and Animation</h6>
                        </div>
                    </div>
                </div>
                <!-- 2nd row -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category7.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">Architecture & Spaces</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category8.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">Web & App Design</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category9.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">Writing</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category10.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">Calligraphy & Typography</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category11.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">Fashion</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item cat-itemm">
                        <img src="img/category/category12.jpg" class="img-fluid">
                        <div class="card-body">
                            <h6 class="card-title m-0">Music & Audio</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="bg-light py-5 feature-list border-bottom">
        <div class="container py-4">
            <div class="pb-2">
                <h4 class="fw-bold text-black">The Community for Creative People</h4>
                <p class="mb-4 text-muted">The largest online community of creatives. A network of millions of
                    professionals
                    with whom you can share knowledge.</p>
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
                <!-- 5th image -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Hola Bosque</h5>
                            <p class="card-text text-muted">Buenos Aires, Argentina</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">2241 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                    </div>
                </div>
                <!-- 6th image -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Luaiso Lopez</h5>
                            <p class="card-text text-muted">Barcelona, Spain</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">35802 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                    </div>
                </div>
                <!-- 7th image -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Ameskeria</h5>
                            <p class="card-text text-muted">Barcelona, Spain</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">35241 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                    </div>
                </div>
                <!-- 8th image -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Elias Mule</h5>
                            <p class="card-text text-muted">Adolfo López Mateos, Mexico</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">1175 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                    </div>
                </div>
                <!-- 9th image -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities9.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Agustin Arroyo</h5>
                            <p class="card-text text-muted">Madrid, Spain</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">8742 followers</p>
                            <button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Follow</button>
                        </div>
                    </div>
                </div>
                <!-- 10th image -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="img/communities/communities10.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">Rafa Zabala</h5>
                            <p class="card-text text-muted">Singapur, Singapore</p>
                        </div>
                        <div
                            class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
                            <p class="text-muted small mb-0">3848 followers</p>
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
