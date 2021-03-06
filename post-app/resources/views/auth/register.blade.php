@extends('layouts.app')
@section('title', 'register')

@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-4 text-center">
                    <h3>Welcome, create an account to get started</h3>
                    <p class="text-muted">Already have an account? please go to <a href="{{ ('login') }}">login</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-4">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        <span>{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="username">username</label>
                                <input type="text" class="form-control  @error('username') is-invalid @enderror"
                                    name="username" placeholder="Username">
                                @error('username')
                                    <div class="invalid-feedback">
                                        <span>{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label ">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                placeholder="eg: john@mail.com">
                            @error('email')
                                <div class="invalid-feedback">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" placeholder="Choose a Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" repeat your password>
                        </div>
                        <button class="btn btn-primary" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>

    </form>
@endsection
