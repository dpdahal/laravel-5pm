@extends('frontend.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Create new account</h1>
                @include('lib.message')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name">Name:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('name')}}
                            </a>
                        </label>
                        <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email">Email:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('email')}}
                            </a>
                        </label>
                        <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('password')}}
                            </a>
                        </label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('password_confirmation')}}
                            </a>
                        </label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                               class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="gender">Gender:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('gender')}}
                            </a>
                        </label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="" disabled selected>----Select Gender----</option>
                            <option value="male" {{old('gender')=='male' ? 'selected' :''}}>Male</option>
                            <option value="female" {{old('gender')=='female' ? 'selected' :''}}>Female</option>
                        </select>

                    </div>
                    <div class="form-group mb-2">
                        <label for="image">Image:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('image')}}
                            </a>
                        </label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <button class="btn btn-success">Add Record</button>
                        <a href="{{route('login')}}" class="float-end">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
