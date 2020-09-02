@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>

                <div class="card-body">
                @include('multiauth::message')
                     You are logged in to {{ config('multiauth.prefix') }} side! 
                    <h3>welcome  to the admin page </h3> 

                     <ul class="nav flex-column">
                        <li class="nav-item">
                              <a class="nav-link active" href="{{url('admin/home/addprize')}}"> add prizes</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link active" href="{{url('prize')}}"> view prizes </a>
                         </li>
                
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('employee/view')}}">view employees</a>
                        </li>
                      
                     </ul>
                     
                </div>
            </div>
        </div>
    </div>
</div>

@endsection