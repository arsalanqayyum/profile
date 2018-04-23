@extends('admin.dashboard')
@section('content')

        <div class="container">
            {{--@if(session()->has('message'))
                <div class="alert alert-success alert-dismissable" style="margin-top:45px">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>{{session()->get('message')}}</strong>
                </div>
            @endif--}}
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top: 15px; margin-bottom: 15px; float: right">Add New</button>
            @foreach($allslides as $slider)
                <table class="table table-bordered">
                    <tr>
                        <th>IDs</th>
                        <th>Head</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>

                    <tr>
                        <td>
                            {{$slider->id}}
                        </td>
                        <td width="400px">
                            <h3>{{$slider->head}}</h3>
                        </td>
                        <td width="500px">
                            <p>{{$slider->content}}</p>
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#editModal_{{$slider->id}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="" data-toggle="modal" data-target="#deleteModal_{{$slider->id}}" class="btn btn-danger"><i class="fa fa-close"></i></a>
                        </td>
                    </tr>

                </table>
                <!-- Edit Modal -->
                <form method="POST" action="{{route('updateslider',$slider->id)}}">
                    {{csrf_field()}}
                    <div id="editModal_{{$slider->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Slide</h4>
                                </div>
                                <div class="modal-body">
                                    <label>Edit Heading</label>

                                    <input type="text" class="form-control" name="head" value="{{$slider->head}}">
                                    <label>Edit Content</label>
                                    <textarea type="text" class="form-control" name="content">{{$slider->content}}</textarea>

                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Update" class="btn btn-default">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <!-- Edit Modal End -->

                <!-- Delete Modal -->
                <form method="GET" action="{{route('deleteslider',$slider->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div id="deleteModal_{{$slider->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Slider</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this Slider?</p>

                                    <label>Heading</label>
                                    <input type="text" class="form-control" value="{{$slider->head}}">
                                    <label>Content</label>
                                    <textarea type="text" class="form-control" name="content">{{$slider->content}}</textarea>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Yes" class="btn btn-success">
                                    <input type="button" value="No" class="close btn btn-danger" data-dismiss="modal">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <!-- Delete Modal End -->


        @endforeach
        <!-- Modal -->
            <form method="POST" action="{{route('insertslider')}}">
                {{csrf_field()}}
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add New Slide</h4>
                            </div>
                            <div class="modal-body">
                                <label>Insert Heading</label>
                                <input type="text" class="form-control" name="head">
                                <label>Insert Content</label>
                                <input type="text" class="form-control" name="content">
                            </div>
                            <div class="modal-footer">
                                <input type="submit" value="submit" class="btn btn-default">
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <!-- Modal End -->




        </div>


    </div>
    @endsection