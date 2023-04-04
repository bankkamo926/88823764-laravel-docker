@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="emp_lname" class="col-md-4 col-form-label text-md-end">{{ __('emp_lname') }}</label>

                            <div class="col-md-6">
                                <input id="emp_lname" type="text" class="form-control @error('emp_lname') is-invalid @enderror" name="emp_lname" value="{{ old('emp_lname') }}" required autocomplete="emp_lname" autofocus>

                                @error('emp_lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="emp_gender" class="col-md-4 col-form-label text-md-end">{{ __('emp_gender') }}</label>

                            <div class="col-md-6">
                                <input id="emp_gender" type="text" class="form-control @error('emp_gender') is-invalid @enderror" name="emp_gender" required autocomplete="emp_gender">

                                @error('emp_gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="emp_picture" class="col-md-4 col-form-label text-md-end">{{ __('emp_picture') }}</label>

                            <div class="col-md-6">
                                <input id="emp_picture" type="text" class="form-control @error('emp_picture') is-invalid @enderror" name="emp_picture" required autocomplete="emp_picture">

                                @error('emp_picture')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><div class="row mb-3">
                            <label for="emp_dep_id" class="col-md-4 col-form-label text-md-end">{{ __('emp_dep_id') }}</label>

                            <div class="col-md-6">
                                <input id="emp_dep_id" type="number" class="form-control @error('emp_dep_id') is-invalid @enderror" name="emp_dep_id" required autocomplete="emp_dep_id">

                                @error('emp_dep_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
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
