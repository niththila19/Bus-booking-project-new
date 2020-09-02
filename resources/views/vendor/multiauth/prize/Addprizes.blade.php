@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add route prizes') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ url('prize') }}">
                        @csrf
                        {{csrf_field()}}

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
                            <label for="prize" class="col-md-4 col-form-label text-md-right">{{ __('route prize') }}</label>

                            <div class="col-md-6">
                                <input id="prize" type="date" class="form-control{{ $errors->has('prize') ? ' is-invalid' : '' }}" name="prize" value="{{ old('prize') }}" required autofocus>

                                @if ($errors->has('prize'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prize') }}</strong>
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
