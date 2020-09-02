
@extends('multiauth::layouts.app') 

@section('content')
<h1>employee details</h1>


@if(count($users)>1)



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name </th>
      <th scope="col"> Bus Number </th>
      <th scope="col">Phone Number</th>
      <th scope="col">Current Place </th>
      <th scope="col">Email</th>
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
    <td>{{$user->currentplace}}</td>
    <td>{{$user->email}}</td>
    <td colspan="2">
   <!-- <a href="{{route('employee.edit',$user->id)}}" class="btn btn-warning"> edit</a> -->
    <form action="{{route('employee.destroy',$user->id)}}" method="post" class="">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="delete" class="">
    <button type="submit" href="#" class="btn btn-danger"> delete</a>
    </form>
   
     </td>
    </tr>
    @endforeach
  </tbody>
</table>


@else
<p>no prizes there</p>

@endif

@endsection
