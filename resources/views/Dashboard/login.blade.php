<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RSUD DAYAKU RAJA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="shortcut icon" href="{{ asset('img/dara.png') }}" type="image/x-icon">

   
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
        <div class="container">
            <div class="row  bg-light justify-content-md-center text-center h-100 mb-10">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2 mt-10">Hubungi Kami</p>
                    <h1 class="display-5">Silahkan Login</h1>
                </div>
                <div class="col-md-5 bg-light wow fadeInUp " data-wow-delay="0.5s">
                    <form method="post" action="/auth">
                        @csrf
                        <div class="row justify-content-md-center bg-primary mb-2 ">
                            <div class="row justify-content-md-center mb-4 mt-4">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Nama Lengkap" required>
                                        <label for="nama">Username</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center mb-4">
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password" required>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center mb-4">
                                <div class="col-m">
                                    <button class="btn btn-outline-info rounded-pill py-3 px-5" type="submit">login</button>
                                    
                                </div>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    
</body>

</html>