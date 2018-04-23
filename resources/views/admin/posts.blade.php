@extends('admin.dashboard')
@section('content')
        <div class="container">

        <button type="button" data-toggle="modal" data-target="#addModal" class="btn btn-info" style="margin-top: 20px; margin-bottom: 20px; float: right">Add New</button>
        <table class="table table-bordered">
            <tr>
            <th>IDs</th>
            <th>Title</th>
            <th>Content</th>
            <th>Images</th>
            <th>Action</th>
            </tr>
            @foreach($posts as $value)
            <tr>
                <td>{{$value->id}}</td>

                    <td>{{$value->title}}</td>
                    <td>{{$value->content}}</td>
                    <td>
                        <img src="{{asset('images').'/'.$value->image}}" width="100px"></td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#editModal_{{$value->id}}" class="btn btn-success"><i class="fa fa-edit"></i> </a>
                        <a href="#" data-toggle="modal" data-target="#deleteModal_{{$value->id}}" type="button" class="btn btn-danger"><i class="fa fa-close"></i> </a>
                    </td>
                </tr>

                <!-- Edit Modal -->
                <form method="POST" action="{{route('updatepost',$value->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div id="editModal_{{$value->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Post</h4>
                                </div>
                                <div class="modal-body">
                                    <label>Edit Heading</label>

                                    <input type="text" class="form-control" name="title" value="{{$value->title}}">
                                    <label>Edit Content</label>
                                    <textarea type="text" class="form-control" name="content">{{$value->content}}</textarea>
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


                <!-- Delete Modal -->
                <form method="GET" action="{{route('deletepost',$value->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div id="deleteModal_{{$value->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Post</h4>
                                </div>
                                <div class="modal-body">
                                    <label>Edit Heading</label>

                                    <input type="text" class="form-control" name="title" value="{{$value->title}}">
                                    <label>Edit Content</label>
                                    <textarea type="text" class="form-control" name="content">{{$value->content}}</textarea>
                                    <img src="{{asset('images').'/'.$value->image}}" width="320px">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Yes" class="btn btn-success">
                                    <input type="button" value="No" class="btn btn-danger" data-dismiss="modal">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <!-- Delete Modal End -->


            @endforeach
        </table>

        <!-- Add Modal -->
        <form method="POST" action="{{route('addpost')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div id="addModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Post</h4>
                        </div>
                        <div class="modal-body">
                            <label>Insert Heading</label>

                            <input type="text" class="form-control" name="title" placeholder="your heading">
                            <label>Edit Content</label>
                            <textarea type="text" class="form-control" name="content" placeholder="your content"></textarea>
                            <label>Upload Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Submit" class="btn btn-default">
                        </div>
                    </div>

                </div>
            </div>
        </form>
        <!-- Add Modal End -->
        </div>
    </div>
    @endsection