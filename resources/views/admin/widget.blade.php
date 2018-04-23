@extends('admin.dashboard')
@section('content')
        <div class="container">
            <div class="row">
                <form method="POST" action="{{route('updatewidget')}}">
                    {{csrf_field()}}
                <div class="col-sm-4">
                    <button data-toggle="collapse" class="btn btn-info button" data-target="#widget1">Widget 1</button>

                    <div id="widget1" class="collapsed">
                        <label>Head</label>
                        <input type="text" name="head2" class="form-control" value="{{$widget->pluck('head')[1]}}">
                        <label>Content</label>
                        <textarea type="text" name="content2" class="form-control">{{$widget->pluck('content')[1]}}</textarea>
                        <label>Head</label>
                        <input type="text" name="head3" class="form-control" value="{{$widget->pluck('head')[2]}}">
                        <label>Content</label>
                        <textarea type="text" name="content3" class="form-control">{{$widget->pluck('content')[2]}}</textarea>
                        <label>Head</label>
                        <input type="text" name="head4" class="form-control" value="{{$widget->pluck('head')[3]}}">
                        <label>Content</label>
                        <textarea type="text" name="content4" class="form-control">{{$widget->pluck('content')[3]}}</textarea>
                        <label>Head</label>
                        <input type="text" name="head5" class="form-control" value="{{$widget->pluck('head')[4]}}">
                        <label>Content</label>
                        <textarea type="text" name="content5" class="form-control">{{$widget->pluck('content')[4]}}</textarea>
                        <label>Head</label>
                        <input type="text" name="head6" class="form-control" value="{{$widget->pluck('head')[5]}}">
                        <label>Content</label>
                        <textarea type="text" name="content6" class="form-control">{{$widget->pluck('content')[5]}}</textarea>
                        <label>Head</label>
                        <input type="text" name="head7" class="form-control" value="{{$widget->pluck('head')[6]}}">
                        <label>Content</label>
                        <textarea type="text" name="content7" class="form-control">{{$widget->pluck('content')[6]}}</textarea>
                        <input type="submit" class="btn btn-success">
                    </div>
                </div>
                </form>

                <form method="POST" action="{{route('updatewidget2')}}">
                    {{csrf_field()}}
                <div class="col-sm-4">
                    <button data-toggle="collapse" class="btn btn-info button" data-target="#widget2">Widget 2</button>

                    <div id="widget2" class="collapsed">
                        <label>Head</label>
                        <input type="text" name="head1" class="form-control" value="{{$widget->pluck('head')[0]}}">
                        <label>Content</label>
                        <textarea type="text" name="content1" class="form-control">{{$widget->pluck('content')[0]}}</textarea>
                        <input type="submit" class="btn btn-success">
                    </div>
                </div>
                </form>
                {{--<div class="col-sm-4">
                    <button data-toggle="collapse" class="btn btn-info button" data-target="#widget3">Widget 3</button>

                    <div id="widget3" class="collapsed">

                        <input type="submit" class="btn btn-success">
                    </div>
                </div>

                <div class="col-sm-4">
                    <button data-toggle="collapse" class="btn btn-info button" data-target="#widget4">Widget 4</button>

                    <div id="widget4" class="collapsed">

                        <input type="submit" class="btn btn-success">
                    </div>
                </div>

                <div class="col-sm-4">
                    <button data-toggle="collapse" class="btn btn-info button" data-target="#widget5">Widget 5</button>

                    <div id="widget5" class="collapsed">

                        <input type="submit" class="btn btn-success">
                    </div>
                </div>

                <div class="col-sm-4">
                    <button data-toggle="collapse" class="btn btn-info button" data-target="#widget6">Widget 6</button>

                    <div id="widget6" class="collapsed">

                        <input type="submit" class="btn btn-success">
                    </div>
                </div>

                <div class="col-sm-4">
                    <button data-toggle="collapse" class="btn btn-info button" data-target="#widget7">Widget 7</button>

                    <div id="widget7" class="collapsed">

                        <input type="submit" class="btn btn-success">
                    </div>
                </div>--}}
                <form method="POST" action="{{route('updatewidget3')}}">
                    {{csrf_field()}}
                <div class="col-sm-4">
                    <button data-toggle="collapse" class="btn btn-info button" data-target="#widget8">Widget 8</button>

                    <div id="widget8" class="collapsed">
                        <label>Head</label>
                        <label>About</label>
                        <textarea type="text" name="content8" class="form-control">{{$widget->pluck('content')[7]}}</textarea>
                        <label>Address</label>
                        <input type="text" name="content9" class="form-control" value="{{$widget->pluck('content')[8]}}">
                        <label>Contact</label>
                        <input type="text" name="content10" class="form-control" value="{{$widget->pluck('content')[9]}}">
                        <input type="submit" class="btn btn-success">
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>
    @endsection