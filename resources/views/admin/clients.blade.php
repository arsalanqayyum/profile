@extends('admin.dashboard')
@section('content')
        <div class="container">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal" style="margin-top: 20px; margin-bottom: 20px; float: right">Add New</button>
            <table class="table table-bordered">
                <tr>
                    <th>IDs</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach($client as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td><img src="{{asset('images').'/'.$value->image}}"></td>
                    <td>
                        <a href="#" data-toggle="modal" data-target="#editModal_{{$value->id}}" class="btn btn-success"><i class="fa fa-edit"></i> </a>
                        <a href="#" data-toggle="modal" data-target="#deleteModal_{{$value->id}}" class="btn btn-danger"><i class="fa fa-close"></i> </a>
                    </td>
                </tr>

                    <!-- Edit Modal -->
                    <form method="POST" action="{{route('updateclient',$value->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div id="editModal_{{$value->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Client</h4>
                                    </div>
                                    <div class="modal-body">

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
                    <form method="GET" action="{{route('deleteclient',$value->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div id="deleteModal_{{$value->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete Client</h4>
                                    </div>
                                    <div class="modal-body">

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
            <form method="POST" action="{{route('addclient')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div id="addModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Client</h4>
                            </div>
                            <div class="modal-body">

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