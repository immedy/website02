@extends('Layout.LandingPageLayout')
@section('LandigPage')
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container-fluid">
            
            
            <div class="row g-5 bg-light text-center h-100 p-5 mb-10">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Hubungi Kami</p>
                    <h1 class="display-5 mb-4">JIka Anda Mempunyai Keluhan Tentang Pelayanan Kami</h1>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="divider">
                                <code>Data Pelapor</code>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="divider">
                                <code>Data Pasien</code>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="divider">
                    <code><hr></code>
                </div>
                <div class="row g justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light text-center h-100 p-5">
                            <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-phone-alt fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Phone Number</h4>
                            <p class="mb-2">+012 345 67890</p>
                            <p class="mb-4">+012 345 67890</p>
                            <a class="btn btn-primary px-4" href="tel:+0123456789">Call Now <i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-light text-center h-100 p-5">
                            <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-envelope-open fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Email Address</h4>
                            <p class="mb-2">info@example.com</p>
                            <p class="mb-4">support@example.com</p>
                            <a class="btn btn-primary px-4" href="mailto:info@example.com">Email Now <i
                                    class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-light text-center h-100 p-5">
                            <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Office Address</h4>
                            <p class="mb-2">+012 345 67890</p>
                            <p class="mb-4">+012 345 67890</p>
                            <a class="btn btn-primary px-4" href="https://goo.gl/maps/FsznshxgnULBGgkN9"
                                target="blank">Direction <i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
