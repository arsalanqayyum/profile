@extends('main')
@section('content')
    <section id="home" class="home">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="main_home_slider text-center">
                            @foreach($sliders as $key => $post)
                            <div class="single_home_slider">
                                <div class="main_home wow fadeInUp" data-wow-duration="700ms">

                                        <div class="owl-item {{$key == 0 ? 'active ':''}}">
                                        <h2>{{$post->head}}</h2>
                                    <div class="separator"></div>
                                    <p>{{$post->content}}</p>
                                    <div class="home_btn">
                                        <a href="" class="btn btn-primary">LEARN MORE</a>
                                    </div>
                                        </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="main_about_area sections">
                    <div class="col-sm-10 col-sm-offset-1">

                        <div class="main_about_content">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="single_about_left_img text-center wow fadeInLeft" data-wow-duration=".6s">
                                        <img src="{{asset('images/ableft.png')}}" alt="" />
                                    </div>
                                </div>
                                <div class="col-sm-7 wow fadeInRight" data-wow-duration="700ms">
                                    <div class="single_about_right_content">
                                        <h3>{{$posts->pluck('title')[0]}}</h3>
                                        <p>{{$posts->pluck('content')[0]}}</p>

                                        <div class="home_btn">
                                            <a href="" class="btn btn-primary">LEARN MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section id="service" class="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="main_service_area sections text-center">
                        <div class="row">
                            <div class="head_title text-center">
                                <h3>{{$widget->pluck('head')[0]}}</h3>
                                <p>{{$widget->pluck('content')[0]}}</p>
                                <div class="separator2"></div>
                            </div>

                            <div class="main_service_content">
                                <div class="col-sm-4">
                                    <div class="single_service">
                                        <div class="single_service_icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="single_service_content">
                                            <h4>{{$widget->pluck('head')[1]}}</h4>
                                            <p>{{$widget->pluck('content')[1]}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single_service">
                                        <div class="single_service_icon">
                                            <i class="fa fa-picture-o"></i>
                                        </div>
                                        <div class="single_service_content">
                                            <h4>{{$widget->pluck('head')[2]}}</h4>
                                            <p>{{$widget->pluck('content')[2]}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single_service">
                                        <div class="single_service_icon">
                                            <i class="fa fa-television"></i>
                                        </div>
                                        <div class="single_service_content">
                                            <h4>{{$widget->pluck('head')[3]}}</h4>
                                            <p>{{$widget->pluck('content')[3]}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border_devider"></div>

                                <div class="col-sm-4">
                                    <div class="single_service">
                                        <div class="single_service_icon">
                                            <i class="fa fa-object-group"></i>
                                        </div>
                                        <div class="single_service_content">
                                            <h4>{{$widget->pluck('head')[4]}}</h4>
                                            <p>{{$widget->pluck('content')[4]}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single_service">
                                        <div class="single_service_icon">
                                            <i class="fa fa-paint-brush"></i>
                                        </div>
                                        <div class="single_service_content">
                                            <h4>{{$widget->pluck('head')[5]}}</h4>
                                            <p>{{$widget->pluck('content')[5]}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="single_service">
                                        <div class="single_service_icon">
                                            <i class="fa fa-heart-o"></i>
                                        </div>
                                        <div class="single_service_content">
                                            <h4>{{$widget->pluck('head')[6]}}</h4>
                                            <p>{{$widget->pluck('content')[6]}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="team" class="team">
        <div class="video_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="main_team sections text-center">
                            <div class="row">
                                <div class="head_title text-center">
                                    <h3>{{$posts->pluck('title')[1]}}</h3>
                                    <p>{{$posts->pluck('content')[1]}}</p>
                                    <div class="separator2"></div>
                                </div>
                                @foreach($team as $value)
                                <div class="col-sm-4 col-xs-12">
                                    <div class="single_team_content">
                                        <div class="single_team_img">
                                            <img src="{{asset('images').'/'.$value->image}}" alt="" />
                                        </div>
                                        <div class="single_team_text">
                                            <h4>{{$value->title}}</h4>
                                            <p>{{$value->content}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                                 <!-- End of col-sm-4 -->
                            </div>
                            {{--<div class="team_hiring_area">
                                <p>Become part of our dream team, let’s join us ! </p>
                                <a href="" class="btn btn-primary">we are Hiring</a>
                            </div>--}}
                        </div><!-- End of main team contant -->
                    </div>
                </div><!-- End of row -->
            </div>
        </div>
    </section>


    <section id="portfolio" class="portfolio">
        <div class="container-fluid">
            <div class="row">
                <div class="main_portfolio sections">
                    <div class="head_title text-center">
                        <h4>{{$posts->pluck('title')[5]}}</h4>
                        <a href="">See All Project in dribbble <i class="fa fa-chevron-right"></i></a>
                    </div>

                    <div class="main_portfolio_content text-center">
                        <div class="grid">
                            @foreach($work as $value)
                            <div class="grid-item">
                                <img src="{{asset('images').'/'.$value->image}}" alt="" />
                                {{--<div class="grid_item_overlay all_overlay">
                                    <a href="{{asset('images/pf1.jpg')}}" class="portfolio-img"> <i class="fa fa-picture-o"></i></a>
                                </div>--}}
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact sections">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="contact_contant">

                            <div class="col-sm-6">
                                <h4>GIVE US A GOOD NEWS</h4>
                                <div class="single_contant_left">
                                    <form action="#" id="formid">
                                        <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                        </div>

                                        <div class="">
                                            <input type="submit" value="Submit" class="btn btn-primary">
                                        </div>
                                        <!--</div>-->
                                    </form>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="main_clinetslogo">
                                    <h4>OUR HAPPY CLIENT</h4>
                                    <div class="row">
                                        @foreach($client as $value)
                                            <div class="col-sm-6 col-xs-6">
                                                <a href=""><img src="{{asset('images').'/'.$value->image}}" alt="" /></a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>


                        </div> <!-- End of messsage contant-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection