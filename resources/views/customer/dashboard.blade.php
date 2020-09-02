<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  <title>booking</title>
</head>
<body>

<div class="alert alert-primary" role="alert">
 <h1> select your bus from here</h1>
 
</div>
 <?php //echo $_POST["start_place"]; ?><br>


 @if(count($users)>1)
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">employee name</th>
      <th scope="col">employee bus number </th>
      <th scope="col">employee phone number</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $x=1; ?>
 
  
  @foreach($users as $user)
  <tr>
    <td>{{$x++}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->busnumber}}</td>
    <td>{{$user->phonenumber}}</td>
    <td colspan="2">
    
    <a href="" class="btn btn-warning" > select</a>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>

 }

@else
<p>no prizes there</p>

@endif

<script >


</script>

</body>

</html>
