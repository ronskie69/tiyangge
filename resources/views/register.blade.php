@extends('layouts.default')

@section('content-item')
    <div class="container">
        <div class="row p-4">
            @if (session('status'))
                <div class="alert bg-danger alert-closing alert-dismissible p-3">
                    <h6><i class="fa-solid fa-times-circle me-2"></i>Error!</h6>
                    <p>{{ session('status') }}</p>
                </div>
            @endif
            <div class="card shadow-0 p-2">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="card-header border-0">
                        <h6><strong>Sign Up</strong></h6>
                    </div>
                    <div class="card-body border-0">
                        <div class="form-group mb-2">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" id="username"/>
                        </div>
                        <div class="form-group mb-2">
                            <label for="alias">Alias:</label>
                            <input type="text" placeholder="Your Desired Nickname" class="form-control @error('alias') is-invalid @enderror" name="alias" id="alias"/>
                        </div>
                        <div class="form-group mb-2">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password"/>
                        </div>
                    </div>
                    <div class="card-footer border-0">
                        <button class="float-end btn btn-warning shadow-0 btn-sm text-lowercase text-capitalize">sign up</button>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection