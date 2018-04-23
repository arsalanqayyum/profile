
<section id="footer" class="footer_widget">
    <div class="video_overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="main_widget">
                            <div class="col-sm-4 col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <div class="footer_logo">
                                        <img src="{{asset('images/logo.png')}}" alt="" />
                                    </div>
                                    <p>{{$getfoot->pluck('content')[7]}} </p>



                                </div>
                            </div>

                            <div class="col-sm-4  col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4>OUR STUDIO</h4>
                                    <ul>
                                        <li><a href="">
                                                <i class="fa fa-map-marker"></i>
                                                <span>{{$getfoot->pluck('content')[8]}}</span>
                                            </a></li>
                                        <li><a href=""><i class="fa fa-phone"></i> {{$getfoot->pluck('content')[9]}}</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4>STAY IN TOUCH</h4>

                                    <div class="footer_subcribs_area">
                                        <form class="navbar-form navbar-left" role="search">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <button type="submit" class="submit_btn"></button>
                                            </div>

                                        </form>
                                        <div class="flowus">
                                            <a href=""><i class="fa fa-facebook"></i></a>
                                            <a href=""><i class="fa fa-twitter"></i></a>
                                            <a href=""><i class="fa fa-google-plus"></i></a>
                                            <a href=""><i class="fa fa-instagram"></i></a>
                                            <a href=""><i class="fa fa-youtube"></i></a>
                                            <a href=""><i class="fa fa-dribbble"></i></a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="main_footer text-center">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <ul class="right_menu list-inline">
                                    <li><a href="">HELP</a></li>
                                    <li><a href="">TERMS & CONDITION</a></li>
                                    <li><a href="">PRIVACY</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="copyright_text">
                                    <p class=" wow fadeInRight" data-wow-duration="1s">Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Bootstrap Themes</a>2016. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>