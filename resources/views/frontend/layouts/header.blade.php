@section('header')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('frontend-assets/css/bootstrap.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('frontend.layouts.menu')
        </div>


@stop
