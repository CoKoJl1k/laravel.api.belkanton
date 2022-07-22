@include('header')

@include('success_message')

@include('errors')

@section('content')
<!--
<style>
        @import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500);
        .contact3 {
            font-family: "Montserrat", sans-serif;
            color: #8d97ad;
            font-weight: 300;
        }
        .contact3 h1,
        .contact3 h2,
        .contact3 h3,
        .contact3 h4,
        .contact3 h5,
        .contact3 h6 {
            color: #3e4555;
        }
        .contact3 .font-weight-medium {
            font-weight: 500;
        }
        .contact3 .card-shadow {
            -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
            box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
        }

        .contact3 .btn-danger-gradiant {
            background: #ff4d7e;
            background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
            background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
            background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
            background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
            background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
        }

        .contact3 .btn-danger-gradiant:hover {
            background: #ff6a5b;
            background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
            background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
            background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
            background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
            background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
        }
    </style>
<div class="container" style="margin-top: 50px;" >
    <div class="contact3 py-5">
        <div class="row no-gutters">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-shadow">
                            <img src="<?= asset('storage') ?>/images/2.jpg" class="img-fluid">

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-box ml-3">
                            <h1 class="font-weight-light mt-2">Quick Contact</h1>
                            <form class="mt-4"  action="/contacts" >
                                @method('POST')
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input class="form-control" type="text" placeholder="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input class="form-control" type="email" placeholder="email address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <input class="form-control" type="text" placeholder="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mt-2">
                                            <textarea class="form-control" rows="3" placeholder="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-danger-gradiant mt-3 text-white border-0 px-3 py-2"><span> SUBMIT</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card mt-4 border-0 mb-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="card-body d-flex align-items-center c-detail pl-0">
                                        <div class="mr-3 align-self-center">

                                            <img src="<?= asset('storage') ?>/images/icon1.png">
                                        </div>
                                        <div class="">
                                            <h6 class="font-weight-medium">Address</h6>
                                            <p class="">601 Sherwood Ave.
                                                <br> San Bernandino</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card-body d-flex align-items-center c-detail">
                                        <div class="mr-3 align-self-center">
                                            <img src="<?= asset('storage') ?>/images/icon2.png">
                                        </div>
                                        <div class="">
                                            <h6 class="font-weight-medium">Phone</h6>
                                            <p class="">251 546 9442
                                                <br> 630 446 8851</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card-body d-flex align-items-center c-detail">
                                        <div class="mr-3 align-self-center">
                                            <img src="<?= asset('storage') ?>/images/icon3.png">

                                        </div>
                                        <div class="">
                                            <h6 class="font-weight-medium">Email</h6>
                                            <p class="">
                                                info@wrappixel.com
                                                <br> 123@wrappixel.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
-->
<div class="container" style="margin-top: 100px;" >



        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control">
                                <label for="name" class="">Your name</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control">
                                <label for="email" class="">Your email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="">Subject</label>
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <div class="text-center text-md-left">
                    <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
                </div>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>San Francisco, CA 94126, USA</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>contact@mdbootstrap.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>


 </div>

@endsection

@yield('content')

@include('footer')
