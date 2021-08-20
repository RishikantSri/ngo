
        <footer class="site-footer">
            <img src="{{ asset('frontend/images/banner-icon-1-1.png' ) }}" alt="Awesome Image" class="bubble-1" />
            <img src="{{ asset('frontend/images/banner-icon-1-3.png' ) }}" alt="Awesome Image" class="bubble-2" />
            <img src="{{ asset('frontend/images/banner-icon-1-2.png' ) }}" alt="Awesome Image" class="bubble-3" />
            <img src="{{ asset('frontend/images/banner-icon-1-4.png' ) }}" alt="Awesome Image" class="bubble-4" />
         
           <section class="service-one" id="Donate">
            <div class="site-footer__subscribe">
                <div class="container">
                    <div class="block-title text-center">
                        <div class="block-title__text"><span>{{$section5and6->Donation_heading}}</span></div><!-- /.block-title__text -->
                    </div><!-- /.block-title -->
                    @if (Session::has('donationmessage'))
                                <div class="alert alert-{{ Session::get('code') }}">
                                    <p>{{ Session::get('donationmessage') }}</p>
                                </div>
                    @endif
                    
                    <form action="{{ route('paypal.express-checkout') }}" class="site-footer__subscribe-form" method="POST" enctype="multipart/form-data">
                     @csrf
                     @method('POST')
                        <input type="number" name="amount" placeholder="{{$section5and6->Donation_placeholder}}">
                        <button type="submit">Donate</button>
                    </form>


                </div><!-- /.container -->
            </div><!-- /.site-footer__subscribe -->
            </section>
            <div class="site-footer__main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget footer-widget--about-widget">
                                <a href="index.html" class="footer-widget__footer-logo"><img src="{{ asset('frontend/images/logo-2-1.png' ) }}" alt="Awesome Image" /></a>
                                <p>{{$sitesetting->footer_mobile}}</p>
                                <p>{{$sitesetting->footer_email}}</p>
                                <p>{{$sitesetting->footer_address}}<br>
                                   </p>
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">
                                    Explore
                                </h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__link-list">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Features</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">How It Works</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">
                                    Services
                                </h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__link-list">
                                    <li><a href="#">Speed Optimization</a></li>
                                    <li><a href="#">Marketing Analysis</a></li>
                                    <li><a href="#">SEO and Backlinks</a></li>
                                    <li><a href="#">Content Marketing</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">
                                    Links
                                </h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__link-list">
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul><!-- /.footer-widget__link-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                        <div class="col-lg-2 col-md-6 col-sm-12 d-flex">
                            <div class="footer-widget my-auto">
                                <div class="social-block">
                                    <a href="{{$sitesetting->twitter}}"><i class="fa fa-twitter"></i></a>
                                    <a href="{{$sitesetting->facebook}}"><i class="fa fa-facebook-f"></i></a>
                                    <a href="{{$sitesetting->linkedin}}"><i class="fa fa-linkedin"></i></a>
                                    <a href="{{$sitesetting->youtube}}"><i class="fa fa-youtube-play"></i></a>
                                </div><!-- /.social-block -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-2 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__main-footer -->
            <div class="site-footer__bottom-footer text-center">
                <div class="container">
                    <p>{{$sitesetting->copy_right_message}}</p>
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom-footer -->
        </footer><!-- /.site-footer -->
 