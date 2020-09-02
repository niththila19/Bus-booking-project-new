<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script type="text/javascript"  src="{{asset('js/app.js')}}"></script>
</head>
<body>

@if(empty($users)) 
<div class="alert alert-success" role="alert">
  <h2 class="alert-heading">OOPS!!</h2>
  <h3>unsucessfull register ..</h3>
  <hr>
  <h4>you need to check place . or wait some time</h4>
  <a class="btn btn-primary btn-lg" href="/customer" role="button">go back</a>
</div>

 @else
        <h1> {{$customer->name}} you are sucessfully registerd</h1>
        <h2>your booking details</h2>
        <h2>trip start place :-{{$customer->start_place}}</h2>
        <h2>trip end place :-{{$customer->end_place}}</h2>
        <h2>trip start time :-{{$customer->start_time}}</h2>
        <h2>trip date :-{{$customer->start_date}}</h2>
        <h2>Driver details</h2>
        <h2>driver id :-{{$users->id}} </h2>
        <h2>bus driver name      :-{{$users->name}} </h2>
        <h2>bus number           :-{{$users->busnumber}} </h2>
        <h2>driver phone number  :-{{$users->phonenumber}} </h2>
        
        
        
       
        <h3>thank you for using this bus service </h3>
        <a class="btn btn-primary btn-lg" href="/customer" role="button">back</a>

        
       
@endif




</body>
</html>