
        <section class="fun-fact-one" id="Causes">
            <img src="{{ asset('frontend/images/banner-icon-1-4.png' ) }}" alt="Awesome Image" class="bubble-1" />
            <img src="{{ asset('frontend/images/banner-icon-1-2.png' ) }}" alt="Awesome Image" class="bubble-2" />
            <img src="{{ asset('frontend/images/banner-icon-1-1.png' ) }}" alt="Awesome Image" class="bubble-3" />
            <img src="{{ asset('frontend/images/banner-icon-1-6.png' ) }}" alt="Awesome Image" class="bubble-4" />
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__text"><span>{{$section3and4->heading1}}</span></div><!-- /.block-title__text -->
                </div><!-- /.block-title -->
                <div class="fun-fact-one__box-wrapper">
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                            {{$section3and4->events}}
                            </h3><!-- /.fun-fact-one__title -->
                            <p class="fun-fact-one__text">
                                Events
                            </p><!-- /.fun-fact-one__text -->
                        </div><!-- /.inner-block -->
                    </div><!-- /.fun-fact-one__single -->
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                            {{$section3and4->volunteer}}
                            </h3><!-- /.fun-fact-one__title -->
                            <p class="fun-fact-one__text">
                                Volunteer
                            </p><!-- /.fun-fact-one__text -->
                        </div><!-- /.inner-block -->
                    </div><!-- /.fun-fact-one__single -->
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                            {{$section3and4->mission}}
                            </h3><!-- /.fun-fact-one__title -->
                            <p class="fun-fact-one__text">
                                Mission
                            </p><!-- /.fun-fact-one__text -->
                        </div><!-- /.inner-block -->
                    </div><!-- /.fun-fact-one__single -->
                    <div class="fun-fact-one__single">
                        <div class="inner-block">
                            <h3 class="fun-fact-one__title counter">
                            {{$section3and4->awards}}
                            </h3><!-- /.fun-fact-one__title -->
                            <p class="fun-fact-one__text">
                                awards
                            </p><!-- /.fun-fact-one__text -->
                        </div><!-- /.inner-block -->
                    </div><!-- /.fun-fact-one__single -->
                </div><!-- /.fun-fact-one_box-wrapper -->
            </div><!-- /.container -->
        </section><!-- /.fun-fact-one -->
