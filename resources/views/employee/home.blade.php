
@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Employee Dashboard</h2></div>

                <div class="card-body">
                @include('multiauth::message')
                <h3>{{$user->name}}   You are logged in as employee!  </h3>
                    <h4>welcome  to the employee page </h4> 

                     <ul class="nav flex-column">
                     <li class="nav-item">
                              <a class="nav-link active" href="/employee/home/view"> view details</a>
                         </li>
                        <li class="nav-item">
                              <a class="nav-link active" href="/employee/{{$user->id}}/edit"> edit details</a>
                         </li>
                      
                         <li class="nav-item">
                              <a class="nav-link active" href="#"> view next trip </a>
                         </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">close the account</a>
                        </li>
                    
                     </ul>
                     
                </div>
            </div>
        </div>
    </div>
</div>

@endsection