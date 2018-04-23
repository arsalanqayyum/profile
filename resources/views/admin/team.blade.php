@extends('admin.dashboard')
@section('content')
        {{--<table class="table table-bordered">
            <tr>
                <th>IDs</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach($team as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->content}}</td>
                <td><img src="{{asset('images').'/'.$value->image}}"> </td>
                <td>
                    <a href="#" data-toggle="modal" data-target="#editModal_{{$value->id}}" class="btn btn-success"><i class="fa fa-edit"></i> </a>
                </td>
            </tr>



                @endforeach
        </table>--}}
            @foreach($team as $value)
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="{{asset('images').'/'.$value->image}}" height="220px">
                            </div>
                            <div class="col-sm-10">
                                <h1>{{$value->title}}</h1>
                                <span><h4>{{$value->content}}</h4></span>
                                <span><a href="#" data-toggle="modal" data-target="#editModal_{{$value->id}}" class="btn btn-success"><i class="fa fa-edit"></i> Edit </a></span>
                            </div>
                         </div>
                    </div>
                </div>

                <!-- Edit Modal -->
                <form method="POST" action="{{route('updateteam',$value->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div id="editModal_{{$value->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Team Member</h4>
                                </div>
                                <div class="modal-body">
                                    <label>Edit Name</label>

                                    <input type="text" class="form-control" name="name" value="{{$value->title}}">
                                    <label>Edit Designation</label>
                                    <textarea type="text" class="form-control" name="designation">{{$value->content}}</textarea>
                                    <img src="{{asset('images').'/'.$value->image}}" width="320px">
                                    <input type="file" name="image">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Update" class="btn btn-default">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <!-- Edit Modal End -->


            @endforeach

    @endsection