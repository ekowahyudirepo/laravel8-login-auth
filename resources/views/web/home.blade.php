@extends('layouts.main')

@section('content')
<div class="card">
    <div class="card-header">Home</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <h1>Laravel 8 Manually Authenticating Users (Login & Logout)</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam inventore nobis sapiente vero
                    eligendi! Dignissimos numquam expedita laborum perferendis. Provident at perferendis ut recusandae
                    ipsam doloremque voluptatibus quo laudantium dignissimos.</p>
                <div class="mt-3">
                    <a target="_blank" href="https://laravel.com/docs/8.x/authentication#authenticating-users"
                        class="btn btn-primary btn-lg"><i class="bi bi-book"></i> Read Documentation</a>
                    @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-success btn-lg"><i
                            class="bi bi-layout-text-window-reverse"></i> Go to Dashboard</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection