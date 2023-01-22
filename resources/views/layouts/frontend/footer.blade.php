<footer class="bg-green mt-3">
    <div class="container">
        <div class="row justify-content-md-between pb-5">
            <div class="col-md-3 col mt-5 d-flex flex-md-column justify-content-between justify-content-md-start align-items-center">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('images/logo.png') }}" width="70" height="70">
                </div>
                <div class="d-flex mt-md-4">
                    <a href="https://www.instagram.com/" target="_blank" class="mx-3" style="text-decoration: none; color:black;">
                        <i class="fa fa-instagram fa-lg bg-white rounded-circle" style="padding: 0.5em 0.5em;" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" class="mx-3" style="text-decoration: none; color:black;">
                        <i class="fa fa-facebook fa-lg bg-white rounded-circle" style="padding: 0.5em 0.65em;" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="mx-3" style="text-decoration: none; color:black;">
                        <i class="fa fa-twitter fa-lg bg-white rounded-circle" style="padding: 0.5em 0.47em;" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="d-flex justify-content-md-center justify-content-between text-white col-md-6 mt-5">
                <div class="mx-md-5">
                    <p class="fw-bold">About</p>
                    <p>
                        <a href="{{ url('/#about') }}" class="text-white" style="text-decoration: none;">About Us</a>
                    </p>
                </div>
                <div class="mx-md-5">
                    <p class="fw-bold">Information</p>
                    <p>
                        <p href="#" class="text-muted" style="text-decoration: none;">Contact</p>
                    </p>
                    <p>
                        <p href="#" class="text-muted" style="text-decoration: none;">Partnership</p>
                    </p>
                </div>
                <div class="mx-md-5">
                    <p class="fw-bold">Bantuan</p>
                    <p>
                        <p href="#" class="text-muted" style="text-decoration: none;">FAQ</p>
                    </p>
                </div>
            </div>

            <div class="col-md-3 mt-5">
                <div class="text-white">
                    <p class="fw-bold">Feedback</p>
                    <p>Questions or suggestions,
                        can be submitted via
                        email
                        by the following column</p>
                    <div class="input-group">
                        <input type="text" name="email-send" class="form-control" placeholder="Email Address" style="border-radius: 25px 0 0 25px; box-shadow: none; border: none;">
                        <button class="btn bg-white border-0" type="button" id="button-addon2"  style="border-radius: 0 25px 25px 0;">
                            <img src="{{ asset('images/button-send.png') }}" alt="" class="" width="30">
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</footer>