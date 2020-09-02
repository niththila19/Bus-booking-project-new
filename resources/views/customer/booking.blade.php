@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Booking') }}</div>
          
                <div class="card-body">
                    <form method="post" action="{{ url('customer') }}">
                        @csrf
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Your Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('phone number') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start_place" class="col-md-4 col-form-label text-md-right">{{ __('start place') }}</label>

                            <div class="col-md-6">
                                <input id="start_place" type="text" class="form-control{{ $errors->has('start_place') ? ' is-invalid' : '' }}" name="start_place" value="{{ old('start_place') }}" required autofocus>

                                @if ($errors->has('start_place'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('start_place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="end_place" class="col-md-4 col-form-label text-md-right">{{ __('End place') }}</label>

                            <div class="col-md-6">
                                <input id="end_place" type="text" class="form-control{{ $errors->has('end_place') ? ' is-invalid' : '' }}" name="end_place" value="{{ old('end_place') }}" required autofocus>

                                @if ($errors->has('end_place'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('end_place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="start_time" class="col-md-4 col-form-label text-md-right">{{ __('start time') }}</label>

                            <div class="col-md-6">
                                <input id="start_time" type="time" class="form-control{{ $errors->has('start_time') ? ' is-invalid' : '' }}" name="start_time" value="{{ old('start_time') }}" required autofocus>

                                @if ($errors->has('start_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('start_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="start_date" class="col-md-4 col-form-label text-md-right">{{ __('booking date') }}</label>

                            <div class="col-md-6">
                                <input id="start_date" type="date" class="form-control{{ $errors->has('start_date') ? ' is-invalid' : '' }}" name="start_date" value="{{ old('start_date') }}" required autofocus>

                                @if ($errors->has('start_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
