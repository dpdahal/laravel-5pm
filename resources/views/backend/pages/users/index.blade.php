@extends('backend.master.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>User list</h1>
            </div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>S.n</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Role</th>
                        <th>Image</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($usersData as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <th>{{$user->email}}</th>
                            <td>{{$user->gender}}</td>
                            <td>{{$user->role}}</td>
                            <td>
                                @if($user->image)
                                    <img src="{{url($user->image)}}" alt="" style="width: 100px">
                                @endif
                            </td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>


                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
