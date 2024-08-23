@extends('frontend.layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h1>Login page</h1>
                @include('lib.message')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="email">Email:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('email')}}
                            </a>
                        </label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password:
                            <a style="color: red;text-decoration: none">
                                {{$errors->first('password')}}
                            </a>
                        </label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <button class="btn btn-success">Login page</button>
                        <a href="{{route('register')}}" class="float-end">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
