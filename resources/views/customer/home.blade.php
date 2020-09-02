<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Document</title>
    
</head>
<body>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">customer Dashboard</div>

                <div class="card-body"> 
                    <h3>welcome   </h3> 

                     <ul class="nav flex-column">
                     <li class="nav-item">
                              <a class="nav-link active" href="{{url('/customer/create')}}"> bus booking</a>
                         </li>
                        <li class="nav-item">
                              <a class="nav-link active" href="/customer/viewprizes"> view route prizes</a>
                         </li>
                      
                         <li class="nav-item">
                              <a class="nav-link active" href="/customer/editdetails"> edit trip details </a>
                         </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">cancel the trip</a>
                        </li>
                    
                     </ul>
                     
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>