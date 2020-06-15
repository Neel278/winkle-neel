<div>
    <div>
        <div class="hero-wrap hero-bread" style="background-image: url({{asset('assets/images/bg_6.jpg')}});">
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center">
                    <div class="col-md-9 ftco-animate text-center">
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/home') }}">Home</a></span> <span>Login</span></p>
                        <h1 class="mb-0 bread">Login</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 ftco-animate">
                        <form action="#" class="billing-form">
                            <h3 class="mb-4 billing-heading">User Login Details</h3>
                            <div class="row align-items-end">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" id="last_name" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_id">Email Address</label>
                                        <input type="email" id="email_id" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="signup_password">Password</label>
                                        <input type="password" id="signup_password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input type="password" id="confirm_password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-md-12 offset-md-5 ">
                                    <div class="form-group">
                                        <button class="btn btn-primary py-3 px-4" type="submit">Login</button>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-md-12 offset-md-4">
                                    <div class="form-group mt-4">
                                        <div class="radio">
                                            <label class="mr-3"> ALready have an Account ? <a href="{{ url('/login') }}">Login Here</a> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form><!-- END -->
                    </div> <!-- .col-md-8 -->
                </div>
            </div>
        </section> <!-- .section -->
    </div>
</div>