@extends('admin.dashboard')
@section('content')
    <div style="background-color: #efefef;height: 200px; margin-bottom: 30px">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <img src="{{asset('images')}}/website_avatar2.jpg" class="img-circle" style="margin-top: 20px; width: 120px">
                </div>
                <div class="col-sm-10">
                   <div style="margin-left: -55px">
                       <span><p style="margin-top: 30px;margin-bottom: -10px;">welcome Back !</p></span>
                    <h2>{{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
                    <span><h4>{{$user->role}}</h4></span>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="admin-box">
                        <i class="fa fa-3x fa-sliders"></i>
                        <h4>Slider</h4>
                        <p>slides</p>
                        <span>{{$slide_count}}</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="admin-box">
                        <i class="fa fa-3x fa-pencil-square"></i>
                        <h4>Posts</h4>
                        <p>Posts</p>
                        <span>{{$post_count}}</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="admin-box">
                        <i class="fa fa-3x fa-pencil-square"></i>
                        <h4>Team</h4>
                        <p>Team Memebers</p>
                        @foreach($team_count as $counter)
                        <span>{{$counter->count}}</span>
                            @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endsection