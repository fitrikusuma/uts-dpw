<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Anaroz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{url('public')}}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('public')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{url('public')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{url('public')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('public')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('public')}}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
            <h2 class="m-0 text-primary">Anaroz</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
            </div>
            <a href="{{url('login')}}" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Login</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Free Quote</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Free Quote</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h1>{{ $artikel->judul }}</h1>
                    <hr>
                    <strong> Penulis : {{ $artikel->penulis }}</strong>
                    <p>
                        {{ $artikel->deskripsi }}
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </article>
    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="" class="control-label"><strong> Nama</strong></label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="form-group">
                <label for="" class="control-label">
                    <strong>Komentar</strong> :
                </label>
                <br>
                <textarea name="isi" name="" id="" cols="30" rows="10" class="form-control">
    
                                    </textarea>
            </div>
    
            <br>
            <button style="float: right" class="btn btn-dark"><i class="fa fa-save"></i>
                Post Komentar</button>
        </form>
    
        <br>
        <br>
        <br>
        <br>
        <hr>
        <div>
            <h1>Komentar Anaroz</h1>
            <hr>
            @foreach ($list_komen as $komen)
    
            <div class=" form-group">
                <p>
                <h4>{{ $komen->nama }}</h4>
                <p>{{ $komen->created_at->diffForHumans() }}</p>
                <p>{{ $komen->isi }}</p>
                </p>
    
            </div>
            <hr>
    
            @endforeach
        </div>
    
    </div>
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Anaroz</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="{{url('/')}}" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('public')}}/lib/wow/wow.min.js"></script>
    <script src="{{url('public')}}/lib/easing/easing.min.js"></script>
    <script src="{{url('public')}}/lib/waypoints/waypoints.min.js"></script>
    <script src="{{url('public')}}/lib/counterup/counterup.min.js"></script>
    <script src="{{url('public')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{url('public')}}/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{url('public')}}/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{url('public')}}/js/main.js"></script>
</body>

</html>