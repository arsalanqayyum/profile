@extends('admin.dashboard')
@section('content')


        <div class="container">
            @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
            <button type="button" data-toggle="modal" data-target="#addModal" class="btn btn-info" style="margin-top: 20px; margin-bottom: 20px; float: right">Add User</button>
            @endif
            <table class="table table-bordered">
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
                @foreach($user as $key => $value)
                <tr>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>

                    <td>{{$value->password}} <button data-toggle="modal" data-target="#respass_{{$value->id}}">Reset</button></td>

                    <td>{{$value->role}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->updated_at}}</td>
                    <td>
                        <a href="{{$value->id}}" data-toggle="modal" data-target="#editModal_{{$value->id}}" class="btn btn-success"><i class="fa fa-edit"></i> </a href="{{$value->id}}">
                    </td>
                </tr>

                    <!-- Edit Modal -->
                    <form method="POST" action="{{route('updateuser',$value->id)}}">
                        {{csrf_field()}}
                        <div id="editModal_{{$value->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add Post</h4>
                                    </div>
                                    <div class="modal-body">
                                        <label>Insert Name</label>

                                        <input type="text" class="form-control" name="name" placeholder="enter user name" value="{{$value->name}}">
                                        <label>Insert Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="enter user email" value="{{$value->email}}">
                                        <label>Edit Role</label>
                                        <select name="role_id">
                                            @foreach($role as $roles)
                                                <option value="{{$roles->id}}">{{$roles->role}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" value="Submit" class="btn btn-default">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <!-- Edit Modal End -->



                    <!-- Edit Password -->
                    <form method="POST" action="{{route('resetpassword',$value->id)}}">
                        {{csrf_field()}}
                        <div id="respass_{{$value->id}}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Add Post</h4>
                                    </div>
                                    <div class="modal-body">

                                        <label>Reset Password</label>
                                        <input type="password" name="password">
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" value="Submit" class="btn btn-default">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <!-- Edit password End -->



                    @endforeach
            </table>
        </div>


        <!-- Add Modal -->
        <form method="POST" action="{{route('adduser')}}">
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
                            <label>Insert Name</label>

                            <input type="text" class="form-control" name="name" placeholder="your heading">
                            <label>Insert Email</label>
                            <input type="text" class="form-control" name="email" placeholder="your content">
                            <label>Insert Password</label>
                            <input type="password" name="password" class="form-control">
                            <select name="role_id">
                                @foreach($role as $roles)
                                <option value="{{$roles->id}}">{{$roles->role}}</option>
                                    @endforeach
                            </select>
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
    @endsection