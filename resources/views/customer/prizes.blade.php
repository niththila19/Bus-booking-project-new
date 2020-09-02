
@extends('multiauth::layouts.app') 

@section('content')
<h1>prize details  of bus routes</h1>


@if(count($prizes)>1)



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">start place</th>
      <th scope="col">end place </th>
      <th scope="col">prize</th>
    </tr>
  </thead>
  <tbody>
  <?php $x=1; ?>
  
  @foreach($prizes as $prize)
  <tr>
    <td>{{$x++}}</td>
    <td>{{$prize->start_place}}</td>
    <td>{{$prize->end_place}}</td>
    <td>{{$prize->prize}}</td>

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
