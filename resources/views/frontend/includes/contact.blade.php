<section id="Contact">
    <div class="container">
        <h1>{{ $settings['elaqe'] }}</h1>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="contact_left">
                    <h4>{{ $settings['form_contact'] }}</h4>
                    <div class="cont"><span><img src="{{ asset('assets/frontend') }}/img/MapPin.svg" alt=""></span>
                        <span>{{ $settings['unvan'] }}</span>
                    </div>
                    <div class="cont cont2">
                        <img src="{{ asset('assets/frontend') }}/img/Vector3.svg" alt="">
                        <span>

                                    <span>{{ $settings['footer_tel'] }}</span>
                                </span>
                    </div>

                    <div class="social">
                        <ul>
                            <li><a href="{{ $settings['facebook'] }}"><img src="{{ asset('assets/frontend') }}/img/facebook 1.svg" alt=""></a></li>
                            <li><a href="{{ $settings['instagram'] }}"><img src="{{ asset('assets/frontend') }}//img/instagram 2.svg" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('assets/frontend') }}/img/youtube 1.svg" alt=""></a></li>
                            <li><a href="{{ $settings['linkedin'] }}"><img src="{{ asset('assets/frontend') }}/img/linkedin 1.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="contact_right">
                    <form action="{{ route('frontend.home.contact.submit') }}" method="POST">
                        @csrf
                        <div class="Text_input">
                            <div class="form-group"> <label for="name">{{ $settings['fullname'] }}</label>
                                <input type="text" id="name" name="name" class=" form-control "
                                       placeholder="">
                                <div class="invalid-feedback">Text</div>
                            </div>

                            <div class="form-group"> <label for="email">{{ $settings['email'] }}</label>
                                <input type="text" id="email" name="email" class="email Input" placeholder="">
                            </div>

                            <div class="form-group"><label for="basliq">{{ $settings['movzu_basliqi'] }}</label>
                                <input type="text" id="subject" name="subject" class="basliq Input" placeholder="">
                            </div>

                            <div class="form-group"> <label for="">{{ $settings['mesajiniz'] }}</label>
                                <textarea name="message"></textarea>
                            </div>

                        </div>
                        <div class="Submit">
                            <input type="submit" value="{{ $settings['gonder'] }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
