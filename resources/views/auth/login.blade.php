<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <link rel="stylesheet" href="{{url('frontend-assets/css/bootstrap.css')}}">
</head>
<body>
<div class="container">
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
                    <button class="btn btn-danger">Login page</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
