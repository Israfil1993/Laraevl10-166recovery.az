<section id="Fifth">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6  col-sm-12">
                <div class="Map">
                    <img src="{{ asset('assets/frontend') }}/img/map2.png" class="map" alt="">

                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="fifth_right">
                    <h5><span class="sp_f">{{ $settings['azerbaycanin'] }}</span><br>
                        <span class="sp_s">{{ $settings['butun_rayonlar'] }}</span> <br>
                        <span class="sp_t">{{ $settings['fealiyyet_gosteririk'] }}</span>
                    </h5>

                    <div><a href="{{ route('frontend.contact', ['lang' => app()->getLocale()]) }}">{{ $settings['yazin'] }}</a></div>

                </div>
            </div>
        </div>
    </div>
</section>
