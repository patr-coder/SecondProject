@extends('layouts.app')
@section('title', 'login')

@section('content')

    {{--<form method="POST" action="{{ route('login') }}">--}}
        @csrf
        <main class="text-center">
            <form class="form-signin" method="POST" action="{{ route('login') }}">
              <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
              @if(session('status'))
              {{session('status')}}
              @endif
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
              <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
            </form>
        </main>
        {{--<div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-4 text-center">

                    <h1 class="h3 mb-3 text-center">Please login</h1>
                    <p class="text-muted text-center">Login to access all the service. Do you have an account? <a
                            href="{{ route('register') }}">register</a></p>
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
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    placeholder="Choose a Password">
                @error('password')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login in</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy;{{ now()->year }}</p>
        </div>
    </form>--}}


@endsection
