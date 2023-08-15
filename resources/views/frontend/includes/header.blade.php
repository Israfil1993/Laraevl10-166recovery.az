<header>
    <div class="container">
        <div class="header">
            <div class="header-left">
                <a href="{{ route('frontend.index', ['lang' => app()->getLocale()]) }}"> <img src="{{ asset('assets/frontend') }}/img/logo.png" alt="" /></a>
                <ul class="Left_ul_head">
                    <li><a href="{{ route('frontend.index', ['lang' => app()->getLocale()]) }}" class="active">Evakuasiya.az</a></li>
                    <li><a href="{{ route('frontend.order',  ['lang' => app()->getLocale()]) }}">{{ $settings['sifaris_et'] }}</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#exampleModal">{{ $settings['online_odenis'] }}</a></li>
                </ul>
            </div>

            <div class="header-right">
                <div class="cont">
                    <span><img src="{{ asset('assets/frontend') }}/img/MapPin.svg" alt="" /></span>
                    <span class="Span_addr">{{ $settings['unvan'] }}</span>
                </div>

                <div class="cont cont2">
                    <img src="{{ asset('assets/frontend') }}/img/Vector3.svg" alt="" />
                    <span><span>+994 (050) 555 55 55</span><br /><span>+994 (012) 999 99 99</span></span>
                </div>

                <div class="lang lang_sec">
                    <div class="select">
                        <div class="selectBtn" data-type="selectedOption">
                            @php
                                $currentLocale = app()->getLocale();
                            @endphp
                            <div class="active">{{ ucfirst($currentLocale == 'az' ? 'ar' :$currentLocale) }}</div>
                        </div>
                        <div class="selectDropdown">
                            @php
                                $currentRoute = Route::currentRouteName();
                                $params = request()->route()->parameters();
                            @endphp
                            @foreach(['az', 'en', 'ru'] as $locale)

                                <div class="option" data-type="{{ $locale }}Option">
                                    <a href="{{ route($currentRoute, ['lang' => $locale] + $params) }}" id="lang_{{ $locale }}" data-lang="{{ $locale }}">{{   ucfirst( $locale == 'az' ? 'ar' : $locale) }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="bar bar-design">
                    <img src="{{ asset('assets/frontend') }}/img/List.svg" alt="" />
                </div>
            </div>

            <div class="bar-open">
                <div class="close bar-design">
                    <img src="{{ asset('assets/frontend') }}/img/fi_x.svg" alt="" />
                </div>
                <ul class="main_ul">
                    <li class="main_li active">
                        <a href="{{ route('frontend.index', ['lang' => app()->getLocale()]) }}">{{ $settings['home'] }}</a>
                    </li>
                    <li class="main_li drop">
                        <a href="#" class="nav_i">{{ $settings['niye_biz'] }}</a><i class="fas fa-chevron-down nav_i"></i>
                        <ul class="sec_ul">
                            <li><a href="{{ route('frontend.about', ['lang' => app()->getLocale()]) }}">{{ $settings['haqqimizda'] }}</a></li>
                            <li><a href="{{ route('frontend.partners', ['lang' => app()->getLocale()]) }}">{{ $settings['partnyorlar'] }}</a></li>
                            <li><a href="{{ route('frontend.faq', ['lang' => app()->getLocale()]) }}">{{ $settings['questions'] }}</a></li>
                        </ul>
                    </li>
                    <li class="main_li"><a href="{{ route('frontend.services', ['lang' => app()->getLocale()]) }}">{{ $settings['xidmet'] }}</a></li>
                    <li class="main_li"><a href="{{ route('frontend.blog', ['lang' => app()->getLocale()]) }}">{{ $settings['xeberler'] }}</a></li>
                    <li class="main_li"><a href="{{ route('frontend.gallery', ['lang' => app()->getLocale()]) }}">{{ $settings['nailiyyetler'] }}</a></li>
                    <li class="main_li"><a href="{{ route('frontend.vacancy', ['lang' => app()->getLocale()]) }}">{{ $settings['karyera'] }}</a></li>
                    <li class="main_li"><a href="{{ route('frontend.esaskorparativ', ['lang' => app()->getLocale()]) }}">{{ $settings['korporativ'] }}</a></li>
                    <li class="main_li"><a href="{{ route('frontend.contact', ['lang' => app()->getLocale()]) }}">{{ $settings['elaqe'] }}</a></li>
                </ul>
                <div class="social">
                    <ul>
                        <li><a href="{{ $settings['facebook'] }}"><img src="{{ asset('assets/frontend') }}/img/facebook 1.svg" alt="" /></a></li>
                        <li><a href="{{ $settings['instagram'] }}"><img src="{{ asset('assets/frontend') }}/img/instagram 2.svg" alt="" /></a></li>
                        <li><a href="#"><img src="{{ asset('assets/frontend') }}/img/youtube 1.svg" alt="" /></a></li>
                        <li><a href="{{ $settings['linkedin'] }}"><img src="{{ asset('assets/frontend') }}/img/linkedin 1.svg" alt="" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
