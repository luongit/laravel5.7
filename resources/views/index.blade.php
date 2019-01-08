@extends('layout.home')

@section('content')
<!-- section begin -->
<section id="page-events" class="no-padding">
    <div class="fullwidth">
        <div class="one-fourth text-center">
            <div class="title-area wow slideInLeft">
                <span>Upcoming</span>
                <h1>Events</h1>
            </div>
        </div>

        <div class="three-fourth">
            <div class="fx custom-carousel-1">
                <div class="item">
                    <div class="overlay">
                        <span class="time">February 6, 2017</span>
                        <a href="#">
                            <h3>Family Baptism Class</h3>
                        </a>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                        </span>
                    </div>
                    <img src="{{url('public/home')}}/img/events/pic%20(1).jpg" alt="">
                </div>

                <div class="item">
                    <div class="overlay">
                        <span class="time">February 10, 2017</span>
                        <a href="#">
                            <h3>Transforming Live</h3>
                        </a>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                        </span>
                    </div>
                    <img src="{{url('public/home')}}/img/events/pic%20(2).jpg" alt="">
                </div>

                <div class="item">
                    <div class="overlay">
                        <span class="time">February 20, 2017</span>
                        <a href="#">
                            <h3>Relationship With God</h3>
                        </a>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                        </span>
                    </div>
                    <img src="{{url('public/home')}}/img/events/pic%20(3).jpg" alt="">
                </div>

                <div class="item">
                    <div class="overlay">
                        <span class="time">February 26, 2017</span>
                        <a href="#">
                            <h3>Abundant Life</h3>
                        </a>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                        </span>
                    </div>
                    <img src="{{url('public/home')}}/img/events/pic%20(4).jpg" alt="">
                </div>

                <div class="item">
                    <div class="overlay">
                        <span class="time">March 1, 2017</span>
                        <a href="#">
                            <h3>God is Good</h3>
                        </a>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                        </span>
                    </div>
                    <img src="{{url('public/home')}}/img/events/pic%20(5).jpg" alt="">
                </div>

                <div class="item">
                    <div class="overlay">
                        <span class="time">March 10, 2017</span>
                        <a href="#">
                            <h3>Jehovah Jireh</h3>
                        </a>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                        </span>
                    </div>
                    <img src="{{url('public/home')}}/img/events/pic%20(6).jpg" alt="">
                </div>

            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="countdown-container" data-speed="5" data-type="background">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 wow fadeInLeft">
                <h3>Transforming Live, Restoring Hope</h3>
                <span class="time">April 10, 2017 8:00 pm</span>
            </div>

            <div class="col-md-6 wow fadeInRight" data-wow-delay=".25s">
                <div id="defaultCountdown"></div>
            </div>
        </div>
    </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-text">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center wow fadeInUp">
                <h2>About The Church</h2>
                <div class="divider-double"></div>
            </div>

            <div class="col-md-4 wow fadeInRight" data-wow-delay=".5s">
                <img src="{{url('public/home')}}/img/misc/pic-1.jpg" class="img-responsive" alt="">
                <h3>Our Community</h3>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                <br>
                <br>
                <a href="#" class="st-btn">Read More</a>
            </div>
            <div class="col-md-4 wow fadeInRight" data-wow-delay=".75s">
                <img src="{{url('public/home')}}/img/misc/pic-2.jpg" class="img-responsive" alt="">
                <h3>Church Mission</h3>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                <br>
                <br>
                <a href="#" class="st-btn">Read More</a>
            </div>
            <div class="col-md-4 wow fadeInRight" data-wow-delay="1s">
                <img src="{{url('public/home')}}/img/misc/pic-3.jpg" class="img-responsive" alt="">
                <h3>Participate With Us</h3>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                <br>
                <br>
                <a href="#" class="st-btn">Read More</a>
            </div>
        </div>
    </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="latest-sermons">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center wow fadeInUp">
                <h2>Latest Sermons</h2>
                <div class="divider-double"></div>
            </div>

            <div class="col-md-10 col-md-offset-1">
                <div class="custom-col-3 wow flipInX">
                    <div class="left-col">
                        <img src="{{url('public/home')}}/img/sermons/pic%20(1).jpg" alt="" class="img-responsive">
                    </div>
                    <div class="mid-col">
                        <a href="#">
                            <h3>Transforming Live, Restoring Hope</h3>
                        </a>
                        <div class="details"><span>By <a href="#">John Rook</a>, February 08, 2017</span></div>
                    </div>
                    <div class="right-col">
                        <a href="#"><i class="fa fa-video-camera"></i></a>
                        <a href="#"><i class="fa fa-volume-up"></i></a>
                        <a href="#"><i class="fa fa-file-pdf-o"></i></a>
                    </div>
                </div>

                <div class="custom-col-3 wow flipInX">
                    <div class="left-col">
                        <img src="{{url('public/home')}}/img/sermons/pic%20(2).jpg" alt="" class="img-responsive">
                    </div>
                    <div class="mid-col">
                        <a href="#">
                            <h3>Put Your Faith Into Action</h3>
                        </a>
                        <div class="details"><span>By <a href="#">Allan Poe</a>, February 15, 2017</span></div>
                    </div>
                    <div class="right-col">
                        <a href="#"><i class="fa fa-video-camera"></i></a>
                        <a href="#"><i class="fa fa-volume-up"></i></a>
                        <a href="#"><i class="fa fa-file-pdf-o"></i></a>
                    </div>
                </div>


                <div class="custom-col-3 wow flipInX">
                    <div class="left-col">
                        <img src="{{url('public/home')}}/img/sermons/pic%20(3).jpg" alt="" class="img-responsive">
                    </div>
                    <div class="mid-col">
                        <a href="#">
                            <h3>Find And You Shall Seek</h3>
                        </a>
                        <div class="details"><span>By <a href="#">Ron Ward</a>, February 22, 2017</span></div>
                    </div>
                    <div class="right-col">
                        <a href="#"><i class="fa fa-video-camera"></i></a>
                        <a href="#"><i class="fa fa-volume-up"></i></a>
                        <a href="#"><i class="fa fa-file-pdf-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- section close -->



    <!-- section begin -->
    <section id="section-text-2" class="no-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s">
                <h1>Take Me To Church</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.						
                </p>

                <p class="wow fadeIn" data-wow-delay='1.5s'>
                    <img src="{{url('public/home')}}/img/misc/pic-5.png" alt="">
                </p>

            </div>

            <div class="col-md-6 wow fadeInUp">
                <img src="{{url('public/home')}}/img/misc/pic-4.png" class="img-responsive" alt="">
            </div>
        </div>
    </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="page-blog" class="no-padding">

    <div class="fullwidth">
        <div class="one-fourth text-center">
            <div class="title-area wow slideInLeft">
                <span>Latest</span>
                <h1>Blog</h1>
            </div>
        </div>

        <div class="three-fourth">
            <div class="custom-carousel-2">
                <div class="item-blog">
                    <div class="inner">
                        <span class="date">10 November</span>
                        <a href="#">
                            <h3>Gods goal for you</h3>
                        </a>
                        <span class="desc">The Bible says, "Give thanks in everything"  consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </span>
                    </div>
                </div>

                <div class="item-blog even">
                    <div class="inner">
                        <span class="date">9 November</span>
                        <a href="#">
                            <h3>The Bible on Campus</h3>
                        </a>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </span>
                    </div>
                </div>

                <div class="item-blog">
                    <div class="inner">
                        <span class="date">8 November</span>
                        <a href="#">
                            <h3>A Faithful Witness</h3>
                        </a>
                        <span class="desc">Those who are prepared to witness and sensitive to opportunities the Lord opens up will find occasions on every hand to share Christ.
                        </span>
                    </div>
                </div>

                <div class="item-blog even">
                    <div class="inner">
                        <span class="date">7 November</span>
                        <a href="#">
                            <h3>Transfoming Live</h3>
                        </a>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </span>
                    </div>
                </div>

                <div class="item-blog">
                    <div class="inner">
                        <span class="date">6 November</span>
                        <a href="#">
                            <h3>Restoring Hope</h3>
                        </a>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2>From Gallery</h2>
                <div class="divider-double"></div>
            </div>

            <div id="gallery-isotope" class="col-md-12 wow fadeInUp" data-wow-delay=".25s">
                <div class="item long-pic">
                    <a href="img/gallery/pic%20(1).jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                    <img src="{{url('public/home')}}/img/gallery/pic%20(1).jpg" alt="">
                </div>

                <div class="item small-pic">
                    <a href="img/gallery/pic%20(2).jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                    <img src="{{url('public/home')}}/img/gallery/pic%20(2).jpg" alt="">
                </div>

                <div class="item wide-pic">
                    <a href="img/gallery/pic%20(3).jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                    <img src="{{url('public/home')}}/img/gallery/pic%20(3).jpg" alt="">
                </div>

                <div class="item wide-pic">
                    <a href="img/gallery/pic%20(4).jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                    <img src="{{url('public/home')}}/img/gallery/pic%20(4).jpg" alt="">
                </div>

                <div class="item small-pic">
                    <a href="img/gallery/pic%20(5).jpg" data-gal="prettyPhoto[galllery]"><span class="overlay"></span></a>
                    <img src="{{url('public/home')}}/img/gallery/pic%20(5).jpg" alt="">
                </div>


            </div>
        </div>
    </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="testi-carousel" class="testi-slider text-center wow fadeInUp">
                    <div class="item">
                        <img src="{{url('public/home')}}/img/testi/pic%20(1).jpg" alt="" class="img-circle">
                        <blockquote>Blessing theme has a real desire and heart for ministry within the local church</blockquote>
                        <span class="testi-by">Aline Drummond</span>
                    </div>
                    <div class="item">
                        <img src="{{url('public/home')}}/img/testi/pic%20(2).jpg" alt="" class="img-circle">
                        <blockquote>I Just wanted to let you know how pleased we are and how great the Blessing theme is working for our National Church </blockquote>
                        <span class="testi-by">Mortimer Elmo</span>
                    </div>
                    <div class="item">
                        <img src="{{url('public/home')}}/img/testi/pic%20(3).jpg" alt="" class="img-circle">
                        <blockquote>
                            Get in touch with Blessing theme today and get ready to see your church grow!

                        </blockquote>
                        <span class="testi-by">Marina Leopold</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- section close -->
@stop()