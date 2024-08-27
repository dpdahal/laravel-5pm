@extends('backend.master.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>User list</h1>
                @include('lib.message')
            </div>
            <div class="row">
                <form action="{{route('users')}}">
                    <div class="row mb-3">
                        <div class="col-md-10">
                            <input type="search" name="search" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
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
                            <td>{{$user->created_at->diffForHumans()}}</td>
                            <td>{{$user->updated_at->format('Y-m-d')}}</td>
                            <td>
                                <a href="{{route('edit',$user->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('delete',$user->id)}}"
                                   onclick="return confirm('Are you sure?')"
                                   class="btn btn-danger">Delete</a>
                            </td>  </tr>
                    </tbody>
                    @endforeach
                </table>
                <hr>
                {{$usersData->links()}}
            </div>
        </div>
    </div>

@endsection
