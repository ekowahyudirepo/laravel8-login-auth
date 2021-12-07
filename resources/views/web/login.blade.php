@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        @if(session()->has('error'))
        <div class="alert alert-warning" role="alert">
            {{ session('error') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="{{ url('/authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="inputEmail" value="{{ old('email') }}">
                            @error('email')
                            <div id="email" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="inputPassword">
                            @error('password')
                            <div id="password" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="btnSubmit" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="checkbox" name="remember"> Remember me
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="btnSubmit" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection