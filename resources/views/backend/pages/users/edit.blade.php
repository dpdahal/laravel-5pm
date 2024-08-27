@extends('backend.master.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 mb-3">
                <h1>Update User</h1>
            </div>
            <div class="col-md-12">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name">Name:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('name')}}
                            </a>
                        </label>
                        <input type="text" name="name" value="{{$userData->name}}" id="name" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('email')}}
                            </a>
                        </label>
                        <input type="email" name="email" value="{{$userData->email}}" readonly disabled id="email" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="gender">Gender:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('gender')}}
                            </a>
                        </label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male" {{$userData->gender=='male' ? 'selected' :''}}>Male</option>
                            <option value="female" {{$userData->gender=='female' ? 'selected' :''}}>Female</option>
                        </select>

                    </div>
                    <div class="form-group mb-2">
                        <label for="image">Image:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('image')}}
                            </a>
                        </label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if($userData->image)
                            <img src="{{url($userData->image)}}" alt="" style="width: 100px">
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <button class="btn btn-success">Update Record</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
