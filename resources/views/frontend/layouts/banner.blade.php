        <section class="banner-one banner-one__home-two" style="
    background-image: url('{{ Voyager::image( $sitesetting->top_bg_image ) }}')" id="home">
            <img src=" {{ Voyager::image( $sitesetting->top_right_image ) }}  "class="banner-one__moc" alt="Awesome Image" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-one__content">
                            <div class="block-title">
                                <div class="block-title__text"><span></span>
                                {{$sitesetting->top_heading}}</div><!-- /.block-title__text -->
                            </div><!-- /.block-title -->
                            <p class="banner-one__text">{{$sitesetting->top_sub_heading}}</p><!-- /.banner-one__text -->
                            <a href="#" class="banner-one__btn">Get Started</a>
                        </div><!-- /.banner-one__content -->
                    </div><!-- /.col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.banner-one -->
