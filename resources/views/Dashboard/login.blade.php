<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dayaku Raja</title>
    <link rel="stylesheet" href="{{ asset('dashboard/css/main/app.css') }}">
</head>

<body>
    @include('sweetalert::alert')
    <div id="app">
        <div id="main-content">
            <section class="vh-100" style="background-color: #63e29c;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                                <div class="card-body p-5 text-center">

                                    <h3 class="mb-5">Silahkan Login</h3>
                                    <form action="/auth" method="post">
                                        @csrf

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="typeEmailX-2">
                                                <h5>Username</h5>
                                            </label>
                                            <input type="text" id="typeEmailX-2" name="username"
                                                class="form-control form-control-lg" />

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="typeEmailX-2">
                                                <h5>Password</h5>
                                            </label>
                                            <input type="password" id="typePasswordX-2" name="password"
                                                class="form-control form-control-lg" />
                                        </div>

                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                                        <hr class="my-4">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
